@extends('layouts.app')

@section('content')
    <div class="flex flex-col mx-2">
        <div class="flex">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
                        Latest additions
                    </h1>
                </div>
            </div>
        </div>
    </div>
    @include('includes.products', ['products' => $products])

    <br class="m-6">
    {{ $products->links() }}
@endsection
