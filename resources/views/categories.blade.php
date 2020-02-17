@extends('layouts.app')

@section('content')
    @foreach($categories as $category)
        <h1 class="text-6xl">{{ $category->name }}</h1>
        @foreach($category->childrenCategories as $childCategory)
            @include('includes.child_category', ['child_category' => $childCategory])
        @endforeach

        @include('includes.products', ['products' => $category->products])
    @endforeach
@endsection
