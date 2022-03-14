@extends('layouts/app')

@section('content')
    <h1 class="display-6 fw-bold text-center my-5">
        Our Products
    </h1>
    <div class="input-group mb-3">
        <input type="text" id="search" class="form-control" placeholder="Search by name, category or description..."
            aria-label="Search...">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
    </div>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-12 col-md-4 col-lg-3 p-2">
                <div class="card border-1 rounded-0 p-3 d-block" data-json="{{ json_encode($product) }}">
                    <a href="/product/{{ $product->id }}">
                        <img class=" card-img-top mx-auto p-1" src="{{ $product->image }}"
                            alt="{{ $product->title }}' s image">
                    </a>
                    <div class="card-body">
                        <a href="/product/{{ $product->id }}" class="text-decoration-none text-black">
                            <h6 class="card-title text-truncate">{{ $product->title }}</h6>
                        </a>
                        <div class="card-rating d-flex justify-content-between">
                            <div class="card-rating-start-wrapper position-relative">
                                <small>
                                    <p class="card-rating-stars overflow-hidden text-nowrap position-absolute top-0 start-0"
                                        style="width: calc({{ $product->rating_rate }} * 27.5px)">
                                        ⭐⭐⭐⭐⭐
                                    </p>
                                    <p class="card-rating-stars-grey position-absolute top-0 start-0">
                                        ⭐⭐⭐⭐⭐
                                    </p>
                                    <br>
                                    <p class="card-rating-count text-muted">
                                        ({{ $product->rating_count }}
                                        reviews)
                                    </p>
                                </small>
                            </div>
                            <h2 class="card-price">${{ $product->price }}</h2>
                        </div>

                        <div class="d-flex align-items-baseline justify-content-between">
                            <div>
                                <button data-id={{ $product->id }} class="quantity-dec btn btn-primary rounded-0"
                                    type="button">
                                    -
                                </button>
                                <div data-id={{ $product->id }} class="quantity d-inline mx-1">
                                    1
                                </div>
                                <button data-id={{ $product->id }} class="quantity-inc btn btn-primary rounded-0"
                                    type="button">
                                    +
                                </button>
                            </div>
                            <button type="button" class="btn btn-primary rounded-0">
                                <i class="bi bi-cart-plus"></i>
                                Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div id="fof" class="text-center mt-4 d-none">
            <p class="display-1">(^_^)b</p>
            <p class="display-6">Can't find any products.</p>
        </div>
    </div>
@endsection
