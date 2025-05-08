<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Meals</h1>
            <a href="{{ route('meals.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Create Meal
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white rounded shadow overflow-hidden">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Calories</th>
                    <th class="px-4 py-2">Proteins</th>
                    <th class="px-4 py-2">Carbohydrate</th>
                    <th class="px-4 py-2">Lipids</th>
                    <th class="px-4 py-2 text-right">Actions</th>
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
                        <td class="px-4 py-2 text-right space-x-2">
                            <a href="{{ route('meals.edit', $meal) }}"
                               class="inline-block bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                Edit
                            </a>
                            <form action="{{ route('meals.destroy', $meal) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this meal?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
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
