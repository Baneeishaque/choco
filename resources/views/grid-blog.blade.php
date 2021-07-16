@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Grid Blog</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-blog.html">Blog</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
</section>
<!-- Button Sizes-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
                <!-- Post Classic-->
                <article class="post post-classic box-md">
                    <a class="post-classic-figure" href="blog-post.html"><img src="images/post-3-370x239.jpg" alt="" width="370" height="239" /></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2020-08-09">August 9, 2020</time>
                        </div>
                        <h5 class="post-classic-title"><a href="blog-post.html">How to Pipe a Fluffy Frosting Border on a Cake</a></h5>
                        <p class="post-classic-text">Est velox nuptia, cesaris. Est dexter turpis, cesaris. Cum nixus persuadere, omnes fluctuies promissio flavum</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <!-- Post Classic-->
                <article class="post post-classic box-md">
                    <a class="post-classic-figure" href="blog-post.html"><img src="images/post-1-370x239.jpg" alt="" width="370" height="239" /></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2020-08-09">August 9, 2020</time>
                        </div>
                        <h5 class="post-classic-title"><a href="blog-post.html">Recipe of the Day: Pumpkin Spice Latte Cake</a></h5>
                        <p class="post-classic-text">Sensorems peregrinatione in rugensis civitas! Ubi est bi-color byssus? Velox, teres ollas recte aperto de castus</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <!-- Post Classic-->
                <article class="post post-classic box-md">
                    <a class="post-classic-figure" href="blog-post.html"><img src="images/post-2-370x239.jpg" alt="" width="370" height="239" /></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2020-08-09">August 9, 2020</time>
                        </div>
                        <h5 class="post-classic-title"><a href="blog-post.html">Top 5 Tips for Successful Cake Baking</a></h5>
                        <p class="post-classic-text">Talis tus acceleratrix contactuss lixa est. Pol, a bene equiso. Cum nuptia peregrinatione, omnes adgiumes visum</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <!-- Post Classic-->
                <article class="post post-classic box-md">
                    <a class="post-classic-figure" href="blog-post.html"><img src="images/post-4-370x239.jpg" alt="" width="370" height="239" /></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2020-08-09">August 9, 2020</time>
                        </div>
                        <h5 class="post-classic-title"><a href="blog-post.html">10 Easiest Ways to Decorate a Cake</a></h5>
                        <p class="post-classic-text">Cum zeta experimentum, omnes scutumes fallere domesticus, salvus lapsuses. Neuter, teres calcarias unus</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <!-- Post Classic-->
                <article class="post post-classic box-md">
                    <a class="post-classic-figure" href="blog-post.html"><img src="images/post-5-370x239.jpg" alt="" width="370" height="239" /></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2020-08-09">August 9, 2020</time>
                        </div>
                        <h5 class="post-classic-title"><a href="blog-post.html">Baking Your First Cake: What You Need to Know</a></h5>
                        <p class="post-classic-text">Orgia, nixus, et zirbus. Vortexs volare in hafnia! Domesticus, dexter pess inciviliter desiderium de fortis</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <!-- Post Classic-->
                <article class="post post-classic box-md">
                    <a class="post-classic-figure" href="blog-post.html"><img src="images/post-6-370x239.jpg" alt="" width="370" height="239" /></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2020-08-09">August 9, 2020</time>
                        </div>
                        <h5 class="post-classic-title"><a href="blog-post.html">How to Make Your Cake Even More Tasty</a></h5>
                        <p class="post-classic-text">Cur contencio studere? Finis mirabilis buxum est. Ferox lumen grauiter resuscitabos hydra est. Magnum byssus</p>
                    </div>
                </article>
            </div>
        </div>
        <!-- <div class="pagination-wrap"> -->
        <!-- Bootstrap Pagination-->
        <!-- <nav aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item page-item-control disabled"><a class="page-link" href="grid-blog.html#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="grid-blog.html#">2</a></li>
                <li class="page-item"><a class="page-link" href="grid-blog.html#">3</a></li>
                <li class="page-item page-item-control"><a class="page-link" href="grid-blog.html#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
              </ul>
            </nav>
          </div>
        </div> -->
</section>
@endsection