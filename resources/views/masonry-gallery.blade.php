 @extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Masonry Gallery</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-gallery.html">Gallery</a></li>
                <li class="active">Masonry Gallery</li>
            </ul>
        </div>
    </div>
</section>
<!-- Masonry Gallery-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="isotope-wrap">
            <div class="isotope-filters">
                <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline" data-custom-toggle=".isotope-filters-list" data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
                <div class="isotope-filters-list-wrap">
                    <ul class="isotope-filters-list">
                        <li><a class="active" href="masonry-gallery.html#" data-isotope-filter="*">All Categories</a></li>
                        <li><a href="masonry-gallery.html#" data-isotope-filter="Type 1">Cakes</a></li>
                        <li><a href="masonry-gallery.html#" data-isotope-filter="Type 2">Cupcakes</a></li>
                    </ul>
                </div>
            </div>
            <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                        <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-7-270x250.jpg" alt="" width="270" height="250" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div>
                                <h5 class="thumbnail-classic-title"><a href="single-product.html">Sponge Cake</a></h5>
                                <div class="thumbnail-classic-price">$12.99</div>
                                <div class="thumbnail-classic-button-wrap">
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-8-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-7-270x250.jpg" alt="" width="270" height="250" /></a>
                                    </div>
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                        <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-3-270x530.jpg" alt="" width="270" height="530" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div>
                                <h5 class="thumbnail-classic-title"><a href="single-product.html">Angel Food Cake</a></h5>
                                <div class="thumbnail-classic-price">$13.99</div>
                                <div class="thumbnail-classic-button-wrap">
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-5-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-3-270x530.jpg" alt="" width="270" height="530" /></a>
                                    </div>
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                        <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-4-270x250.jpg" alt="" width="270" height="250" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div>
                                <h5 class="thumbnail-classic-title"><a href="single-product.html">Strawberry Cupcake</a></h5>
                                <div class="thumbnail-classic-price">$10.99</div>
                                <div class="thumbnail-classic-button-wrap">
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-3-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-4-270x250.jpg" alt="" width="270" height="250" /></a>
                                    </div>
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                        <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-6-270x250.jpg" alt="" width="270" height="250" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div>
                                <h5 class="thumbnail-classic-title"><a href="single-product.html">Lemon Cupcake</a></h5>
                                <div class="thumbnail-classic-price">$8.99</div>
                                <div class="thumbnail-classic-button-wrap">
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-4-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-6-270x250.jpg" alt="" width="270" height="250" /></a>
                                    </div>
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                        <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-5-270x250.jpg" alt="" width="270" height="250" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div>
                                <h5 class="thumbnail-classic-title"><a href="single-product.html">Genoise Cake</a></h5>
                                <div class="thumbnail-classic-price">$14.99</div>
                                <div class="thumbnail-classic-button-wrap">
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-7-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-5-270x250.jpg" alt="" width="270" height="250" /></a>
                                    </div>
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                        <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-1-570x530.jpg" alt="" width="570" height="530" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div>
                                <h5 class="thumbnail-classic-title"><a href="single-product.html">Champagne Cupcake</a></h5>
                                <div class="thumbnail-classic-price">$16.99</div>
                                <div class="thumbnail-classic-button-wrap">
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-1-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-1-570x530.jpg" alt="" width="570" height="530" /></a>
                                    </div>
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail-classic">
                        <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-2-570x250.jpg" alt="" width="570" height="250" />
                        </div>
                        <div class="thumbnail-classic-caption">
                            <div>
                                <h5 class="thumbnail-classic-title"><a href="single-product.html">Oranges &amp; Pineapples</a></h5>
                                <div class="thumbnail-classic-price">$10.99</div>
                                <div class="thumbnail-classic-button-wrap">
                                    <div class="thumbnail-classic-button">
                                        <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-2-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-2-570x250.jpg" alt="" width="570" height="250" /></a>
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
    </div>
</section>
@endsection