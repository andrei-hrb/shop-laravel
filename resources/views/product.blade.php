@extends('layouts/app')

@section('content')
    <h1 class="single-product-title">
        <a class="go-back" href="{{ url()->previous() === Request::url() ? '/shop' : url()->previous() }}"><i
                class="bi bi-arrow-left"></i></a>
        <span>{{ $product->title }}</span>
    </h1>
    <div class="single-product-body">
        <div class="single-product-first" style="background-image: url({{ $product->image }})"></div>
        <div class="single-product-second">
            <div class="single-product-buy">
                <div class="single-product-quantity">
                    <button data-id="{{ $product->id }}" class="single-product-quantity-decrease" type="button">
                        -
                    </button>
                    <div data-id="{{ $product->id }}" class="single-product-quantity-number">
                        1
                    </div>
                    <button data-id="{{ $product->id }}" class="single-product-quantity-increase" type="button">
                        +
                    </button>
                </div>
                <h3 class="single-product-price" data-original-price="{{ $product->price }}">${{ $product->price }}</h3>
                <button type="button" class="single-product-add-to-cart">
                    <i class="bi bi-cart-plus"></i>Add to cart</button>
            </div>
            <div class="single-product-accordion" id="single-product-accordion">
                <div class="single-product-accordion-item">
                    <h2 class="single-product-accordion-header" id="single-product-accordion-heading-description">
                        <button class="single-product-accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#single-product-accordion-collapse-description" aria-expanded="true"
                            aria-controls="single-product-accordion-collapse-description">
                            Description
                        </button>
                    </h2>
                    <div id="single-product-accordion-collapse-description" class="single-product-accordion-collapse show"
                        aria-labelledby="single-product-accordion-heading-description"
                        data-bs-parent="#single-product-accordion">
                        <div class="single-product-accordion-body">
                            {{ $product->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
