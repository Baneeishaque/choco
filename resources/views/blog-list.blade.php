@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Blog List</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-blog.html">Blog</a></li>
                <li class="active">Blog List</li>
            </ul>
        </div>
    </div>
</section>
<!-- Section Shop-->
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="row row-50 row-md-60">
            <div class="col-lg-8 col-xl-9">
                <div class="inset-xl-right-70">
                    <div class="row row-50 row-md-60 row-lg-80 row-xl-100">
                        <div class="col-12">
                            <!-- Post Modern-->
                            <article class="post post-modern box-xxl">
                                <div class="post-modern-panel">
                                    <div><a class="post-modern-tag" href="blog-list.html#">news</a></div>
                                    <div>
                                        <time class="post-modern-time" datetime="2020-08-09">August 9, 2020</time>
                                    </div>
                                </div>
                                <h3 class="post-modern-title"><a href="blog-post.html">How to Pipe a Fluffy Frosting Border on a Cake</a></h3>
                                <a class="post-modern-figure" href="blog-post.html"><img src="images/post-7-800x394.jpg" alt="" width="800" height="394" /></a>
                                <p class="post-modern-text">Risus commodo viverra maecenas accumsan lacus vel. Nulla facilisi cras fermentum odio eu. Et egestas quis ipsum suspendisse. Sed nisi lacus sed viverra. Sodales ut eu sem.</p><a class="post-modern-link" href="blog-post.html">Read more</a>
                            </article>
                        </div>
                        <div class="col-12">
                            <!-- Post Modern-->
                            <article class="post post-modern box-xxl">
                                <div class="post-modern-panel">
                                    <div><a class="post-modern-tag" href="blog-list.html#">News</a></div>
                                    <div>
                                        <time class="post-modern-time" datetime="2020-08-09">August 9, 2020</time>
                                    </div>
                                </div>
                                <h3 class="post-modern-title"><a href="blog-post.html">Recipe of the Day: Pumpkin Spice Latte Cake</a></h3>
                                <a class="post-modern-figure" href="blog-post.html"><img src="images/post-8-800x394.jpg" alt="" width="800" height="394" /></a>
                                <p class="post-modern-text">Facilisis mauris sit amet massa. Id faucibus nisl tincidunt eget nullam. Mus mauris vitae ultricies leo integer malesuada. Aliquam sem fringilla ut morbi tincidunt augue.</p><a class="post-modern-link" href="blog-post.html">Read more</a>
                            </article>
                        </div>
                        <div class="col-12">
                            <!-- Post Modern-->
                            <article class="post post-modern box-xxl">
                                <div class="post-modern-panel">
                                    <div><a class="post-modern-tag" href="blog-list.html#">News</a></div>
                                    <div>
                                        <time class="post-modern-time" datetime="2020-08-09">August 9, 2020</time>
                                    </div>
                                </div>
                                <h3 class="post-modern-title"><a href="blog-post.html">Top 5 Tips for Successful Cake Baking</a></h3>
                                <a class="post-modern-figure" href="blog-post.html"><img src="images/post-9-800x394.jpg" alt="" width="800" height="394" /></a>
                                <p class="post-modern-text">Orci phasellus egestas tellus rutrum tellus pellentesque eu. Proin fermentum leo vel orci porta non pulvinar neque laoreet. Venenatis a condimentum vitae sapien pellentesque.</p><a class="post-modern-link" href="blog-post.html">Read more</a>
                            </article>
                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <!-- Bootstrap Pagination-->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item page-item-control disabled"><a class="page-link" href="blog-list.html#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                                <li class="page-item active"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="blog-list.html#">2</a></li>
                                <li class="page-item"><a class="page-link" href="blog-list.html#">3</a></li>
                                <li class="page-item page-item-control"><a class="page-link" href="blog-list.html#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="aside row row-30 row-md-50 justify-content-md-between">
                    <div class="aside-item col-12">
                        <div class="team-info box-sm">
                            <a class="team-info-figure" href="blog-list.html#"><img src="images/user-4-123x123.jpg" alt="" width="123" height="123" /></a>
                            <h6 class="team-info-title"><a href="blog-list.html#">Caroline Lopez</a></h6>
                            <p class="team-info-text">Quis risus sed vulputate odio ut maecenas.</p>
                        </div>
                        <!-- RD Search Form-->
                        <form class="rd-search form-search" action="search-results.html" method="GET">
                            <div class="form-wrap">
                                <label class="form-label" for="search-form">Search blog...</label>
                                <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                            </div>
                        </form>
                    </div>
                    <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                        <h6 class="aside-title">Categories</h6>
                        <ul class="list-categories">
                            <li><a href="blog-list.html#">All</a><span class="list-categories-number">(18)</span></li>
                            <li><a href="blog-list.html#">Cakes</a><span class="list-categories-number">(9)</span></li>
                            <li><a href="blog-list.html#">Baking</a><span class="list-categories-number">(5)</span></li>
                            <li><a href="blog-list.html#">Recipes</a><span class="list-categories-number">(8)</span></li>
                        </ul>
                    </div>
                    <div class="aside-item col-sm-6 col-lg-12">
                        <h6 class="aside-title">Latest Posts</h6>
                        <div class="row row-20 row-lg-30 gutters-10">
                            <div class="col-6 col-lg-12">
                                <!-- Post Minimal-->
                                <article class="post post-minimal">
                                    <div class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                                        <div class="unit-left">
                                            <a class="post-minimal-figure" href="blog-post.html"><img src="images/post-mini-1-106x104.jpg" alt="" width="106" height="104" /></a>
                                        </div>
                                        <div class="unit-body">
                                            <p class="post-minimal-title"><a href="blog-post.html">10 Easiest Ways to Decorate a Cake</a></p>
                                            <div class="post-minimal-time">
                                                <time datetime="2020-03-15">March 15, 2020</time>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-6 col-lg-12">
                                <!-- Post Minimal-->
                                <article class="post post-minimal">
                                    <div class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                                        <div class="unit-left">
                                            <a class="post-minimal-figure" href="blog-post.html"><img src="images/post-mini-2-106x104.jpg" alt="" width="106" height="104" /></a>
                                        </div>
                                        <div class="unit-body">
                                            <p class="post-minimal-title"><a href="blog-post.html">10 Tips for Baking Your First Cake</a></p>
                                            <div class="post-minimal-time">
                                                <time datetime="2020-03-15">March 15, 2020</time>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                        <h6 class="aside-title">Popular tags</h6>
                        <div class="group-sm group-tags"><a class="link-tag" href="blog-list.html#">News</a><a class="link-tag" href="blog-list.html#">Blog</a><a class="link-tag" href="blog-list.html#">Baking</a><a class="link-tag" href="blog-list.html#">cakes</a><a class="link-tag"
                                href="blog-list.html#">Tips</a><a class="link-tag" href="blog-list.html#">Recipes</a></div>
                    </div>
                    <div class="aside-item col-sm-6 col-lg-12">
                        <h6 class="aside-title">Archive</h6>
                        <ul class="list-marked list-archives d-inline-block d-md-block">
                            <li><a href="blog-list.html#">March 2020</a></li>
                            <li><a href="blog-list.html#">February 2020</a></li>
                            <li><a href="blog-list.html#">January 2020</a></li>
                            <li><a href="blog-list.html#">December 2020</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection