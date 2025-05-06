@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-4">Welcome to <span class="text-blue-600">Alimentation App</span> 🍽️</h1>
        <p class="text-gray-700 text-lg mb-6">
            Track your meals, monitor your nutritional intake, and stay in control of your diet.
        </p>

        <div class="flex space-x-4">
            <a href="{{ route('meals.index') }}"
               class="bg-blue-600 text-white px-6 py-2 rounded shadow hover:bg-blue-700 transition">
                View Meals
            </a>

            <a href="{{ route('meals.create') }}"
               class="bg-green-600 text-white px-6 py-2 rounded shadow hover:bg-green-700 transition">
                Add a Meal
            </a>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-4 bg-white rounded shadow text-center">
                <h2 class="text-xl font-semibold mb-2">Calories</h2>
                <p class="text-gray-600">Track your caloric intake</p>
            </div>

            <div class="p-4 bg-white rounded shadow text-center">
                <h2 class="text-xl font-semibold mb-2">Macros</h2>
                <p class="text-gray-600">Proteins, fats and carbohydrates</p>
            </div>

            <div class="p-4 bg-white rounded shadow text-center">
                <h2 class="text-xl font-semibold mb-2">History</h2>
                <p class="text-gray-600">View your saved meals</p>
            </div>
        </div>
    </div>
@endsection
