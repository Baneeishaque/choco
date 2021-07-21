@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Grid Shop</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-shop.html">Shop</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</section>
<!-- Section Shop-->
<br>
<section>
    <div class="container">
        <h3>Exclusives</h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-style-10" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-dots="true" data-mouse-drag="false">
            <!-- Product-->
            @foreach ($products as $key=>$value)
                    <article class="product">
                        <div class="product-body">
                            @foreach ($images as $image)
                                @if($image->product_id == $value->id) 
                                    <div class="product-figure">
                                        <img src="{{url('product_images/'.$image->images) }}" alt="{{$image->images}}" width="179" height="114"  />
                                    </div>
                                @break
                                @endif
                            @endforeach
                            <h5 class="product-title"><a>{{$value->name}}</a></h5>
                            <div class="product-price-wrap">
                            </div>
                        </div><span class="product-badge product-badge-new">New</span>
                        <div class="product-button-wrap">
                        </div>
                        <div class="product-button-wrap">
                            <div class="product-button">
                                <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="grid-shop.html"></a>
                            </div>
                            <!-- <div class="product-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div> -->
                        </div>
                    </article>
                
            @endforeach  
        </div>
    </div>
</section>
@endsection