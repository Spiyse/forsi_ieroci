<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $product->product_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- Product image --}}
                @if ($product->image)
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}" class="w-full max-w-md mb-6">
                @else
                    <div class="w-full max-w-md h-64 bg-gray-200 dark:bg-gray-700 flex items-center justify-center mb-6">
                        <span class="text-gray-500">No image</span>
                    </div>
                @endif

                {{-- Basic info --}}
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">{{ $product->product_name }}</h1>

                <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                    Category: {{ $product->category->category_name }}
                </p>

                <p class="text-3xl font-semibold text-gray-900 dark:text-white mb-4">
                    €{{ number_format($product->price, 2) }}
                </p>

                <p class="mb-6 text-gray-700 dark:text-gray-300">
                    {{ $product->product_details ?? 'No details available.' }}
                </p>

                {{-- Specs table --}}
                <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700 mb-6">
                    <tbody>
                        @if ($product->manufacturer)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="px-4 py-2 font-medium bg-gray-50 dark:bg-gray-700 w-1/3">Manufacturer</th>
                                <td class="px-4 py-2">{{ $product->manufacturer }}</td>
                            </tr>
                        @endif
                        @if ($product->caliber)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="px-4 py-2 font-medium bg-gray-50 dark:bg-gray-700">Caliber</th>
                                <td class="px-4 py-2">{{ $product->caliber }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th class="px-4 py-2 font-medium bg-gray-50 dark:bg-gray-700">Stock</th>
                            <td class="px-4 py-2">
                                @if ($product->quantity_in_stock > 0)
                                    {{ $product->quantity_in_stock }} in stock
                                @else
                                    <span class="text-red-500">Out of stock</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="px-4 py-2 font-medium bg-gray-50 dark:bg-gray-700">Licence</th>
                            <td class="px-4 py-2">
                                @if ($product->needs_licence)
                                    Required
                                @else
                                    Not required
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- {{-- Add to cart button placeholder --}}
                <form method="POST" action="#">
                    @csrf
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 disabled:opacity-50"
                        @disabled($product->quantity_in_stock === 0)>
                        Add to Cart
                    </button>
                </form> -->

            </div>
        </div>
    </div>
</x-app-layout>