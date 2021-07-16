@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Counters</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="counters.html#">Elements</a></li>
                <li class="active">Counters</li>
            </ul>
        </div>
    </div>
</section>
<!-- Counter Classic-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="row row-30 justify-content-center bordered-1">
            <div class="col-sm-4">
                <div class="counter-classic">
                    <h1 class="counter-classic-number"><span class="counter">500</span>
                    </h1>
                    <div class="counter-classic-decor"></div>
                    <h5 class="counter-classic-title">Types of Cakes<br class="d-none d-sm-block"> and sweets</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter-classic">
                    <h1 class="counter-classic-number"><span class="counter">245</span>
                    </h1>
                    <div class="counter-classic-decor"></div>
                    <h5 class="counter-classic-title">Satisfied<br class="d-none d-sm-block"> Customers</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter-classic">
                    <h1 class="counter-classic-number"><span class="counter">22</span>
                    </h1>
                    <div class="counter-classic-decor"></div>
                    <h5 class="counter-classic-title">qualified <br class="d-none d-sm-block"> Bakers</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Modern-->
<section class="section parallax-container" data-parallax-img="images/parallax-bg-2.jpg">
    <div class="parallax-content section-xxl context-light">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter">245</span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">Satisfied <br class="d-none d-sm-block"> Customers</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter">22</span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">Qualified <br class="d-none d-sm-block"> Staff</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter">8</span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">International <br class="d-none d-sm-block">Awards</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter">2</span><span class="symbol">k</span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">Baked<br class="d-none d-sm-block"> Cakes</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection