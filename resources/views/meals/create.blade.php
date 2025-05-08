<x-app-layout>
<div class="max-w-7xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Create a Meal</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('meals.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" value="{{ old('name') }}">
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Calories</label>
            <input type="number" name="calories" class="w-full border rounded p-2" value="{{ old('calories') }}">
            @error('calories') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Proteins (g)</label>
            <input type="number" name="proteins" step="0.01" class="w-full border rounded p-2" value="{{ old('proteins') }}">
            @error('proteins') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Carbohydrates (g)</label>
            <input type="number" name="carbohydrate" step="0.01" class="w-full border rounded p-2" value="{{ old('carbohydrate') }}">
            @error('carbohydrate') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Lipids (g)</label>
            <input type="number" name="lipids" step="0.01" class="w-full border rounded p-2" value="{{ old('lipids') }}">
            @error('lipids') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Save Meal
        </button>
    </form>
</div>
</x-app-layout>
