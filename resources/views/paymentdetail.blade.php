@extends('layout')

@section('title', 'Payment')

@section('content')


    <div class="container my-4">

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Total Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img class="picture" src="https://via.placeholder.com/150" alt="Product Image"></td>
                    <td>Book Title</td>
                    <td>50,000vnd</td>
                    <td>
                        <button class="btn btn-sm btn-secondary decrease">-</button>
                        <input type="text" value="3" class="quantity">
                        <button class="btn btn-sm btn-secondary increase">+</button>
                    </td>
                    <td class="subtotal">150,000vnd</td>
                    <td>
                        <button class="btn-del">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512">
                                <path
                                    d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.4l-34-56.7A48 48 0 0 0 274.4 0H173.6a48 48 0 0 0-41.2 23.3L98.4 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.8 50.9A6 6 0 0 1 177 48h94a6 6 0 0 1 5.2 2.9L293.6 80H154.4zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z">
                                </path>
                            </svg>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="total">
            <p><strong>Total Price:</strong> <span class="total-price">150,000vnd</span></p>
            <button class="btn btn-primary" onclick="window.location.href='{{ url('/customer') }}'">Checkout</button>
        </div>
    </div>

@endsection
