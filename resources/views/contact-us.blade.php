@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Contact Us</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- Get in touch-->
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="title-classic">
            <h3 class="title-classic-title">Get in touch</h3>
            <p class="title-classic-subtitle">We are available 24/7 by fax, e-mail or by phone. You can also use our <br class="d-none d-lg-block">quick contact form to ask a question about our products.</p>
        </div>
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
<!-- Get in touch-->
<section class="section section-xl bg-gray-4">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-4">
                <h4>Phones</h4>
                <ul class="contacts-classic">
                    <li>Office <a href="tel:#">+91 8714353450</a>
                    </li>
                    <li>Enquiry<a href="tel:#">+91 8714353450</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4">
                <h4>Address</h4>
                <div class="contacts-classic"><a href="https://www.google.com/maps/place/Puthuparamba+Rd,+Kerala,+India/@11.0012005,75.9787422,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba7b35aa99bf7e7:0xc1d84e460c017206!8m2!3d11.0012005!4d75.9809309">Monte Alban <br>Darussalam Complex, Puthupparamba Towm<br>Puthupparamba PO, Kottakkal - 676501</a></div>
            </div>
            <div class="col-sm-6 col-md-4">
                <h4>E-mails</h4>
                <ul class="contacts-classic">
                    <li><a href="mailTo:#">montealben@gmail.com</a></li>
                    <li><a href="mailTo:#">feedback@montealben.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <!-- RD Google Map-->

</section>
@endsection