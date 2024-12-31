<?php include('header.php'); ?>


<style>
    <style>
      .breadcrumb-area {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh; /* Full viewport height */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.breadcrumb-area::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    opacity: 0.5; /* Adjust the dimming effect */
    z-index: 1; /* Ensures the overlay is above the background */
}
</style>
</style>
<!-- header-end -->
<!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>


    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-2" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.php">Home</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.php">About Us</a></li>
           
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.php">Projects</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.php">Blog</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-1" class="menu">
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="tel:+91 82960 00777"><span>+91 82960 00777</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
            href="mailto:7hillsproperty@gmail.com"><span>7hillsproperties@gmail.com</span></a></li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-end -->
<!-- main-area -->
<main>

    <!-- search-popup -->
    <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <div class="text-center">
                    <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                </div>
                <div class="row search-outer">
                    <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                    <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search-popup -->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center vh-100"
        style="background-image:url(img/banner3.jpg)">
        <!-- Lines -->
        <div class="content-lines-wrapper2">
            <div class="content-lines-inner2">
                <div class="content-lines2"></div>
            </div>
        </div>
        <!-- Lines -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Support</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Support</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- team-area -->
    <section id="support" class="support-area pt-20 pb-20">
    <div class="container fade-in">
        <div class="row justify-content-center">
            <div class="col-lg-10">
            <div class="section-title center-align mb-30 mt-30">
                    <h5 class="text-center"><b>SUPPORT</b></h5>
                </div>
                <div class="support-content">
                    <p class="text-muted">
                        Welcome to our support page. We are here to assist you with any inquiries, issues, or feedback you may have regarding our services. Please feel free to reach out to us through any of the following channels:
                    </p>
                    <ul class="premium-list">
                        <li>
                            <h3>1. Frequently Asked Questions (FAQs)</h3>
                            <p>
                                Visit our FAQ section to find quick answers to the most commonly asked questions. This is the fastest way to resolve minor issues or get detailed information about our services.
                            </p>
                        </li>
                        <li>
                            <h3>2. Contact Us</h3>
                            <p>
                                For personalized assistance, you can contact our support team via email or phone. We strive to respond to all inquiries within 24 hours.
                            </p>
                            <ul class="text-muted">
                                <li>Email: 7hillsproperties@gmail.com </li>
                                <li>Phone: +91 82960 00777</li>
                            </ul>
                        </li>
                        <li>
                            <h3>3. Live Chat</h3>
                            <p>
                                Connect with our support representatives in real-time using the live chat feature on our website. Available from 9:00 AM to 6:00 PM (Monday to Friday).
                            </p>
                        </li>
                        <li>
                            <h3>4. Technical Support</h3>
                            <p>
                                For technical issues, our dedicated technical support team is available to help troubleshoot and resolve problems quickly. Submit a ticket on our website, and our team will get back to you shortly.
                            </p>
                        </li>
                        <li>
                            <h3>5. Feedback</h3>
                            <p>
                                Your feedback is valuable to us. Share your suggestions, complaints, or experiences through our feedback form to help us improve our services.
                            </p>
                        </li>
                    </ul>
                    <p class="text-muted mt-4">
                        We are committed to providing excellent customer service and ensuring your experience with our platform is seamless. Thank you for choosing us!
                    </p>
                    <div class="contact-form mt-5">
                        <h3 class="section-title">Contact Us</h3>
                        <form action="/submit" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 

    <!-- team-area-end -->


</main>

<!-- main-area-end -->
<!-- footer -->





<?php include('footer.php'); ?>