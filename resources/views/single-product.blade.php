@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Single Product</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-shop.html">Shop</a></li>
                <li class="active">Single Product</li>
            </ul>
        </div>
    </div>
</section>
<!-- Single Product-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-6">
                <div class="slick-vertical slick-product">
                    <!-- Slick Carousel-->
                    <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-1-530x480.png" alt="" width="530" height="480" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-2-530x480.png" alt="" width="530" height="480" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-3-530x480.png" alt="" width="530" height="480" />
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-1-530x480.png" alt="" width="530" height="480" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-2-530x480.png" alt="" width="530" height="480" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-3-530x480.png" alt="" width="530" height="480" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-product">
                    <h3 class="text-transform-none font-weight-medium">Chocolate Truffles</h3>
                    <div class="group-md group-middle">
                        <div class="single-product-price">$23</div>
                        <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, ei impetus epicurei his, ne falli erant consequuntur est. Mei simul aperiam eu, an rebum regione ponderum mel. Facer placerat ut duo, id duis solum maiorum vis, vim autemsemper docendi cu. Pro</p>
                    <hr class="hr-gray-100">
                    <ul class="list list-description">
                        <li><span>Categories:</span><span>Sweets</span></li>
                        <li><span>Weight:</span><span>7,25 oz</span></li>
                        <li><span>Box:</span><span>60 x 60 x 90 cm</span></li>
                    </ul>
                    <div class="group-xs group-middle">
                        <div class="product-stepper">
                            <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                        </div>
                        <div><a class="button button-lg button-secondary button-zakaria" href="cart-page.html">Add to cart</a></div>
                    </div>
                    <hr class="hr-gray-100">
                    <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                        <div>
                            <ul class="list-inline list-social list-inline-sm">
                                <li>
                                    <a class="icon mdi mdi-facebook" href="single-product.html#"></a>
                                </li>
                                <li>
                                    <a class="icon mdi mdi-twitter" href="single-product.html#"></a>
                                </li>
                                <li>
                                    <a class="icon mdi mdi-instagram" href="single-product.html#"></a>
                                </li>
                                <li>
                                    <a class="icon mdi mdi-google-plus" href="single-product.html#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://ld-wt73.template-help.com/wt_prod-23024/bat/rd-mailform.php">
                    <div class="row row-20 row-md-30">
                        <div class="col-lg-8">
                            <div class="row row-20 row-md-30">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name-2" type="text" name="name" data-constraints="@Required" />
                                        <label class="form-label" for="contact-first-name-2">First Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-last-name-2" type="text" name="name" data-constraints="@Required" />
                                        <label class="form-label" for="contact-last-name-2">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required" />
                                        <label class="form-label" for="contact-email-2">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric" />
                                        <label class="form-label" for="contact-phone-2">Phone</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-2">Message</label>
                                <textarea class="form-input textarea-lg" id="contact-message-2" name="phone" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button button-lg button-secondary button-zakaria" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Related Products-->
<section class="section section-sm section-last bg-default">
    <div class="container">
        <h4 class="font-weight-sbold">Featured Products</h4>
        <div class="row row-lg row-30 row-lg-50 justify-content-center">
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-1-152x160.png" alt="" width="152" height="160" />
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Chocolate Truffles</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price product-price-old">$30.00</div>
                            <div class="product-price">$23.00</div>
                        </div>
                    </div><span class="product-badge product-badge-sale">Sale</span>
                    <div class="product-button-wrap">
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a>
                        </div>
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-2-157x127.png" alt="" width="157" height="127" />
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Chocolate Pudding</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$25.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a>
                        </div>
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-3-179x114.png" alt="" width="179" height="114" />
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Dark Chocolate Cake</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$15.00</div>
                        </div>
                    </div><span class="product-badge product-badge-new">New</span>
                    <div class="product-button-wrap">
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a>
                        </div>
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-4-215x112.png" alt="" width="215" height="112" />
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Chocolate Cookies</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$12.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a>
                        </div>
                        <div class="product-button">
                            <a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection