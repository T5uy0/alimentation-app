<?php

namespace App\Http\Controllers;
use App\Models\Consumption;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $todayConsumptions = Consumption::with('meal')
            ->where('user_id', auth()->id())
            ->whereDate('consumed_at', Carbon::today())
            ->orderBy('consumed_at', 'desc')
            ->get();

        return view('home',compact('todayConsumptions'));
    }
}
