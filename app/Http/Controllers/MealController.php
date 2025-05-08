<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use App\Models\Meal;


class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meals = Meal::availableTo(auth()->id())
            ->orderBy('name')
            ->get();
        return view('meals.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMealRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        Meal::create($data);

        return redirect()->route('meals.index')->with('success', 'Meal created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {
        return view('meals.show', compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $meal = Meal::find($id);
        return view('meals.edit', compact('meal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMealRequest $request, string $id)
    {
        $meal = Meal::find($id);
        $meal->update($request->validated());

        return redirect()->route('meals.index')->with('success', 'Meal updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $meal = Meal::find($id);
        $meal->delete(); // Soft delete (ne supprime pas vraiment de la BDD)

        return redirect()->route('meals.index')->with('success', 'Meal deleted successfully!');
    }
}
