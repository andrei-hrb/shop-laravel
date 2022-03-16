@extends('layouts/app')

@section('content')
    <div class="single-product-body">
        <div class="single-product-first" style="background-image: url({{ $product->image }})"></div>
        <div class="single-product-second">
            <h1 class="single-product-title">
                <a class="go-back"
                    href="{{ url()->previous() === Request::url() ? '/shop' : url()->previous() }}"><i
                        class="bi bi-arrow-left"></i>
                </a>
                {{ $product->title }}
            </h1>
            <h4 class="single-product-category"><a
                    href="/category/{{ $product->category }}">{{ ucfirst(trans($product->category)) }}</a>
            </h4>
            <div class="product-rating">
                <p class="product-rating-stars" style="--rating: {{ $product->reviews->avg('stars') }}">
                    ⭐⭐⭐⭐⭐
                </p>
                <p class="product-rating-stars-grey">
                    ⭐⭐⭐⭐⭐
                </p>
                <br>
                {{-- new space for the absolute positioned stars --}}
                <a href="#reviews">
                    <p class="product-rating-count">({{ $product->reviews->count() }} reviews)</p>
                </a>
            </div>
            <p ckass="single-product-description">{{ $product->description }} </p>
            <div class="single-product-buy">
                <h3 class="single-product-price" data-original-price="{{ $product->price }}">${{ $product->price }}
                </h3>
                <button type="button" data-id="{{ $product->id }}" class="single-product-add-to-cart">
                    <i class="bi bi-cart-plus"></i>Add to cart</button>
            </div>
        </div>
    </div>
    <div class="single-product-reviews" id="reviews">
        <h3 class="single-product-reviews-title">Reviews</h3>
        <div class="single-product-reviews-add">
            <form action="/review/add" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="justify-content-evenly">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="stars-{{ $i }}"
                                id="stars-{{ $i }}" @if ($i === 5) checked @endif>
                            <label class="form-check-label" for="stars-{{ $i }}">
                                @for ($j = 1; $j <= $i; $j++)
                                    ⭐
                                @endfor
                            </label>
                        </div>
                    @endfor
                </div>
                <div>
                    <span>Name</span>
                    <input type="text" aria-label="Name" name="name" aria-describedby="name" placeholder="John Doe">
                </div>
                <div>
                    <span>Content</span>
                    <textarea aria-label="Content" name="content" placeholder="I liked this product..."></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        @foreach ($product->reviews->sortByDesc('created_at') as $review)
            <article class="single-product-review">
                <h5 class="single-product-review-name">{{ $review->name }}</h5>
                <p class="single-product-review-date">
                    {{ Carbon\Carbon::createFromDate($review->created_at)->diffForHumans() }}
                </p>
                <div class="product-rating">
                    <p class="product-rating-stars" style="--rating: {{ $review->stars }}">
                        ⭐⭐⭐⭐⭐
                    </p>
                    <p class="product-rating-stars-grey">
                        ⭐⭐⭐⭐⭐
                    </p>
                    <br>
                    {{-- new space for the absolute positioned stars --}}
                </div>
                <p class="single-product-review-content">
                    {{ $review->content }}
                </p>
            </article>
        @endforeach
    </div>
@endsection
