<x-app-layout>
    <div class="max-w-xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Edit Meal</h1>

        <a href="{{ route('meals.index') }}" class="inline-block mb-4 text-blue-600 hover:underline">
            ← Back to list
        </a>

        <form action="{{ route('meals.update', $meal) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" class="w-full border rounded p-2"
                       value="{{ old('name', $meal->name) }}">
                @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Calories</label>
                <input type="number" name="calories" class="w-full border rounded p-2"
                       value="{{ old('calories', $meal->calories) }}">
                @error('calories') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Proteins (g)</label>
                <input type="number" step="0.01" name="proteins" class="w-full border rounded p-2"
                       value="{{ old('proteins', $meal->proteins) }}">
                @error('proteins') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Carbohydrates (g)</label>
                <input type="number" step="0.01" name="carbohydrate" class="w-full border rounded p-2"
                       value="{{ old('carbohydrate', $meal->carbohydrate) }}">
                @error('carbohydrate') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Lipids (g)</label>
                <input type="number" step="0.01" name="lipids" class="w-full border rounded p-2"
                       value="{{ old('lipids', $meal->lipids) }}">
                @error('lipids') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                    class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                Update Meal
            </button>
        </form>
    </div>
</x-app-layout>
