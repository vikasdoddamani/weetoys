<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <title>Checkout Page</title>
    <style>
        .checkout-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f8f8;
        }
        .checkout-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>

    <div class="checkout-container">
        <div class="checkout-header">Checkout</div>

        <form action="{{asset('process_order')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Shipping Address</label>
                <textarea id="address" name="address" class="form-control" required></textarea>
            </div>

            <div style="font-size: 26px;" class="form-group">
                <label for="amount">Total Amount: ₹ {{ number_format($totalAmount, 2) }}</label>
                <input type="hidden" name="amount" value="{{ $totalAmount }}">
            </div>

            <input type="radio" name="payment" value="cod" > Cash on delivery </input> <br/>
            {{-- <input type="radio" name="payment" value="cod" > UPID payment </input> --}}
            <br/>  <br/>
            <button type="submit" class="btn">Place Order</button>
        </form>
    </div>

    @include('home.footer')

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>
