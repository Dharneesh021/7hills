<?php include('header.php'); ?>

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
<!-- header-end -->

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
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+91 82960 00777</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="mailto:7hillsproperties@gmail.com"><span>7hillsproperty@gmail.com</span></a></li>
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
                    <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search-popup -->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex p-relative align-items-center vh-100" style="background-image:url('img/bg-5.jpg')">
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
                            <h2>Services</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Services</li>
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
    <!-- services-three-area -->
    <section class="services pt-110 pb-90 p-relative fix">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon4.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Residential Developments</a></h3>
                            <p>We create exceptional residential developments, ranging from apartments to luxury homes, focusing on innovative designs, premium materials, sustainable practices, and comfortable living solutions tailored to meet diverse housing requirements.</p>
                            <div class="number">01</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon5.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Commercial Development</a></h3>
                            <p>We provide end-to-end commercial development solutions, including office spaces, retail outlets, and industrial properties, designed to maximize functionality, aesthetics, and business growth with sustainable and modern construction practices.</p>
                            <div class="number">02</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon6.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Property Investor</a></h3>
                            <p>We assist property investors with expert guidance, market insights, profitable opportunities, risk assessments, financial planning, and tailored strategies to maximize returns and ensure long-term success in real estate investments.</p>
                            <div class="number">03</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon7.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Eco Friendly</a></h3>
                            <p>
                            We offer sustainable building solutions using eco-friendly materials, energy-efficient designs, renewable energy systems, waste-reduction strategies, and smart technologies that promote environmentally conscious and greener construction practices.</p>
                            <div class="number">04</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon8.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Best Security</a></h3>
                            <p>We provide advanced security systems, including surveillance, access control, monitoring, emergency response solutions, and integrated technology, ensuring comprehensive safety and peace of mind for all buildings and apartments.</p>
                            <div class="number">05</div>
                        </div>

                    </div>
                </div>
                <!-- New Construction/Building/Plot Related Service -->
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon-building.png" alt="img" style="width: 50px;height: 50px;">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Building & Construction</a></h3>
                            <p>We specialize in innovative building and construction services, delivering high-quality residential and commercial projects with modern designs, durable materials, skilled craftsmanship, efficient project management, and adherence to safety standards.</p>
                            <div class="number">06</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- testimonial-area-end -->
</main>
<!-- main-area-end -->
<!-- footer -->

<!-- main-area-end -->
<!-- footer -->

<?php include('footer.php'); ?>
