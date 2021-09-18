@extends('layout.app')

@section('content')
    <p>
        <h1>create</h1>
    </p>
    <!-- 有問題 加入 csrf 還是有 419 -->
    <form enctype="multipart/form-data" method="post" action="{{ route('products.store') }}">
        <!-- @csrf -->
        @csrf
        <input type="text">
        <input type="submit" value="送出a">
    </form>

@endsection

