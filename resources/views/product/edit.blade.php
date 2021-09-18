@extends('layout.app')

@section('content')
    <p>
        <h1>edit</h1>
    </p>
    <!-- 有問題 加入 csrf 還是有 419 -->
    <form method="post" action="{{ route('products.update',  ['product' => $product['id']] )  }}">
        @csrf
        @method('PATCH')
        <input type="text" value="1111">
        <input type="submit" value="送出">
    </form>
@endsection

