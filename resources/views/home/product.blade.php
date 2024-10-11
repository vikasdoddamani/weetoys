<style type="text/css">

@media (max-width: 600px) {
.flex_index_index_card
{
    flex-direction: column;
}
}
</style>


<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Latest Products</h2>
        </div>
        <div class="row">
            @foreach($product as $product) <!-- Renamed for clarity -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="{{ url('product_details', $product->id) }}">
                            <div class="img-box">
                                <img src="product/{{$product->images}}" alt="{{ $product->title }}">
                            </div>
                            <div class="detail-box">
                                <h6>{{$product->title}}</h6>
                                <h6><span>&#8377; {{$product->price}}</span></h6>
                            </div>
                        </a>
                        <div style="padding:15px;">
                            <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}">Details</a>
                            <a class="btn btn-primary" href="{{ url('add_cart', $product->id) }}">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Session 2 --}}
<div class="flex_index_index_card">
    @foreach(['vehicle' => 'Ace_Yellow.jpg', 'kitchen appliances' => 'Gas_SET.png', 'Home appliances' => 'Group_Mixer.png', 'accessories' => '4in tyer.png'] as $category => $image)
    <div class="card-container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $category }}</h2>
            </div>
            <div class="card-body">
                <p class="card-message">
                    <a href="{{ route('category.products', ['category' => $category]) }}">
                        <img width="200" height="200" src="/images/{{ $image }}" alt="{{ $category }}">
                    </a>
                </p>
            </div>
        </div>
    </div>
@endforeach

</div>
{{-- End of Session 2 --}}

{{-- Session 3 --}}
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>vehicle accessories</h2> <!-- Added a heading -->
        </div>
        <div class="row">
            @foreach($vehicleAccessories as $product) <!-- Renamed for clarity -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="{{ url('product_details', $product->id) }}">
                            <div class="img-box">
                                <img src="product/{{$product->images}}" alt="{{ $product->title }}">
                            </div>
                            <div class="detail-box">
                                <h6>{{$product->title}}</h6>
                                <h6><span>&#8377; {{$product->price}}</span></h6>
                            </div>
                        </a>
                        <div style="padding:15px;">
                            <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}">Details</a>
                            <a class="btn btn-primary" href="{{ url('add_cart', $product->id) }}">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- End of Session 3 --}}


{{-- Session 4 --}}
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Outdoor and Indoor Toy</h2> <!-- Added a heading -->
        </div>
        <div class="row">
            @foreach($vehicle as $product) <!-- Renamed for clarity -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="{{ url('product_details', $product->id) }}">
                            <div class="img-box">
                                <img src="product/{{$product->images}}" alt="{{ $product->title }}">
                            </div>
                            <div class="detail-box">
                                <h6>{{$product->title}}</h6>
                                <h6><span>&#8377; {{$product->price}}</span></h6>
                            </div>
                        </a>
                        <div style="padding:15px;">
                            <a class="btn btn-danger" href="{{ url('product_details', $product->id) }}">Details</a>
                            <a class="btn btn-primary" href="{{ url('add_cart', $product->id) }}">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- End of Session 4 --}}



