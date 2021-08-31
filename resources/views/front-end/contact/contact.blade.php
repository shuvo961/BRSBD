@extends('front-end.master')

@section('body')

    <section class="w3l-contact-breadcrum">
        <div class="breadcrum-bg">
            <div class="container py-5">
                <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>
                <h2 class="my-3">Contact Us</h2>

                <p>If you face any kind of problem fell free to contact us.
                    Or you can submit your problem in the form below</p>
            </div>
    </section>
    <!-- contact -->
    <section class="w3l-contacts-12" id="contact">
        <div class="contact-top pt-5">
            <div class="container py-md-3">

                <div class="row cont-main-top">

                    <!-- contact address -->
                    <div class="contact col-lg-4">
                        <div class="cont-subs">
                            <div class="cont-add">

                                <div class="cont-add-rgt">
                                    <h4>Address:</h4>
                                    <p class="contact-text-sub">PO Box 1200, Dhaka ,Bangladesh</p>
                                </div>
                                <div class="cont-add-lft">
                                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="cont-add add-2">

                                <div class="cont-add-rgt">
                                    <h4>Email:</h4>
                                    <a href="mailto:info@example.com">
                                        <p class="contact-text-sub">contact@infinty.com</p>
                                    </a>
                                </div>
                                <div class="cont-add-lft">
                                    <span class="fa fa-envelope" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="cont-add">

                                <div class="cont-add-rgt">
                                    <h4>Phone:</h4>
                                    <a href="tel:+7-800-999-800">
                                        <p class="contact-text-sub">+880-195-3544-911</p>
                                    </a>
                                </div>
                                <div class="cont-add-lft">
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="cont-add add-3">

                                <div class="cont-add-rgt">
                                    <h4>Find Us On</h4>
                                    <div class="main-social-1 mt-2">
                                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                        <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="cont-add-lft">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //contact address -->
                    <!-- contact form -->
                    <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">

                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="main-input">
                            <div class="top-inputs d-grid">
                                <input type="text" placeholder="Name" name="w3lName" id="w3lName" required="">
                                <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                            </div>
                            <input type="text" placeholder="Phone Number" name="w3lName" id="w3lName" required="">
                            <textarea placeholder="Message" name="w3lMessage" id="w3lMessage" required=""></textarea>
                            <div class="text-right">
                                <button type="submit" class="btn btn-theme2">Submit Now</button>
                            </div>
                        </form>
                    </div>
                    <!-- //contact form -->
                </div>
            </div>
            <!-- map -->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8223908687!2d90.27923710646985!3d23.780887457084543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1600182287418!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- //map -->
        </div>
    </section>
    <!-- //contact -->
@endsection
