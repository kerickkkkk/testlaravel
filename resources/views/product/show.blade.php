@extends('layout.app')

@section('content')
    <h2>Products
        {{$productList[$index]['title']}}
    </h2>
    <img src="{{$productList[$index]['imgUrl']}}" width="150" alt="">
    <div class="p-5">
        <input type="text" class="form-control">[type=number][min=1][value=1]
        <button type="button">加入購物車</button>
    </div>
    <hr>
    input
    <!-- asset 以 public 當作基準 -->
    <img src="{{asset('images/product01.jpeg')}}" alt="">
@endsection

@section('inline_js')
    @parent
    
@endsection
