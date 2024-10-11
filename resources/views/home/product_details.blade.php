<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .hero_area {
            margin-bottom: 20px;
        }

        .shop_section {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            margin: 0 -15px;
        }

        .product-image {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            padding: 15px;
        }

        .product-details {
            flex: 2;
            padding: 15px;
        }

        .product-title {
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin: 0 0 10px;
        }

        .product-price {
            font-size: 28px;
            color: green;
            margin: 5px 0;
        }

        .mrpprice {
            font-size: 18px;
            color: #999;
            text-decoration: line-through;
        }

        .product-category,
        .product-description {
            font-size: 16px;
            margin: 10px 0;
            color: #555;
        }

        .add-to-cart-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .add-to-cart-btn:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                align-items: center;
            }

            .product-image,
            .product-details {
                flex: none;
                width: 100%;
                max-width: none;
                padding: 10px 0;
            }

            .product-title {
                font-size: 28px;
            }

            .product-price {
                font-size: 24px;
            }

            .mrpprice {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->
    </div>
    <!-- end hero area -->

    <!-- Product Detail -->
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="product-container">
                <div class="product-image">
                    <img width="100%" src="/product/{{$data->images}}" alt="{{$data->title}}" style="border-radius: 8px;">
                </div>
                <div class="product-details">
                    <div class="product-title">{{$data->title}}</div>
                    <div class="product-price">&#8377; {{$data->price}}</div>
                    <div class="mrpprice">MRP: &#8377; {{$data->mrp}}</div>
                    <div class="product-category">Category: {{$data->category}}</div>
                    <div class="product-description">Description: {{$data->description}}</div>
                    <button class="add-to-cart-btn" onclick="window.location='{{ url('add_cart', $data->id) }}'">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Detail -->

    <!-- info section -->
    @include('home.footer')
    <!-- end info section -->

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
