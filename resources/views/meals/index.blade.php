<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">My Meals</h1>
            <a href="{{ route('meals.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Add New Meal
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded shadow p-4 mb-6">
            <form action="{{ route('meals.index') }}" method="GET" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700">Search by name</label>
                        <input type="text" name="search" id="search" value="{{ request('search') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Meal name...">
                    </div>

                    <div>
                        <label for="min_calories" class="block text-sm font-medium text-gray-700">Minimum calories</label>
                        <input type="number" name="min_calories" id="min_calories" value="{{ request('min_calories') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            min="0" step="1" placeholder="Min calories">
                    </div>

                    <div>
                        <label for="nutrient_filter" class="block text-sm font-medium text-gray-700">Filter by nutrient</label>
                        <select name="nutrient_filter" id="nutrient_filter" onchange="toggleNutrientValue()"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Select a nutrient</option>
                            <option value="proteins" {{ request('nutrient_filter') == 'proteins' ? 'selected' : '' }}>Proteins</option>
                            <option value="carbohydrate" {{ request('nutrient_filter') == 'carbohydrate' ? 'selected' : '' }}>Carbohydrates</option>
                            <option value="lipids" {{ request('nutrient_filter') == 'lipids' ? 'selected' : '' }}>Fats</option>
                        </select>
                    </div>

                    <div>
                        <label for="nutrient_value" class="block text-sm font-medium text-gray-700">Minimum value</label>
                        <input type="number" name="nutrient_value" id="nutrient_value" value="{{ request('nutrient_value') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 disabled:bg-gray-100 disabled:text-gray-500"
                            min="0" step="1" placeholder="Minimum value" {{ !request('nutrient_filter') ? 'disabled' : '' }}>
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('meals.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">
                        Reset
                    </a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                        Filter
                    </button>
                </div>
            </form>
        </div>

        <table class="min-w-full bg-white rounded shadow overflow-hidden">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Calories</th>
                    <th class="px-4 py-2">Proteins</th>
                    <th class="px-4 py-2">Carbohydrates</th>
                    <th class="px-4 py-2">Fats</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($meals as $meal)
                    <tr class="border-b">
                        <td class="px-4 py-2">
                            <a href="{{ route('meals.show', $meal) }}" class="text-blue-600 hover:underline">
                                {{ $meal->name ?? '—' }}
                            </a>
                        </td>
                        <td class="px-4 py-2">{{ $meal->calories }}</td>
                        <td class="px-4 py-2">{{ $meal->proteins }}</td>
                        <td class="px-4 py-2">{{ $meal->carbohydrate }}</td>
                        <td class="px-4 py-2">{{ $meal->lipids }}</td>
                        <td class="px-4 py-2">
                            @if($meal->user_id)
                                <div class="flex space-x-2">
                                    <a href="{{ route('meals.edit', $meal) }}"
                                       class="text-blue-600 hover:text-blue-800"
                                       title="Edit meal">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('meals.destroy', $meal) }}" method="POST" class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this meal?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" title="Delete meal">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-4 text-center text-gray-500">No meals found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>

@push('scripts')
<script>
    function toggleNutrientValue() {
        const nutrientFilter = document.getElementById('nutrient_filter');
        const nutrientValue = document.getElementById('nutrient_value');

        nutrientValue.disabled = !nutrientFilter.value;

        if (!nutrientFilter.value) {
            nutrientValue.value = '';
        }
    }

    // Exécuter au chargement de la page
    document.addEventListener('DOMContentLoaded', toggleNutrientValue);
</script>
@endpush
