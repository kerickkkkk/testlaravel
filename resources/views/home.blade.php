@extends('layout.app')

@section('content')
    <a href="{{ route('products.index') }}">產品頁</a>
    <h2>這是內容 {{$viewValue}}</h2>
@endsection