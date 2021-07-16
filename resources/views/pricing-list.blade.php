@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Pricing List</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="pricing-list.html#">Pages</a></li>
                <li class="active">Pricing List</li>
            </ul>
        </div>
    </div>
</section>
<!-- Pricing List-->
<section class="section section-xxl bg-default text-center">
    <div class="container">
        <div class="title-group">
            <h3 class="font-weight-regular">our Pricing Plans</h3>
            <p class="text-width-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do. semantic;users, seamless beta-test</p>
        </div>
        <div class="row row-xl row-30 justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <article class="pricing-classic">
                    <div class="pricing-classic-header"><img class="pricing-classic-figure" src="images/pricing-1-346x229.jpg" alt="" width="346" height="229" />
                        <div class="pricing-classic-caption">
                            <div>
                                <h3 class="pricing-classic-title">Cupcakes</h3>
                                <div class="pricing-classic-price-wrap">
                                    <div class="pricing-classic-price heading-4">$90.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-classic-body">
                        <ul class="pricing-classic-list">
                            <li>Classic</li>
                            <li>Gourmet</li>
                            <li>Fondant</li>
                            <li>Gourmet w/ Fondant</li>
                        </ul><a class="button button-lg button-default-outline-2 button-zakaria" href="cart-page.html">Add to cart</a>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="pricing-classic pricing-classic-sale">
                    <div class="pricing-classic-header"><img class="pricing-classic-figure" src="images/pricing-2-346x229.jpg" alt="" width="346" height="229" />
                        <div class="pricing-classic-caption">
                            <div><span class="product-badge product-badge-sale">Sale</span>
                                <h3 class="pricing-classic-title">Wedding Cakes</h3>
                                <div class="pricing-classic-price-wrap">
                                    <div class="pricing-classic-price pricing-classic-price-old heading-6">$300.00</div>
                                    <div class="pricing-classic-price heading-4">$120.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-classic-body">
                        <ul class="pricing-classic-list">
                            <li>Red Velvet Cake</li>
                            <li>Chocolate Cake</li>
                            <li>Lemon Cake</li>
                            <li>Pink Champagne Cake</li>
                        </ul><a class="button button-lg button-default-outline-2 button-zakaria" href="cart-page.html">Add to cart</a>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="pricing-classic">
                    <div class="pricing-classic-header"><img class="pricing-classic-figure" src="images/pricing-3-346x229.jpg" alt="" width="346" height="229" />
                        <div class="pricing-classic-caption">
                            <div>
                                <h3 class="pricing-classic-title">Party Cakes</h3>
                                <div class="pricing-classic-price-wrap">
                                    <div class="pricing-classic-price heading-4">$100.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-classic-body">
                        <ul class="pricing-classic-list">
                            <li>Pineapple Cake</li>
                            <li>Oreo Cheesecake</li>
                            <li>Mango Meringue Cake</li>
                            <li>Fudgy Chocolate Cake</li>
                        </ul><a class="button button-lg button-default-outline-2 button-zakaria" href="cart-page.html">Add to cart</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection