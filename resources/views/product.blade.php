@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="w-full">
            <a class="text-blue-600"
               href="{{ route('category.show', ['slug' => $product->category->category->slug]) }}">
                {{ $product->category->category->name }}
            </a>
            >
            <a class="text-blue-600" href="{{ route('category.show', ['slug' => $product->category->slug]) }}">
                {{ $product->category->name }}
            </a>
            >
            <span class="text-gray-600">{{ $product->name }}</span>

            <img class="lg:float-right lg:w-1/2 lg:ml-12 pb-12 mt-6" src="{{ $product->asset->location }}"
                 alt="{{ $product->asset->name }}">
            <h1 class="text-6xl my-8">Is {{ $product->name }} vegan</h1>
            {!! $product->description !!}
        </div>
    </div>
@endsection
