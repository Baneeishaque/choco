@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Buttons</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="buttons.html#">Elements</a></li>
                <li class="active">Buttons</li>
            </ul>
        </div>
    </div>
</section>
<!-- Button Sizes-->
<section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <h3>Button Sizes</h3>
        <div class="group-xs group-middle">
            <div class="button button-lg button-secondary button-zakaria">Large size</div>
            <div class="button button-secondary button-zakaria">Medium size</div>
            <div class="button button-sm button-secondary button-zakaria">Small size</div>
        </div>
    </div>
</section>

<!-- Buttons with Icons-->
<section class="section section-sm bg-default text-md-left">
    <div class="container">
        <h3>Buttons with Icons</h3>
        <div class="group-xs group-middle">
            <div class="button button-lg button-icon button-icon-left button-primary button-zakaria"><span class="icon mdi mdi-arrow-right"></span>Read more</div>
            <div class="button button-lg button-icon button-icon-left button-default-outline button-zakaria"><span class="icon mdi mdi-arrow-right"></span>Read more</div>
        </div>
    </div>
</section>

<!-- Buttons with Shadow-->
<section class="section section-sm section-last bg-default text-md-left">
    <div class="container">
        <h3>Buttons with Shadows</h3>
        <div class="group-xs group-middle">
            <div class="button button-lg button-icon button-icon-left button-shadow button-primary button-zakaria"><span class="icon mdi mdi-arrow-right"></span>Read more</div>
            <div class="button button-lg button-icon button-icon-left button-shadow button-default-outline button-zakaria"><span class="icon mdi mdi-arrow-right"></span>Read more</div>
        </div>
    </div>
</section>
@endsection