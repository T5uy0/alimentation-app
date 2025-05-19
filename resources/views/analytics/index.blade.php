<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Analytics</h1>
            <div class="flex space-x-2">
                <a href="{{ route('analytics.index', ['period' => 'week']) }}"
                   class="px-4 py-2 rounded {{ $period === 'week' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Week
                </a>
                <a href="{{ route('analytics.index', ['period' => 'month']) }}"
                   class="px-4 py-2 rounded {{ $period === 'month' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Month
                </a>
                <a href="{{ route('analytics.index', ['period' => 'quarter']) }}"
                   class="px-4 py-2 rounded {{ $period === 'quarter' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    3 Months
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded shadow p-4">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Average Calories</p>
                        <p class="mt-1 text-2xl font-semibold text-blue-600">{{ round($averages['calories']) }}</p>
                        <p class="text-sm text-gray-500">kcal/day</p>
                    </div>
                    <div class="p-2 bg-blue-100 rounded">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow p-4">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Average Proteins</p>
                        <p class="mt-1 text-2xl font-semibold text-emerald-600">{{ round($averages['proteins']) }}</p>
                        <p class="text-sm text-gray-500">g/day</p>
                    </div>
                    <div class="p-2 bg-emerald-100 rounded">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow p-4">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Average Carbs</p>
                        <p class="mt-1 text-2xl font-semibold text-amber-600">{{ round($averages['carbohydrates']) }}</p>
                        <p class="text-sm text-gray-500">g/day</p>
                    </div>
                    <div class="p-2 bg-amber-100 rounded">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow p-4">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Average Fats</p>
                        <p class="mt-1 text-2xl font-semibold text-red-600">{{ round($averages['lipids']) }}</p>
                        <p class="text-sm text-gray-500">g/day</p>
                    </div>
                    <div class="p-2 bg-red-100 rounded">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="bg-white rounded shadow overflow-hidden">
            <div class="p-4 border-b border-gray-200">
                <h2 class="text-lg font-medium text-gray-900">Nutrition Trends</h2>
                <p class="mt-1 text-sm text-gray-500">Daily nutritional intake over the selected period</p>
            </div>
            <div class="p-4">
                <canvas id="nutritionChart" class="w-full" style="min-height: 300px;"></canvas>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('nutritionChart').getContext('2d');

            new Chart(ctx, {
                type: 'line',
                data: @json($chartData),
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(255, 255, 255, 0.9)',
                            titleColor: '#1F2937',
                            bodyColor: '#4B5563',
                            borderColor: '#E5E7EB',
                            borderWidth: 1,
                            padding: 12,
                            boxPadding: 6,
                            usePointStyle: true,
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.dataset.label.includes('Calories')) {
                                        label += Math.round(context.parsed.y) + ' kcal';
                                    } else {
                                        label += Math.round(context.parsed.y) + ' g';
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                padding: 10
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                padding: 10
                            }
                        }
                    }
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
