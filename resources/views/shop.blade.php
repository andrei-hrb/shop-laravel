@extends('layouts/app')

@section('content')
    <h1 class="title">
        Our Products
    </h1>
    <div class="products">
        @foreach ($products as $product)
            <div class="product-wrapper">
                <div class="product" data-json="{{ json_encode($product) }}">
                    <a class="product-link" href="/product/{{ $product->id }}">
                        <img class="product-image" src="{{ $product->image }}" alt="{{ $product->title }}' s image"
                            load="lazy">
                    </a>
                    <div class="product-body">
                        <a class="product-link" href="/product/{{ $product->id }}">
                            <h6 class="product-title">{{ $product->title }}</h6>
                        </a>
                        <div class="product-rating-wrapper">
                            <div class="product-rating">
                                <small>
                                    <p class="product-rating-stars" style="--rating: {{ $product->rating_rate }}">
                                        ⭐⭐⭐⭐⭐
                                    </p>
                                    <p class="product-rating-stars-grey">
                                        ⭐⭐⭐⭐⭐
                                    </p>
                                    <br>
                                    {{-- new space for the absolute positioned stars --}}
                                    <p class="product-rating-count">({{ $product->rating_count }} reviews)</p>
                                </small>
                            </div>
                            <h2 class="product-price">${{ $product->price }}</h2>
                        </div>

                        <div class="product-buy">
                            <div class="product-quantity">
                                <button data-id="{{ $product->id }}" class="product-quantity-decrease" type="button">
                                    -
                                </button>
                                <div data-id="{{ $product->id }}" class="product-quantity-number">
                                    1
                                </div>
                                <button data-id="{{ $product->id }}" class="product-quantity-increase" type="button">
                                    +
                                </button>
                            </div>
                            <button type="button" class="product-add-to-cart">
                                <i class="bi bi-cart-plus"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <ul class="pagination purge-css-keep-class">
        {{-- stop purgeCSS from removing this class --}}
        <li class="page-item active disabled"><a class="page-link"></a></li>
    </ul>
    {{ $products->links() }}
@endsection
