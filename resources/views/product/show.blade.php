@extends('layout.app')

@section('content')
    <h2>Products</h2>
    <!-- asset 以 public 當作基準 -->
    <img src="{{$productList[$index]['imgUrl']}}" alt="">
    <hr>
    <img src="{{asset('images/product01.jpeg')}}" alt="">
@endsection

@section('inline_js')
    @parent
    
@endsection
