@extends('layout.app')

@section('content')
    <h2>Products
        {{$productList[$index]['title']}}
    </h2>
    <img src="{{ $productList[$index]['imgUrl'] }}" width="150" alt="">
    <div class="p-5">
        <p>價格：{{ $productList[$index]['price']  }}</p>
        <input id="cartNumber" type="number" class="form-control" min="1" value="1">
        <button id="cartBtn" class="btn btn-primary">送出</button>
    </div>

    <hr>

    <!-- asset 以 public 當作基準 -->
    <img src="{{asset('images/product01.jpeg')}}" alt="">
@endsection

@section('inline_js')
    @parent
    <script>
        const productId = {{ $productList[$index]['id']  }};
        initAddCart(productId);

        
    </script>
@endsection
