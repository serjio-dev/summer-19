@extends('main')

@section('title')
    Product
@endsection


@section('content')
    @foreach($products as $product)
        <div class="title">
            {{ $product->name }}
        </div>
        <div class="flex-center">
            {{ $product->desc }}
        </div>
        <div>
            <a href="{{ \Illuminate\Support\Facades\URL::route('product_buy', ['id' => $product->id]) }}">Купить: {{ $product->price }} </a>
        </div>
    @endforeach
@endsection

@section('menu')
    @foreach($categories as $category)
        <a href="{{ \Illuminate\Support\Facades\URL::route('products_by_category', ['id' => $category->id]) }}"> {{ $category->name }}</a> <br>
    @endforeach
@endsection
