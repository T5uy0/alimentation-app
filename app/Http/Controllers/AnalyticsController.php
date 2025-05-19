<?php

namespace App\Http\Controllers;

use App\Models\Consumption;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->get('period', 'week'); // Default to week
        $endDate = Carbon::now()->endOfDay(); // Fin de la journée d'aujourd'hui

        switch ($period) {
            case 'month':
                $startDate = Carbon::now()->subMonth()->startOfDay();
                break;
            case 'quarter':
                $startDate = Carbon::now()->subMonths(3)->startOfDay();
                break;
            default: // week
                $startDate = Carbon::now()->subWeek()->startOfDay();
                break;
        }

        // Get daily totals for the selected period
        $dailyTotals = Consumption::with('meal')
            ->where('consumptions.user_id', auth()->id())
            ->whereBetween('consumed_at', [$startDate, $endDate])
            ->select(
                DB::raw('DATE(consumed_at) as date'),
                DB::raw('SUM(meals.calories * consumptions.quantity) as total_calories'),
                DB::raw('SUM(meals.proteins * consumptions.quantity) as total_proteins'),
                DB::raw('SUM(meals.carbohydrate * consumptions.quantity) as total_carbohydrates'),
                DB::raw('SUM(meals.lipids * consumptions.quantity) as total_lipids')
            )
            ->join('meals', 'consumptions.meal_id', '=', 'meals.id')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Calculate averages for the period
        $averages = [
            'calories' => $dailyTotals->avg('total_calories'),
            'proteins' => $dailyTotals->avg('total_proteins'),
            'carbohydrates' => $dailyTotals->avg('total_carbohydrates'),
            'lipids' => $dailyTotals->avg('total_lipids'),
        ];

        // Prepare data for Chart.js
        $chartData = [
            'labels' => $dailyTotals->pluck('date')->map(function($date) {
                return Carbon::parse($date)->format('M d');
            }),
            'datasets' => [
                [
                    'label' => 'Calories',
                    'data' => $dailyTotals->pluck('total_calories'),
                    'borderColor' => '#3B82F6', // blue-500
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                ],
                [
                    'label' => 'Proteins (g)',
                    'data' => $dailyTotals->pluck('total_proteins'),
                    'borderColor' => '#10B981', // emerald-500
                    'backgroundColor' => 'rgba(16, 185, 129, 0.1)',
                ],
                [
                    'label' => 'Carbohydrates (g)',
                    'data' => $dailyTotals->pluck('total_carbohydrates'),
                    'borderColor' => '#F59E0B', // amber-500
                    'backgroundColor' => 'rgba(245, 158, 11, 0.1)',
                ],
                [
                    'label' => 'Fats (g)',
                    'data' => $dailyTotals->pluck('total_lipids'),
                    'borderColor' => '#EF4444', // red-500
                    'backgroundColor' => 'rgba(239, 68, 68, 0.1)',
                ],
            ]
        ];

        return view('analytics.index', compact('chartData', 'averages', 'period'));
    }
}
