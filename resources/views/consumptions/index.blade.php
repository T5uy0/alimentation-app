<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Consumptions</h1>
            <a href="{{ route('consumptions.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Add Consumption
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
                    <th class="px-4 py-2">Meal</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Calories</th>
                    <th class="px-4 py-2">Consumed At</th>
                    <th class="px-4 py-2 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($consumptions as $consumption)
                    <tr class="border-b">
                        <td class="px-4 py-2">
                            <a href="{{ route('meals.show', $consumption->meal) }}" class="text-blue-600 hover:underline">
                                {{ $consumption->meal->name ?? '—' }}
                            </a>
                        </td>
                        <td class="px-4 py-2">{{ $consumption->quantity }}</td>
                        <td class="px-4 py-2">{{ $consumption->meal->calories * $consumption->quantity}}</td>
                        <td class="px-4 py-2">
                            {{ $consumption->consumed_at->format('Y-m-d H:i') }}
                        </td>
                        <td class="px-4 py-2 text-right space-x-2">
                            {{-- Bouton Edit (à créer plus tard si besoin) --}}
                            <a href="{{ route('consumptions.edit', $consumption) }}"
                               class="inline-block bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                Edit
                            </a>

                            {{-- Bouton Delete (à activer plus tard si besoin) --}}
                            <form action="{{ route('consumptions.destroy', $consumption) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this consumption?');">
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
                        <td colspan="4" class="px-4 py-4 text-center text-gray-500">No consumptions found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
