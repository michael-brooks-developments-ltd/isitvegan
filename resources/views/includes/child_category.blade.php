<h1 class="text-5xl mt-8 text-blue-600">
    <a href="/category/{{ $childCategory->slug }}">{{ $childCategory->name }}</a>
</h1>
@include('includes.products', ['products' => $childCategory->products])
@if ($child_category->categories)
    @foreach($child_category->categories as $childCategory)
        @include('includes.child_category', ['child_category' => $childCategory])
    @endforeach
@endif
