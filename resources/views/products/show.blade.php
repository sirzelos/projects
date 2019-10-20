@extends('layouts.login')

@section('content')
    <div class="products-container">
        <div>
            <a href="#">
                <img class="img" src='../img/{{$product->picture}}'>
            </a>
        </div>
        <div class = "detail-container">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->detail }}</p>
            <p class = "p-detail">฿{{ $product->unit_price }}</p>
            <form action="{{ route('cart.store') }}" method = 'post'>
                @csrf
                จำนวน : <input type="number" name="count">
                <input type="hidden" value="{{$product->id}}" name="pid">
                <button class="btn btn-primary" type="submit" style="float: right">Add to Cart</button>
            </form>
        </div>
        @can('delete',$product)
        <form action="{{ route('products.destroy',['product'=>$product->id]) }}" method = 'post'>
            @csrf
            @method('DELETE')
            <input type="hidden" value="{{$product->id}}" name="pid">
            <button class="btn btn-outline-danger" type="submit" style="float: right;margin: 15px;">DELETE</button>
        </form>
            @endcan
    </div>
@endsection
