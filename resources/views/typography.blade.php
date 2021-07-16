@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Typography</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="typography.html#">Elements</a></li>
                <li class="active">Typography</li>
            </ul>
        </div>
    </div>
</section>
<!-- Base typography-->
<section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-30 row-md-50">
            <div class="col-12">
                <ul class="list-xl typography-style-1">
                    <li>
                        <h1 class="text-decorative font-weight-normal text-transform-none">H1 Heading</h1>
                        <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely
                            have a great experience of using our web page.</p>
                    </li>
                    <li>
                        <h2>H2 Heading</h2>
                        <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely
                            have a great experience of using our web page.</p>
                    </li>
                    <li>
                        <h3>H3 Heading</h3>
                        <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely
                            have a great experience of using our web page.</p>
                    </li>
                    <li>
                        <h4>H4 Heading</h4>
                        <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely
                            have a great experience of using our web page.</p>
                    </li>
                    <li>
                        <h5>H5 Heading</h5>
                        <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely
                            have a great experience of using our web page.</p>
                    </li>
                    <li>
                        <h6>H6 Heading</h6>
                        <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely
                            have a great experience of using our web page.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- HTML Text Elements-->
<section class="section section-sm bg-default text-md-left">
    <div class="container">
        <h3>HTML Text Elements</h3>
        <p class="text-block">Welcome to our wonderful world. This is a bold text
            <mark>This is a highlighted text</mark>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login<span class="tooltip-custom" data-toggle="tooltip"
                data-placement="top" title="Default text">Tooltips</span>widgets, you will definitely have a great experience of using our web page.<span class="text-strike">This is a strikethrough text</span><span class="text-underline">This is an underlined text.</span>
            <a href="typography.html#">Link</a><a class="link-hover" href="typography.html#">Hover link</a><a class="link-active" href="typography.html#">Press link</a>
        </p>
    </div>
</section>

<!-- Lists and Blockquote-->
<section class="section section-sm bg-default text-md-left">
    <div class="container">
        <h3>Ordered & Unordered Lists</h3>
        <div class="row row-sm">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="row row-30">
                    <div class="col-sm-6">
                        <ul class="list-marked d-inline-block d-inline-md-block">
                            <li>Consulting</li>
                            <li>Customer Service</li>
                            <li>Innovations</li>
                            <li>Management</li>
                            <li>Ethics</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ol class="list-ordered d-inline-block d-inline-md-block">
                            <li>Consulting</li>
                            <li>Customer Service</li>
                            <li>Innovations</li>
                            <li>Management</li>
                            <li>Ethics</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blockquote-->
<section class="section section-sm section-last bg-default text-md-left">
    <div class="container">
        <div class="row row-50">
            <div class="col-md-10 col-lg-9 col-xl-7">
                <h3>Blockquote</h3>
                <!-- Quote Classic-->
                <article class="quote-classic">
                    <div class="quote-classic-text">
                        <div class="q">Welcome to our wonderful world. We sincerely hope that you will enjoy visiting our website.</div>
                    </div>
                    <div class="quote-classic-author">Patrick Goodman</div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection