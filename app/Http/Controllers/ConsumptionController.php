<?php

namespace App\Http\Controllers;
use App\Models\Meal;
use App\Models\Consumption;
use App\Http\Requests\StoreConsumptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ConsumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consumptions = Consumption::orderBy("created_at","desc")->get();
        // $todayConsumptions = Consumption::with('meal')
        //     ->where('user_id', auth()->id())
        //     ->whereDate('consumed_at', Carbon::today())
        //     ->orderBy('consumed_at', 'desc')
        //     ->get();

            return view('consumptions.index', compact('consumptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupère tous les repas disponibles pour l'utilisateur connecté
        $meals = Meal::orderBy('name')->get();

        return view('consumptions.create', compact('meals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsumptionRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        Consumption::create($data);

        return redirect()->route('consumptions.index')->with('success', 'Consumption added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
