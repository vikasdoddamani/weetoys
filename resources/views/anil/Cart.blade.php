<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('css/anil/CartPage.css')}}">

    @include('home.css')


<style type="css/text">


    .collapse{
        background-color: black !important;
    }



    </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
 </div>

 {{-- start design from here --}}

<div class="Cart-Top-MainContainer">
    <div class="Cart-Top-left-container">
        <!-- <div> -->
            <img src="{{url('/images/Ace_Yellow.jpg')}}" alt="img">
            <p class='Cart-Qty'>Qty:<input type='number' placeholder=''></input></p>
        <!-- </div> -->
    </div>

    <div class="Cart-Top-Right-container">
        <h2>HOT 2 WHEELS Moto, for Kids (Multicolor)</h2>
        <p>Color : Black</p>
        <h3>70% <del>Rs.5999</del>Rs.2999</h3>
        <h4>2 offers applied</h4>
    </div>

</div>
<h3 class='Cart-bottom-Delvery'>Free Delivery by Oct 18, Monday.</h3>
<div class='Cart-RSBuy-Buttons'>
    <button>Remove</button>
    <button>Save for later</button>
    <button>Buy ths now</button>
</div>

<h2>Price Details </h2>
<div>
    <table>
        <tr>
            <th>Price(1 tem)</th>
            <th>Discount</th>
            <th>Platform Fee</th>
            <th>Delivery Charges</th>
            <th>Total Amount</th>
        </tr>
        <tr>
            <td>Rs.2555</td>
            <td>-Rs.4155</td>
            <td>Rs.60</td>
            <td>Free Delivery</td>
            <td>Rs.1200</td>
        </tr>
    </table>
</div>



 {{-- design end --}}



  <!-- info section -->
  @include('home.footer')
  <!-- end info section -->


  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>