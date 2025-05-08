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

        $consumptions = Consumption::with('meal')
            ->where('user_id', auth()->id())
            ->whereDate('consumed_at', $today)
            ->get();


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

        return view('home',compact('totals','consumptions'));
    }
}
