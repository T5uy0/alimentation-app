@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-4">Bienvenue sur <span class="text-blue-600">Alimentation App</span> 🍽️</h1>
        <p class="text-gray-700 text-lg mb-6">
            Suivez vos repas, visualisez vos apports nutritionnels et gardez le contrôle sur votre alimentation.
        </p>

        <div class="flex space-x-4">
            <a href="{{ route('meals.index') }}"
               class="bg-blue-600 text-white px-6 py-2 rounded shadow hover:bg-blue-700 transition">
                Voir les repas
            </a>

            <a href="{{ route('meals.create') }}"
               class="bg-green-600 text-white px-6 py-2 rounded shadow hover:bg-green-700 transition">
                Ajouter un repas
            </a>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-4 bg-white rounded shadow text-center">
                <h2 class="text-xl font-semibold mb-2">Calories</h2>
                <p class="text-gray-600">Suivi de vos apports caloriques</p>
            </div>

            <div class="p-4 bg-white rounded shadow text-center">
                <h2 class="text-xl font-semibold mb-2">Macros</h2>
                <p class="text-gray-600">Protéines, lipides et glucides</p>
            </div>

            <div class="p-4 bg-white rounded shadow text-center">
                <h2 class="text-xl font-semibold mb-2">Historique</h2>
                <p class="text-gray-600">Consultez les repas enregistrés</p>
            </div>
        </div>
    </div>
@endsection
