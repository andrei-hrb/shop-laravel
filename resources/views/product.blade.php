@extends('layouts/app')

@section('content')
    <h1 class="display-6 fw-bold text-center my-5">
        <a class="goback d-inline-block text-black" href="/shop"><i class="bi bi-arrow-left"></i></a>
        <span>{{ $product->title }}</span>
    </h1>
@endsection
