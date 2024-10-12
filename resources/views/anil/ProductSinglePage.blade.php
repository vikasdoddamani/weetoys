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

<div class="ProdctSingle-Photo">
  <div class="ProductSingle-Left-Container">
  <div class="ProductSingle-IMG">
    <img src="{{url('/images/Ace_Yellow.jpg')}}" alt="img">
  </div>
  <div class="ProductSingle-Buttons">
    <button>ADD TO CART</button>
    <button>BUY NOW</button>
  </div>
</div>
<div class="ProductSingle-Details">
    <h3>HOT 2 WHEELS Moto, for Kids (Multicolor)</h3>
    <h4>Special Price</h4>
    <div class="ProductSingle-Price-Details">
      <label>Rs.585</label>
      <del>Rs.999</del>
      <label>10% off</label>
    </div>
    <h4>Available offers</h4>
    <label class="Combo-Offer">Combo offer Buy 2 save 5% </label>
    <h4>Description</h4>
    <label>
      Rev up with a Hot 2 Wheels Moto! This collection of
      large-scale toy motorcycles is an awesome gift for
      the bike fan of all ages. Each 1:18 scale motorcycle
      pushes the boundaries with aggressive body styles and 
      graphics, ready to tackle any terrain and any adventure.
      Kids and collectors will love the awesome decos --
      they'll want to collect the entire set. Each sold
      separately, subject to availability. Colors and 
      decorations may vary</label>
    <h4>In the Box</h4>
    <label>Sales Packege   Include 1 Hot 2 Wheels Motorcycle.</label>
</div>

</div>
<div class="ProductSingle-SimilarProdct">
  <div>
    <div><img src="{{url('/images/Ace_Yellow.jpg')}}" alt="img"></div>
    <div class="ProductSingle-Desciption">
      <label>ZUNBELLA Land Rover Defender 1:36 Diecast Model With 
        Openable Doors and Bonnet For Kids  (Green, Pack of: 1)</label>
      <label>Rs.560 <del>Rs.899</del> 85% off</label>
    </div>
  </div>
  <div>
    <div><img src="{{url('/images/Ace_Yellow.jpg')}}" alt="img"></div>
    <div class="ProductSingle-Desciption">
      <label>ZUNBELLA Land Rover Defender 1:36 Diecast Model With 
        Openable Doors and Bonnet For Kids  (Green, Pack of: 1)</label>
      <label>Rs.560 <del>Rs.899</del> 85% off</label>
    </div>
  </div>
  <div>
    <div><img src="{{url('/images/Ace_Yellow.jpg')}}" alt="img"></div>
    <div class="ProductSingle-Desciption">
      <label>ZUNBELLA Land Rover Defender 1:36 Diecast Model With 
        Openable Doors and Bonnet For Kids  (Green, Pack of: 1)</label>
      <label>Rs.560 <del>Rs.899</del> 85% off</label>
    </div>
  </div>
  <div>
    <div><img src="{{url('/images/Ace_Yellow.jpg')}}" alt="img"></div>
    <div class="ProductSingle-Desciption">
      <label>ZUNBELLA Land Rover Defender 1:36 Diecast Model With 
        Openable Doors and Bonnet For Kids  (Green, Pack of: 1)</label>
      <label>Rs.560 <del>Rs.899</del> 85% off</label>
    </div>
  </div>

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
