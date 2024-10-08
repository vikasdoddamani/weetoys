<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('css/anil/ProductSinglePage.css')}}">

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

<!-- <div class="con">
<img src="{{url('/images/Ace_Yellow.jpg')}}" alt="img">
</div> -->



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
