@extends('layouts.app')

@section('content')
    <div class="flex flex-col mx-2">
        <div class="flex">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
                        Search results for "{{ $input }}"
                    </h1>
                </div>
            </div>
        </div>
    </div>
    @include('includes.products', ['products' => $result])

    <br class="m-6">

    {{ $result->links() }}
@endsection
