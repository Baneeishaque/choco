@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Grid Fullwidth Gallery</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-gallery.html">Gallery</a></li>
                <li class="active">Grid Fullwidth Gallery</li>
            </ul>
        </div>
    </div>
</section>
<!-- Grid Gallery-->
<section class="section section-xl bg-default">
    <div class="container-fluid isotope-wrap isotope-custom-2">
        <div class="isotope-filters">
            <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline" data-custom-toggle=".isotope-filters-list" data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
            <div class="isotope-filters-list-wrap">
                <ul class="isotope-filters-list">
                    <li><a class="active" href="grid-fullwidth-gallery.html#" data-isotope-filter="*">all Categories</a></li>
                    <li><a href="grid-fullwidth-gallery.html#" data-isotope-filter="Type 1">Cakes</a></li>
                    <li><a href="grid-fullwidth-gallery.html#" data-isotope-filter="Type 2">Cupcakes</a></li>
                </ul>
            </div>
        </div>
        <div class="row row-30 isotope" data-lightgallery="group">
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-1-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-1-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Sponge Cake</a></h5>
                            <div class="thumbnail-classic-tag">Cakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-2-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-2-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Angel Food Cake</a></h5>
                            <div class="thumbnail-classic-tag">Cakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-3-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-3-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Strawberry Cupcake</a></h5>
                            <div class="thumbnail-classic-tag">Cupcakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-4-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-4-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Lemon Cupcake</a></h5>
                            <div class="thumbnail-classic-tag">Cupcakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-7-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-5-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Genoise Cake</a></h5>
                            <div class="thumbnail-classic-tag">Cakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-8-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-6-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Champagne Cupcake</a></h5>
                            <div class="thumbnail-classic-tag">Cupcakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-5-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-7-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Caramel Cupcake</a></h5>
                            <div class="thumbnail-classic-tag">Cupcakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic">
                    <a class="thumbnail-classic-figure" href="images/grid-gallery-9-original.jpg" data-lightgallery="item"><img src="images/grid-fullwidth-gallery-8-480x339.jpg" alt="" width="480" height="339" /></a>
                    <div class="thumbnail-classic-caption">
                        <div>
                            <h5 class="thumbnail-classic-title"><a href="single-product.html">Butter Cake</a></h5>
                            <div class="thumbnail-classic-tag">Cakes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
@endsection