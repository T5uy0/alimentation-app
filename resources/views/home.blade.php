<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">
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
                    <h2 class="text-xl font-semibold mb-4">Calories</h2>

                    <canvas id="calorieDonut" width="150" height="150" class="mx-auto mb-2"></canvas>

                    <p class="text-sm text-gray-500">
                        {{ $totals['calories'] }} / {{ $targets['calories'] }} kcal
                    </p>
                </div>

                <script type="module">
                    const ctx = document.getElementById('calorieDonut').getContext('2d');

                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['Consumed', 'Remaining'],
                            datasets: [{
                                data: [{{ $totals['calories'] }}, {{ max(0, $targets['calories'] - $totals['calories']) }}],
                                backgroundColor: ['#3b82f6', '#e5e7eb'], // Tailwind blue + gray
                                borderWidth: 0
                            }]
                        },
                        options: {
                            cutout: '70%',
                            plugins: {
                                legend: { display: false },
                                tooltip: {
                                    callbacks: {
                                        label: function(ctx) {
                                            return ctx.label + ': ' + ctx.parsed + ' kcal';
                                        }
                                    }
                                }
                            },
                            hover: { mode: null }
                        }
                    });
                </script>


                <div class="p-4 bg-white rounded shadow">
                    <h2 class="text-xl font-semibold mb-4 text-center">Macros</h2>

                    {{-- Proteins --}}
                    <div class="mb-4">
                        <div class="flex justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>Proteins</span>
                            <span>{{ $totals['proteins'] }} / {{ $targets['proteins'] }}g</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-4">
                            <div class="bg-green-500 h-4 rounded-full"
                                style="width: {{ min(100, round($totals['proteins'] / $targets['proteins'] * 100)) }}%">
                            </div>
                        </div>
                    </div>

                    {{-- Carbs --}}
                    <div class="mb-4">
                        <div class="flex justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>Carbs</span>
                            <span>{{ $totals['carbohydrate'] }} / {{ $targets['carbohydrate'] }}g</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-4">
                            <div class="bg-blue-500 h-4 rounded-full"
                                style="width: {{ min(100, round($totals['carbohydrate'] / $targets['carbohydrate'] * 100)) }}%">
                            </div>
                        </div>
                    </div>

                    {{-- Fats --}}
                    <div>
                        <div class="flex justify-between text-sm font-medium text-gray-700 mb-1">
                            <span>Lipids</span>
                            <span>{{ $totals['lipids'] }} / {{ $targets['lipids'] }}g</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-4">
                            <div class="bg-yellow-500 h-4 rounded-full"
                                style="width: {{ min(100, round($totals['lipids'] / $targets['lipids'] * 100)) }}%">
                            </div>
                        </div>
                    </div>
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

