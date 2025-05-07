<x-app-layout>
    <div class="max-w-3xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Edit Consumption</h1>

        <form method="POST" action="{{ route('consumptions.update', $consumption) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Meal -->
            <div>
                <label for="meal_id" class="block text-sm font-medium">Meal</label>
                <select name="meal_id" id="meal_id" class="w-full border rounded p-2">
                    @foreach($meals as $meal)
                        <option value="{{ $meal->id }}"
                            {{ $consumption->meal_id == $meal->id ? 'selected' : '' }}>
                            {{ $meal->name }}
                        </option>
                    @endforeach
                </select>
                @error('meal_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Quantity -->
            <div>
                <label for="quantity" class="block text-sm font-medium">Quantity</label>
                <input type="number" name="quantity" id="quantity" min="1"
                       value="{{ old('quantity', $consumption->quantity) }}"
                       class="w-full border rounded p-2">
                @error('quantity') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Date -->
            <div>
                <label for="consumed_at" class="block text-sm font-medium">Date & Time</label>
                <input type="datetime-local" name="consumed_at" id="consumed_at"
                       value="{{ old('consumed_at', $consumption->consumed_at->format('Y-m-d\TH:i')) }}"
                       class="w-full border rounded p-2">
                @error('consumed_at') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4">
                <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Update Consumption
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
