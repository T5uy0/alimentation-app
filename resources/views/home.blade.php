<x-app-layout>
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold mb-4">Welcome to <span class="text-blue-600">Alimentation App</span> 🍽️</h1>
        <p class="text-gray-700 text-lg mb-6">
            Track your meals, monitor your nutritional intake, and stay in control of your diet.
        </p>

        <div class="flex space-x-4">
            <a href="{{ route('consumptions.create') }}"
            class="bg-blue-600 text-white px-6 py-2 rounded shadow hover:bg-blue-700 transition">
                Add a consumption
            </a>
            <a href="{{ route('meals.index') }}"
            class="bg-orange-600 text-white px-6 py-2 rounded shadow hover:bg-orange-700 transition">
                View Meals
            </a>

            <a href="{{ route('meals.create') }}"
            class="bg-green-600 text-white px-6 py-2 rounded shadow hover:bg-green-700 transition">
                Add a Meal
            </a>
        </div>
        @if(!$consumptions->isEmpty())
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="p-4 bg-white rounded shadow text-center">
                    <h2 class="text-xl font-semibold mb-2">Calories</h2>
                    <p class="text-gray-700 text-lg font-bold">
                        {{ $totals['calories'] }} kcal
                    </p>
                </div>

                <div class="p-4 bg-white rounded shadow text-center">
                    <h2 class="text-xl font-semibold mb-2">Macros</h2>
                    <p class="text-gray-600">Proteins: <strong>{{ $totals['proteins'] }}g</strong></p>
                    <p class="text-gray-600">Carbs: <strong>{{ $totals['carbohydrate'] }}g</strong></p>
                    <p class="text-gray-600">Fats: <strong>{{ $totals['lipids'] }}g</strong></p>
                </div>

                <div class="p-4 bg-white rounded shadow text-center">
                    <h2 class="text-xl font-semibold mb-2">Today</h2>
                    <p class="text-gray-600">You logged {{ $totals['calories'] > 0 ? 'meals today' : 'no meals yet' }}.</p>
                    <a href="{{ route('consumptions.index') }}" class="text-blue-600 hover:underline text-sm">
                        View consumptions →
                    </a>
                </div>

            </div>
        @endif


        <div class="max-w-7xl mx-auto py-8 px-4">
            <h1 class="text-2xl font-bold mb-6">Your Consumptions Today</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($grouped as $type => $consumptions)
                    <div class="bg-white rounded shadow p-4">
                        <h2 class="text-lg font-semibold mb-4 text-center">
                            @if($type === 'breakfast')
                                🥐 Breakfast
                            @elseif($type === 'lunch')
                                🍽️ Lunch
                            @elseif($type === 'dinner')
                                🍝 Dinner
                            @elseif($type === 'snack')
                                🍎 Snack
                            @else
                                {{ ucfirst($type) }}
                            @endif
                        </h2>

                        @forelse($consumptions as $consumption)
                            <div class="border-b pb-2 mb-2 text-sm">
                                <div class="font-medium">
                                    <a href="{{ route('meals.show', $consumption->meal) }}"
                                       class="text-blue-600 hover:underline">
                                        {{ $consumption->meal->name ?? '—' }}
                                    </a>
                                </div>
                                <div>Quantity: {{ $consumption->quantity }}</div>
                                <div class="text-gray-500 text-xs">
                                    {{ $consumption->consumed_at->format('Y-m-d H:i') }}
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-sm text-center">No consumptions logged.</p>
                        @endforelse
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>

