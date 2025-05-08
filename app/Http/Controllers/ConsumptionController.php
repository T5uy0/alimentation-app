<?php

namespace App\Http\Controllers;
use App\Models\Meal;
use App\Models\Consumption;
use App\Http\Requests\StoreConsumptionRequest;
use App\Http\Requests\UpdateConsumptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ConsumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consumptions = Consumption::where('user_id', auth()->id())->orderBy('consumed_at', 'desc')->get();
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
    public function edit(Consumption $consumption)
    {
        if ($consumption->user_id !== auth()->id()) {
            abort(403);
        }

        $meals = Meal::orderBy('name')->get();

        return view('consumptions.edit', compact('consumption', 'meals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsumptionRequest $request, Consumption $consumption)
    {
        if ($consumption->user_id !== auth()->id()) {
            abort(403);
        }

        $consumption->update($request->validated());

        return redirect()
            ->route('consumptions.index')
            ->with('success', 'Consumption updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consumption $consumption)
    {
        if ($consumption->user_id !== auth()->id()) {
            abort(403);
        }

        $consumption->delete();

        return redirect()
            ->route('consumptions.index')
            ->with('success', 'Consumption deleted successfully.');
    }
}
