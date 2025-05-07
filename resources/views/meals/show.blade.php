<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Meal Details</h1>

            <div class="flex gap-2">
                <a href="{{ route('meals.edit', $meal) }}"
                   class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    Edit
                </a>

                <form action="{{ route('meals.destroy', $meal) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this meal?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="bg-white rounded shadow p-6 space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700">
                <div>
                    <span class="font-medium">Name:</span>
                    {{ $meal->name }}
                </div>
                <div>
                    <span class="font-medium">Calories:</span>
                    {{ $meal->calories }}
                </div>
                <div>
                    <span class="font-medium">Proteins:</span>
                    {{ $meal->proteins }} g
                </div>
                <div>
                    <span class="font-medium">Carbohydrate:</span>
                    {{ $meal->carbohydrate }} g
                </div>
                <div>
                    <span class="font-medium">Lipids:</span>
                    {{ $meal->lipids }} g
                </div>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('meals.index') }}" class="text-blue-600 hover:underline">
                ← Back to Meal List
            </a>
        </div>

    </div>
</x-app-layout>
