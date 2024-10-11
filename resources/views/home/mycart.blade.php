<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <title>Cart Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .cart-container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .cart-header {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s;
        }

        .cart-item:hover {
            background-color: #f9f9f9;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            border-radius: 5px;
            object-fit: cover;
            margin-right: 15px;
        }

        .item-details {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .item-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }

        .item-price {
            font-size: 16px;
            color: #28a745;
            margin-top: 5px;
        }

        .remove-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .remove-btn:hover {
            background-color: #c82333;
        }

        .total {
            font-weight: bold;
            font-size: 1.5em;
            margin-top: 20px;
            text-align: right;
            color: #333;
        }

        .checkout-btn {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
            border: none;
            width: 100%;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }

        @media (max-width: 600px) {
            .cart-header {
                font-size: 24px;
            }

            .item-title {
                font-size: 16px;
            }

            .item-price {
                font-size: 14px;
            }

            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .remove-btn {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>

    <div class="cart-container">
        <div class="cart-header">Your Cart</div>

        @if($cart->isEmpty())
            <p>Your cart is empty.</p>
        @else
            @php $totalPrice = 0; @endphp
            @foreach($cart as $item)
                <div class="cart-item">
                    <img src="/product/{{ $item->product->images }}" alt="{{ $item->product->title }}">
                    <div class="item-details">
                        <span class="item-title">{{ $item->product->title }}</span>
                        <span class="item-price">&#x20B9;: {{ number_format($item->product->price, 2) }}</span>
                    </div>
                    <form action="{{ url('remove_cart', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="remove-btn">Remove</button>
                    </form>
                </div>
                @php $totalPrice += $item->product->price; @endphp
            @endforeach

            <div class="total">Total: &#x20B9;: {{ number_format($totalPrice, 2) }}</div>

            <form action="{{ asset('user_checkout') }}" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="submit" class="checkout-btn" value="Process to Checkout">
            </form>
        @endif
    </div>

    @include('home.footer')

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
