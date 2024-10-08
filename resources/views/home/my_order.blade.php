<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <title>Cart Page</title>
    <style>
        .cart-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }
        .cart-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s;
        }
        .cart-item:hover {
            background-color: #f8f8f8;
        }
        .cart-item img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            margin-right: 15px;
        }
        .item-details {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .item-title {
            font-size: 18px;
            font-weight: 600;
        }
        .item-price {
            font-size: 16px;
            color: #28a745;
        }
        .total {
            font-weight: bold;
            font-size: 1.5em;
            margin-top: 20px;
            text-align: right;
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
        }
        .checkout-btn:hover {
            background-color: #218838;
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
        @media (max-width: 600px) {
            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }
            .item-details {
                justify-content: flex-start;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>

    <div class="cart-container">
        <div class="cart-header">My Orders</div>

        @if($cart->isEmpty())
            <p>Your Order is empty.</p>
        @else
            @php $totalPrice = 0; @endphp
            @foreach($cart as $item)
                <div class="cart-item">
                    <img src="/product/{{ $item->product->images }}" alt="{{ $item->product->title }}">
                    <div  class="item-details">
                        <span class="item-title">{{ $item->product->title }}</span>
                        <span class="item-title">{{ $item->status }}</span>
                        <span class="item-price">&#x20B9;: {{ number_format($item->product->price, 2) }}</span>
                    </div>
                    {{-- <form  style="margin-left: 20px;" action="{{ url('cancel_my_order', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('GET')
                        <button type="submit" class="remove-btn">contact us</button>
                    </form> --}}
                </div>
                @php $totalPrice += $item->product->price; @endphp
            @endforeach

            <div class="total">Total: &#x20B9;: {{ number_format($totalPrice, 2) }}</div>


        @endif
    </div>

    @include('home.footer')

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
