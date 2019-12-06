@extends('main')

@section('title')
    Product
@endsection


@section('content')
    @foreach($products as $product)
        @include('products.product')
    @endforeach
@endsection

@section('menu')
    @if(count(session()->get('products')) > 0)
        Вы заказали {{  count(session()->get('products')) }} позиций
        <br>
        <a href="">Оформить заказ</a>
    @endif
    <br/>
    @foreach($categories as $category)
        <a href="{{ \Illuminate\Support\Facades\URL::route('products_by_category', ['id' => $category->id]) }}"> {{ $category->name }}</a> <br>
    @endforeach
@endsection
