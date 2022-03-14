@extends('layouts/app')

@section('content')
    <h1 class="single-product-title">
        <a class="go-back" href="{{ url()->previous() }}"><i class="bi bi-arrow-left"></i></a>
        <span>{{ $product->title }}</span>
    </h1>
    <div class="single-product-body">
        <div class="single-product-first" style="background-image: url({{ $product->image }})"></div>
        <div class="single-product-second">
            <p><strong>Description</strong> {{ $product->description }}</p>
        </div>
    </div>
@endsection
