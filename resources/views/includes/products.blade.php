@foreach($products->chunk(3) as $row)
    <div class="flex flex-col md:flex-row">
        @foreach($row as $product)
            <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                <div class="md:max-w-sm max-w rounded overflow-hidden shadow-lg m-2">
                    <img class="w-full" src="{{ $product->asset->location }}"
                         alt="{{ $product->asset->name }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-3xl mb-2">
                            @if($product->status === 1)
                                <i class="text-green-500 fas fa-check"></i>
                            @elseif($product->status === 0)
                                <i class="text-red-500 fas fa-times"></i>
                            @endif
                            {{ $product->name }}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endforeach
