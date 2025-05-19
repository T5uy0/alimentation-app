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
    public function index(Request $request)
    {
        $query = Meal::availableTo(auth()->id());

        // Filtre par nom
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filtre par calories
        if ($request->filled('min_calories')) {
            $query->where('calories', '>=', $request->min_calories);
        }

        // Filtre par nutriment
        if ($request->filled('nutrient_filter')) {
            $nutrient = $request->nutrient_filter;
            $value = $request->nutrient_value;

            if ($value > 0) {
                switch ($nutrient) {
                    case 'proteins':
                        $query->where('proteins', '>=', $value);
                        break;
                    case 'carbohydrate':
                        $query->where('carbohydrate', '>=', $value);
                        break;
                    case 'lipids':
                        $query->where('lipids', '>=', $value);
                        break;
                }
            }
        }

        $meals = $query->orderBy('name')->get();

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

        return redirect()->route('meals.index')->with('success', 'Meal added successfully!');
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
        $meal->delete();

        return redirect()->route('meals.index')->with('success', 'Meal deleted successfully!');
    }
}
