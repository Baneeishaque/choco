@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">What We Offer</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="what-we-offer.html#">Pages</a></li>
                <li class="active">What We Offer</li>
            </ul>
        </div>
    </div>
</section>
<!-- Section Services-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="row row-30 box-ordered">
            <div class="col-sm-6 col-lg-3">
                <article class="box-icon-modern">
                    <div class="box-icon-modern-header">
                        <div class="box-icon-modern-count box-ordered-item"></div>
                        <div class="box-icon-modern-icon linearicons-cake icon-lg"></div>
                    </div>
                    <h4 class="box-icon-modern-title"><a href="what-we-offer.html#">Quality Products</a></h4>
                    <p class="box-icon-modern-text">Pellentesque elit ullamcorper dignissim cras tincidunt lobortis etiam dignissim diam quis enim.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3">
                <article class="box-icon-modern">
                    <div class="box-icon-modern-header">
                        <div class="box-icon-modern-count box-ordered-item"></div>
                        <div class="box-icon-modern-icon linearicons-lotus icon-lg"></div>
                    </div>
                    <h4 class="box-icon-modern-title"><a href="what-we-offer.html#">catering service</a></h4>
                    <p class="box-icon-modern-text">Nullam non nisi est sit. Proin sed libero enim sed faucibus turpis aenean sed adipiscing diam.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3">
                <article class="box-icon-modern">
                    <div class="box-icon-modern-header">
                        <div class="box-icon-modern-count box-ordered-item"></div>
                        <div class="box-icon-modern-icon linearicons-truck icon-lg"></div>
                    </div>
                    <h4 class="box-icon-modern-title"><a href="what-we-offer.html#">free delivery</a></h4>
                    <p class="box-icon-modern-text">Arcu cursus euismod quis viverra. Velit egestas dui id ornare arcu odio purus ut faucibus.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3">
                <article class="box-icon-modern">
                    <div class="box-icon-modern-header">
                        <div class="box-icon-modern-count box-ordered-item"></div>
                        <div class="box-icon-modern-icon linearicons-credit-card icon-lg"></div>
                    </div>
                    <h4 class="box-icon-modern-title"><a href="what-we-offer.html#">Online payment</a></h4>
                    <p class="box-icon-modern-text">Consequat mauris nunc congue nisi vitae. Bibendum est ultricies integer quis auctor.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe to Our Newsletter-->
<section class="section parallax-container" data-parallax-img="images/parallax-1.jpg">
    <div class="parallax-content section-xxl context-light text-md-left">
        <div class="container">
            <div class="row row-30 justify-content-center align-items-center align-items-md-end">
                <div class="col-lg-3">
                    <h3 class="text-spacing-100 wow fadeInLeft">Stay <span class="font-weight-light">connected</span>
                    </h3>
                    <p class="wow fadeInLeft" data-wow-delay=".1s">Subscribe to our newsletter</p>
                </div>
                <div class="col-lg-8 col-xl-9 inset-lg-bottom-10">
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform rd-form-inline form-lg rd-form-text-center" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="https://ld-wt73.template-help.com/wt_prod-23024/bat/rd-mailform.php">
                        <div class="form-wrap wow fadeInUp">
                            <input class="form-input" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required" />
                            <label class="form-label" for="subscribe-form-0-email">Enter your e-mail address</label>
                        </div>
                        <div class="form-button wow fadeInRight">
                            <button class="button button-shadow-2 button-zakaria button-lg button-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing List-->

<!-- Accordions-->
@endsection