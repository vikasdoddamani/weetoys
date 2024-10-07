<!DOCTYPE html>
<html>

<head>
@include('home.css')
<style type="text/css">
.div_center
{
display: flex;
justify-content: center;
align-content: center;
padding: 30px;
}
.detail-box
{
    padding: 15px;
}

.title
{
    font-size: 32px;
    font-weight: bold
}
.price
{
    color: green;
    font-size: 28px;
}
</style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->





  </div>
  <!-- end hero area -->

  <!-- Product Detail -->






  <section class="shop_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box">


            <div class="d-flex flex-row mb-3">
                <div class="p-2"><img width="400" src="/product/{{$data->images}}" alt=""></div>
                <div class="p-2"> <div class="d-flex flex-column mb-3">
                    <div class="p-2 title">{{$data->title}}</div>
                    <div class="p-2 price">  &#8377; {{$data->price}}</div>
                    <div class="p-2">  Category:  {{$data->category}}</div>
                    <div class="p-2">  Category: {{$data->description}}</div>
                    <div class="p-2">  <input type="submit" class="btn btn-success" value="Add to cart"> </div>
                    </div>
                </div>
              </div>


          </div>
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
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>
