<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hello!") }}
                </div>
                <div class="container mx-auto px-4">
                    
                    <!-- Product Grid: 1 col mobile, 2 tablet, 4 desktop -->
                    <div class="product-grid">
                        @forelse($products as $product)
                            <div class="product-card bg-white rounded-lg shadow-md overflow-hidden p-4">
                                <a href="{{'products/'.$product->identifier}}">
                                @if ($product->image)
                                    <img src="{{ asset('images/' . $product->image . '.png') }}" alt="{{ $product->product_name }}" class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-500">No image</div>
                                @endif
                                </a>
                                <div class="product-card-content p-2">
                                    <h2 class="product-title text-lg font-semibold">{{ $product->product_name }}</h2>
                                    <div class="product-card-footer">
                                        <p class="text-gray-600">{{ number_format($product->quantity_in_stock) }} left</p>
                                        <p class="text-gray-600">€{{ number_format($product->price, 2) }}</p> 
                                        <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-600 dark:text-gray-300">No products found.</p>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $products->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .product-grid {
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        gap: 1.5rem;
        align-items: stretch;
    }

    .product-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .product-card-content {
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .product-title {
        min-height: 3.75rem;
        line-height: 1.25;
        line-clamp: 2;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-card-footer {
        margin-top: auto;
    }

    @media (min-width: 640px) {
        .product-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (min-width: 1024px) {
        .product-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    }
</style>
