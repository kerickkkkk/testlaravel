@extends('layout.app')

@section('content')
    <h2>Products Index</h2>11515151515
    <a href="{{ route('products.create') }}"> 新增 </a>
    <!-- asset 以 public 當作基準 -->
    @foreach ($productList as $product)
    <a href="{{ route('products.show', ['product' => $product['id']]) }}">
        <img src="{{$product['imgUrl']}}" alt="">
    </a>
    <div>
        <a href="{{ route('products.edit', ['product' => $product['id']]) }}">修改</a>
    </div>
    @endforeach

@endsection

@section('inline_js')
    @parent
    console.log('要有 layout 和 page');
@endsection