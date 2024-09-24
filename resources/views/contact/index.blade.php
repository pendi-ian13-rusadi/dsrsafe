@extends('layouts/app')
@section("main")
<main id="main" class="main">
    <div class="pagetitle">
        <h1>CONTACT</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">CONTACT</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

        <div class="row gy-4">

            <div class="col-xl-6">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box card" style="text-align: center">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Our Address</h3>
                            <p>Gedung 50 Kawasan PUSPIPTEK Serpong Tangerang Selatan 15310 INDONESIA</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card" style="text-align: center">
                            <i class="bi bi-telephone"></i>
                            <h3>CALL US</h3>
                            <p>(04) 298 3985 2092</p>
                            <P>+76 209 1092 4095</P>
                            <P>info@mollysrestaurant.com</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card" style="text-align: center">
                            <i class="bi bi-envelope"></i>
                            <h3>EMAIL US</h3>
                            <p>info@example.com</p>
                            <P>contact@example.com</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card"  style="text-align: center">
                            <i class="bi bi-clock"></i>
                            <h3>OPEN HOURS</h3>
                            <p>Monday - Friday</p>
                            <P>9:00AM - 05:00PM</P>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-6">
                <div class="card p-4">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>

</main><!-- End #main -->
@endsection