@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Forms</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="forms.html#">Elements</a></li>
                <li class="active">Forms</li>
            </ul>
        </div>
    </div>
</section>
<!-- Forms-->
<section class="section section-xxl bg-default text-md-left">
    <div class="container">
        <div class="row row-40 justify-content-center justify-content-md-between">
            <div class="col-sm-10 col-md-5 col-xl-6">
                <div class="inset-xl-right-70">
                    <h3>Contact form 1</h3>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://ld-wt73.template-help.com/wt_prod-23024/bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required" />
                            <label class="form-label" for="contact-name">Your Name</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required" />
                            <label class="form-label" for="contact-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message">Message</label>
                            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                        <button class="button button-lg button-primary button-zakaria" type="submit">Send</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-10 col-md-6">
                <div class="inset-xl-right-50">
                    <h3>Login form</h3>
                    <div class="group group-middle group-button-1"><a class="button button-google button-icon button-icon-left button-round" href="forms.html#"><span class="icon fa fa-google-plus"></span>Google+</a>
                        <a class="button button-twitter button-icon button-icon-left button-round" href="forms.html#"><span class="icon fa fa-twitter"></span>Twitter</a><a class="button button-facebook button-icon button-icon-left button-round" href="forms.html#"><span class="icon fa fa-facebook"></span>Facebook</a></div>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform">
                        <div class="form-wrap">
                            <input class="form-input" id="login-name" type="text" name="name" data-constraints="@Required">
                            <label class="form-label" for="login-name">Username</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                            <label class="form-label" for="login-password">Password</label>
                        </div>
                        <label class="checkbox-inline">
                    <input name="input-checkbox-1" value="checkbox-1" type="checkbox">Remember Me
                  </label>
                        <div class="group-sm group-middle group-button-1">
                            <button class="button button-lg button-primary button-zakaria" type="submit">Sign In</button><a class="button button-lg button-secondary button-zakaria" href="forms.html#">Create an account</a>
                        </div>
                    </form>
                </div>
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
<!-- Contact form 2-->
<section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <h3>Contact form 2</h3>
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
            <button class="button button-lg button-secondary button-zakaria" type="submit">Send Message</button>
        </form>
    </div>
</section>

<!-- Contact form (With Recaptha)-->
<section class="section section-sm bg-default text-md-left">
    <div class="container">
        <h3>Contact form (With Recaptha)</h3>
        <!-- RD Mailform-->
        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://ld-wt73.template-help.com/wt_prod-23024/bat/rd-mailform.php">
            <div class="row row-20 row-md-30">
                <div class="col-lg-8">
                    <div class="row row-20 row-md-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-first-name-3" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-first-name-3">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-last-name-3" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-last-name-3">Last Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email-3" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email-3">E-mail</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone-3" type="text" name="phone" data-constraints="@Numeric">
                                <label class="form-label" for="contact-phone-3">Phone</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message-3">Message</label>
                        <textarea class="form-input textarea-lg" id="contact-message-3" name="phone" data-constraints="@Required"></textarea>
                    </div>
                </div>
            </div>
            <div class="group-sm group-middle">
                <div class="form-wrap form-wrap-recaptcha">
                    <!-- Google captcha-->
                    <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                </div>
                <div>
                    <button class="button button-lg button-secondary button-zakaria" type="submit">Send message</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- MailChimp-->
<section class="section section-sm bg-default text-center">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3>MailChimp</h3>
                <p class="big">Sign up to our newsletter and be the first to know about the latest news, special offers, events, and discounts.</p>
                <!-- Mailchimp-->
                <form class="rd-form mailchimp-mailform rd-form-inline" data-form-output="form-output-global" action="https://templatemonster.us15.list-manage.com/subscribe/post?u=ba5bb362073a413f48e4a7b90&amp;id=8dc95d9dec" method="post">
                    <div class="form-wrap">
                        <label class="form-label" for="mailchimp-email">Enter your e-mail</label>
                        <input class="form-input" id="mailchimp-email" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                    <div class="form-button">
                        <button class="button button-primary button-zakaria" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Campaign Monitor-->
<section class="section section-sm section-last bg-default text-center">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3>Campaign Monitor</h3>
                <p class="big">Sign up to our newsletter and be the first to know about the latest news, special offers, events, and discounts.</p>
                <!-- Campaign Monitor-->
                <form class="rd-form campaign-mailform rd-form-inline" data-form-output="form-output-global" action="https://templatermonster.createsend.com/t/j/s/zjjikd/" method="post">
                    <div class="form-wrap">
                        <label class="form-label" for="campaign-email">Enter your e-mail</label>
                        <input class="form-input" id="campaign-email" type="email" name="cm-zjjikd-zjjikd" data-constraints="@Email @Required">
                    </div>
                    <div class="form-button">
                        <button class="button button-primary button-zakaria" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection