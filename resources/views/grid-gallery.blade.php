@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Grid Gallery</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-gallery.html">Gallery</a></li>
                <li class="active">Grid Gallery</li>
            </ul>
        </div>
    </div>
</section>
<!-- Grid Gallery-->
<section class="section section-xl bg-default">
    <div class="container isotope-wrap">
        <div class="isotope-filters">
            <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline" data-custom-toggle=".isotope-filters-list" data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
            <div class="isotope-filters-list-wrap">
                <ul class="isotope-filters-list">
                    <li><a class="active" href="grid-gallery.html#" data-isotope-filter="*">All Categories</a></li>
                    <li><a href="grid-gallery.html#" data-isotope-filter="Type 1">Cakes</a></li>
                    <li><a href="grid-gallery.html#" data-isotope-filter="Type 2">Cupcakes</a></li>
                </ul>
            </div>
        </div>
        <div class="row row-30 isotope" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <div class="thumbnail-classic-figure"><img src="images/grid-gallery-1-370x315.jpg" alt="" width="370" height="315" />
                    </div>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Sponge Cake</a></h5>
                            <div class="thumbnail-classic-price">$13.99</div>
                            <div class="thumbnail-classic-button-wrap">
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-1-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-1-370x315.jpg" alt="" width="370" height="315" /></a>
                                </div>
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <div class="thumbnail-classic-figure"><img src="images/grid-gallery-2-370x315.jpg" alt="" width="370" height="315" />
                    </div>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Angel Food Cake</a></h5>
                            <div class="thumbnail-classic-price">$12.99</div>
                            <div class="thumbnail-classic-button-wrap">
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-2-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-2-370x315.jpg" alt="" width="370" height="315" /></a>
                                </div>
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <div class="thumbnail-classic-figure"><img src="images/grid-gallery-3-370x315.jpg" alt="" width="370" height="315" />
                    </div>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Strawberry Cupcake</a></h5>
                            <div class="thumbnail-classic-price">$10.99</div>
                            <div class="thumbnail-classic-button-wrap">
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-3-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-3-370x315.jpg" alt="" width="370" height="315" /></a>
                                </div>
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <div class="thumbnail-classic-figure"><img src="images/grid-gallery-4-370x315.jpg" alt="" width="370" height="315" />
                    </div>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Lemon Cupcake</a></h5>
                            <div class="thumbnail-classic-price">$12.99</div>
                            <div class="thumbnail-classic-button-wrap">
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-4-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-4-370x315.jpg" alt="" width="370" height="315" /></a>
                                </div>
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <div class="thumbnail-classic-figure"><img src="images/grid-gallery-5-370x315.jpg" alt="" width="370" height="315" />
                    </div>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Genoise Cake</a></h5>
                            <div class="thumbnail-classic-price">$14.99</div>
                            <div class="thumbnail-classic-button-wrap">
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-7-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-5-370x315.jpg" alt="" width="370" height="315" /></a>
                                </div>
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <div class="thumbnail-classic-figure"><img src="images/grid-gallery-6-370x315.jpg" alt="" width="370" height="315" />
                    </div>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Champagne Cupcake</a></h5>
                            <div class="thumbnail-classic-price">$17.99</div>
                            <div class="thumbnail-classic-button-wrap">
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-8-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-6-370x315.jpg" alt="" width="370" height="315" /></a>
                                </div>
                                <div class="thumbnail-classic-button">
                                    <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
@endsection