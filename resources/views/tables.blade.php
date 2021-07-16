@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Tables</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="tables.html#">Elements</a></li>
                <li class="active">Tables</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-xl bg-default text-center">
    <div class="container">
        <div class="title-group">
            <h3>Table styles</h3>
            <p class="big font-family-sans-serif-1">Tables have always been perfect for displaying facts and numbers.</p>
            <p class="big font-family-sans-serif-1">Now you can benefit from using them on your website.</p>
        </div>
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-primary">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Item #1</td>
                        <td>Description</td>
                        <td>Subtotal</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #2</td>
                        <td>Description</td>
                        <td>Discount</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #3</td>
                        <td>Description</td>
                        <td>Shipping</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #4</td>
                        <td>Description</td>
                        <td>Tax</td>
                        <td>$4.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>All Items</td>
                        <td>Description</td>
                        <td>Your Total</td>
                        <td>$13.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>

<hr>
<section class="section section-md bg-default">
    <div class="container">
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-bordered">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Item #1</td>
                        <td>Description</td>
                        <td>Subtotal</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #2</td>
                        <td>Description</td>
                        <td>Discount</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #3</td>
                        <td>Description</td>
                        <td>Shipping</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #4</td>
                        <td>Description</td>
                        <td>Tax</td>
                        <td>$4.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>All Items</td>
                        <td>Description</td>
                        <td>Your Total</td>
                        <td>$13.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>

<hr>
<section class="section section-md bg-default">
    <div class="container">
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Item #1</td>
                        <td>Description</td>
                        <td>Subtotal</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #2</td>
                        <td>Description</td>
                        <td>Discount</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #3</td>
                        <td>Description</td>
                        <td>Shipping</td>
                        <td>$3.00</td>
                    </tr>
                    <tr>
                        <td>Item #4</td>
                        <td>Description</td>
                        <td>Tax</td>
                        <td>$4.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>All Items</td>
                        <td>Description</td>
                        <td>Your Total</td>
                        <td>$13.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
@endsection