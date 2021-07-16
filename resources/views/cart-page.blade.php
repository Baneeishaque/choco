 @extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Cart Page</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-shop.html">Shop</a></li>
                <li class="active">Cart Page</li>
            </ul>
        </div>
    </div>
</section>
<!-- Shopping Cart-->
<section class="section section-xl bg-default">
    <div class="container">
        <!-- shopping-cart-->
        <div class="table-custom-responsive">
            <table class="table-custom table-cart">
                <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="prod-card-inner">
                                <a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-4-146x132.png" alt="" width="146" height="132" /></a><a class="table-cart-link" href="single-product.html">Milk Chocolate Pudding</a></div>
                        </td>
                        <td>$25.00</td>
                        <td>
                            <div class="table-cart-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                            </div>
                        </td>
                        <td>$25</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="prod-card-inner">
                                <a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-5-146x132.png" alt="" width="146" height="132" /></a><a class="table-cart-link" href="single-product.html">Chocolate Truffles</a></div>
                        </td>
                        <td>$23.00</td>
                        <td>
                            <div class="table-cart-stepper">
                                <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                            </div>
                        </td>
                        <td>$23</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="group-xl group-justify justify-content-center justify-content-md-between">
            <div>
                <form class="rd-form rd-mailform rd-form-inline rd-form-coupon">
                    <div class="form-wrap">
                        <input class="form-input form-input-inverse" id="coupon-code" type="text" name="text">
                        <label class="form-label" for="coupon-code">Coupon code</label>
                    </div>
                    <div class="form-button">
                        <button class="button button-lg button-secondary button-zakaria" type="submit">Apply</button>
                    </div>
                </form>
            </div>
            <div>
                <div class="group-xl group-middle">
                    <div>
                        <div class="group-md group-middle">
                            <div class="heading-5 font-weight-medium text-gray-500">Total</div>
                            <div class="heading-3 font-weight-normal">$48</div>
                        </div>
                    </div><a class="button button-lg button-primary button-zakaria" href="checkout.html">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection