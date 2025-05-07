<x-app-layout>


    <div class="py-6">

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-4">Add a Consumption</h1>
            <div class="bg-white shadow-sm rounded p-6">

                @if (session('success'))
                    <div class="mb-4 text-green-600 font-medium">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('consumptions.store') }}" class="space-y-4">
                    @csrf

                    <!-- Meal -->
                    <div>
                        <label for="meal_id" class="block text-sm font-medium text-gray-700">
                            Meal
                        </label>
                        <select name="meal_id" id="meal_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option value="">-- Select a meal --</option>
                            @foreach($meals as $meal)
                                <option value="{{ $meal->id }}" {{ old('meal_id') == $meal->id ? 'selected' : '' }}>
                                    {{ $meal->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('meal_id')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Quantity -->
                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-700">
                            Quantity
                        </label>
                        <input type="number" name="quantity" id="quantity" min="1"
                            value="{{ old('quantity', 1) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                        @error('quantity')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Consumed At -->
                    <div>
                        <label for="consumed_at" class="block text-sm font-medium text-gray-700">
                            Date & Time
                        </label>
                        <input type="datetime-local" name="consumed_at" id="consumed_at"
                            value="{{ old('consumed_at', now()->format('Y-m-d\TH:i')) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                        @error('consumed_at')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 shadow-sm">
                            Save Consumption
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
