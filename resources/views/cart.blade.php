@extends('layouts/app')

@section('content')
    <h1 class="title">
        Cart
    </h1>
    @if (\Cart::count() === 0)
        <h3>
            No products in cart.
        </h3>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\Cart::content() as $product)
                    <tr id="{{ $product->rowId }}">
                        <td>
                            <img class="cart-image" src="{{ $product->options->image }}">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>
                            {{ $product->qty }}
                        </td>
                        <td>${{ $product->price * $product->qty }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>${{ \Cart::total() }}</strong></td>
                </tr>
            </tfoot>
        </table>
        <div>
            <form action="/cart/order" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1"
                        name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Phone</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1"
                        name="phone">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Adress</span>
                    <textarea class="form-control" aria-label="With textarea" name="adress"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    Order
                </button>
            </form>
        </div>
    @endif
@endsection
