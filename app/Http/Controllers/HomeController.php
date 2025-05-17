<?php

namespace App\Http\Controllers;
use App\Models\Consumption;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $consumptions = $this->getTodayConsumptions($today);
        $totals = $this->calculateTotals($consumptions);
        $grouped = $this->getGroupedConsumptions($today);
        $targets = $this->getTargets();

        return view('home', compact('totals', 'consumptions', 'grouped', 'targets'));
    }

    private function getTodayConsumptions(Carbon $date)
    {
        return Consumption::with('meal')
            ->where('user_id', auth()->id())
            ->whereDate('consumed_at', $date)
            ->get();
    }

    private function calculateTotals($consumptions)
    {
        $totals = [
            'calories' => 0,
            'proteins' => 0,
            'carbohydrate' => 0,
            'lipids' => 0,
        ];

        foreach ($consumptions as $consumption) {
            $meal = $consumption->meal;
            $quantity = $consumption->quantity;

            $totals['calories']     += $meal->calories * $quantity;
            $totals['proteins']     += $meal->proteins * $quantity;
            $totals['carbohydrate'] += $meal->carbohydrate * $quantity;
            $totals['lipids']       += $meal->lipids * $quantity;
        }

        return $totals;
    }

    private function getGroupedConsumptions(Carbon $date)
    {
        $types = ['breakfast', 'lunch', 'dinner', 'snack'];
        $grouped = [];

        foreach ($types as $type) {
            $grouped[$type] = Consumption::with('meal')
                ->where('user_id', auth()->id())
                ->where('type', $type)
                ->whereDate('consumed_at', $date)
                ->orderByDesc('consumed_at')
                ->get();
        }

        return $grouped;
    }

    private function getTargets()
    {
        return [
            'calories' => 2500,
            'proteins' => 150,     // g
            'carbohydrate' => 300, // g
            'lipids' => 70,        // g
        ];
    }
}
