<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style>

.product-image {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 10px 0;
}

.image-wrapper {
    flex: 1 1 calc(25% - 20px); /* 4 images in a row */
    margin: 10px;
    max-width: calc(25% - 20px); /* Ensures a max width for each image */
}

.product-img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover; /* Ensures the image covers the space nicely */
}

@media (max-width: 768px) {
    .image-wrapper {
        flex: 1 1 calc(50% - 20px); /* 2 images in a row on medium screens */
        max-width: calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .image-wrapper {
        flex: 1 1 100%; /* 1 image per row on small screens */
        max-width: 100%;
    }
}

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
            padding: 30px;
            max-width: 1200px;
            margin: auto;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
        }

        .product-image {
            flex: 1;
            min-width: 300px;
            max-width: 450px;
            padding: 20px;
        }

        .product-details {
            flex: 2;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-title {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin: 0 0 15px;
        }

        .product-price {
            font-size: 32px;
            color: green;
            margin: 5px 0;
        }

        .mrpprice {
            font-size: 20px;
            color: #999;
            text-decoration: line-through;
            margin: 5px 0;
        }

        .discount {
            font-size: 20px;
            color: red;
            margin: 10px 0;
        }

        .product-category,
        .product-description {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }

        .add-to-cart-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s;
            align-self: flex-start;
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
                width: 100%;
                padding: 10px 0;
            }

            .product-title {
                font-size: 28px;
            }

            .product-price {
                font-size: 24px;
            }

            .mrpprice,
            .discount {
                font-size: 18px;
            }

            .product-category,
            .product-description {
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
                    <div class="product-price" id="price"></div>
                    <div class="mrpprice" id="mrp"></div>
                    <div class="discount" id="discount"></div>
                    <div class="product-category">Category: {{$data->category}}</div>
                    <div class="product-description">Description: {{$data->description}}</div>
                    <button class="add-to-cart-btn" onclick="window.location='{{ url('add_cart', $data->id) }}'">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="product-image">
            <div class="image-wrapper">
                <img src="/product/{{$data->images2}}" alt="{{$data->title}}" class="product-img">
            </div>
            <div class="image-wrapper">
                <img src="/product/{{$data->images3}}" alt="{{$data->title}}" class="product-img">
            </div>
            <div class="image-wrapper">
                <img src="/product/{{$data->images4}}" alt="{{$data->title}}" class="product-img">
            </div>
            <div class="image-wrapper">
                <img src="/product/{{$data->images5}}" alt="{{$data->title}}" class="product-img">
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

    <script>
        // Format price in Indian currency format
        function formatPrice(price) {
            return '₹ ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // Calculate and format prices and discount
        const price = {{ $data->price }};
        const mrp = {{ $data->mrp }};
        const discount = Math.round(((mrp - price) / mrp) * 100); // Calculate discount percentage

        document.getElementById('price').innerHTML = formatPrice(price);
        document.getElementById('mrp').innerHTML = 'MRP: ' + formatPrice(mrp);
        document.getElementById('discount').innerHTML = discount > 0 ? 'Discount: ' + discount + '%' : '';
    </script>
</body>

</html>
