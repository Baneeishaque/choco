@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Progress Bars</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="progress-bars.html#">Elements</a></li>
                <li class="active">Progress Bars</li>
            </ul>
        </div>
    </div>
</section>
<!-- Section Skill Bars and Time Circles-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-md-10 col-lg-6">
                <!-- Linear progress bar-->
                <article class="progress-linear">
                    <div class="progress-linear-header">
                        <p>Dedication</p>
                    </div>
                    <div class="progress-linear-body">
                        <div class="progress-linear-bar"><span class="progress-linear-counter">78</span></div>
                    </div>
                </article>
                <!-- Linear progress bar-->
                <article class="progress-linear progress-primary">
                    <div class="progress-linear-header">
                        <p>Knowledge</p>
                    </div>
                    <div class="progress-linear-body">
                        <div class="progress-linear-bar"><span class="progress-linear-counter">69</span></div>
                    </div>
                </article>
                <!-- Linear progress bar-->
                <article class="progress-linear progress-primary">
                    <div class="progress-linear-header">
                        <p>Professionalism</p>
                    </div>
                    <div class="progress-linear-body">
                        <div class="progress-linear-bar"><span class="progress-linear-counter">78</span></div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <div class="countdown countdown-without-seconds justify-content-center" data-countdown="data-countdown" data-to="2020-12-31">
                    <div class="countdown-block countdown-block-days">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-days="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-days="">00</div>
                        </div>
                        <div class="h5 countdown-title">days</div>
                    </div>
                    <div class="countdown-block countdown-block-hours">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-hours="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-hours="">00</div>
                        </div>
                        <div class="h5 countdown-title">hours</div>
                    </div>
                    <div class="countdown-block countdown-block-minutes">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-minutes="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-minutes="">00</div>
                        </div>
                        <div class="h5 countdown-title">minutes</div>
                    </div>
                    <div class="countdown-block countdown-block-seconds">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-seconds="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-seconds="">00</div>
                        </div>
                        <div class="h5 countdown-title">seconds</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection