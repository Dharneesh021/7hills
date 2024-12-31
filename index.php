<?php include('header.php'); ?>
<!-- header-end -->






<style>
    .zoom-animation img {
        transition: transform 0.3s ease-in-out;
        /* Smooth transformation */
    }

    .zoom-animation:hover img {
        transform: scale(1.1);
        /* Zoom in on hover */
    }


    /* **********************Splash Animation************************** */
    /* Splash screen container */
    #splash {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: rgb(0, 0, 0);
        z-index: 9999;
        transition: transform 0.8s ease-out, opacity 0.8s ease-out;
    }

    /* Center image styling */
    #splash img {
        max-width: 50%;
        max-height: 20%;
        object-fit: contain;
        animation: heartbeat 2s ease-in-out infinite;
        /* Heartbeat animation */
    }

    /* Main content styling */
    #main-content {
        display: none;
    }

    /* Hidden splash styling */
    .fade-out {
        opacity: 0;
    }

    /* Heartbeat animation */
    @keyframes heartbeat {
        0% {
            transform: scale(1);
        }

        25% {
            transform: scale(1.1);
        }

        50% {
            transform: scale(1);
        }

        75% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Fade-in effect */
    .logo {
        opacity: 0;
        animation: fadeIn 3s ease-out forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @media (max-width: 768px) {
        .text {
            font-size: 25px;
        }

        /* #splash img{
        margin-bottom: 10%;
    } */
    }

    /* background video */
    /* General slider-area styling */
    .slider-area {

        position: relative;
        overflow: hidden;
    }

    .slider-area .image-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 70%;
        z-index: -1;
        /* Ensures the video is behind the content */
    }

    .slider-area video {
        width: 100%;
        height: 70%;
        object-fit: cover;
        /* Ensures the video fills the area without distortion */
    }

    .slider-content {
        position: relative;
        z-index: 2;
        /* Ensures the content is above the video */
        text-align: start;
        color: #fff;
        /* Adjust to your preference */
    }

    .slider-content h2 {
        font-size: 2.5rem;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .slider-content p {
        font-size: 1rem;
        margin-bottom: 30px;
        color: #eee;
    }

    .slider-btn a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff6f61;
        /* Change to your brand color */
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .slider-btn a:hover {
        background-color: #e6554f;
        /* Darker shade for hover */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .slider-content h2 {
            font-size: 1.8rem;
        }

        .slider-content p {
            font-size: 0.9rem;
        }
    }

    .slide_box p {
        padding-bottom: 0;
        margin-bottom: 0;
        font-size: 18px;
        font-weight: 300;
        white-space: nowrap;
    }

    @media screen and (min-width: 1901px) {

        .slide_box p {
            font-size: 32px !important;
        }
    }


    /*  <!-- slider-area-end --> */
    
    /* marq - tag spacings */
    /* Extra small devices (phones, less than 576px) */
    @media (max-width: 575.98px) {
        .marq-cont {
            margin-top: 30px;
        }
    }

    /* Small devices (tablets, 576px and up) */
    @media (min-width: 576px) and (max-width: 767.98px) {
        .marq-cont {
            margin-top: 30px;
        }
    }

    /* Medium devices (desktops, 768px and up) */
    @media (min-width: 768px) and (max-width: 991.98px) {
        .marq-cont {
            margin-top: 30px;
        }
    }

    /* Large devices (large desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199.98px) {
        .marq-cont {
            margin-top: 30px;
        }
    }

    /* Extra large devices (1200px and up) */
    @media (min-width: 1200px) {
        .marq-cont {
            margin-top: 30px;
        }
    }

     .bg-color {
            background-color: black;
        }

        /* <!-- Project status -->

<!-- services-three-area --> */


    /* Add base styles for the content */
    .content-fade-in {
        opacity: 0;
        transform: translateX(50px);
        /* Initially hidden off the right */
        transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    }

    /* Visible class will trigger the animation */
    .content-fade-in.visible {
        opacity: 1;
        transform: translateX(0);
        /* Content will come into view */
    }

    /* Make the layout responsive */
    @media (max-width: 992px) {
        .col-lg-6 {
            flex: 0 0 100%;
            /* Stacks columns on large screens */
            max-width: 100%;
        }

        .content-fade-in {
            transform: translateX(0);
            /* No animation for smaller screens */
            opacity: 1;
        }
    }

    /* For mobile screens */
    @media (max-width: 576px) {
        .content-fade-in {
            transform: translateX(0);
            /* Ensure content is aligned in mobile view */
            opacity: 1;
        }
    }

    /* <!-- testimonial animation --> */
   
   /* Animation styles for the testimonial section */
   .testimonial-area {
       opacity: 0;
       transform: translateY(30px);
       transition: all 0.8s ease-in-out;
   }

   .testimonial-area.visible {
       opacity: 1;
       transform: translateY(0);
   }


   /* Features */


           /* Global styles */
           .text-center {
            text-align: center;
            margin: 20px 0 30px;
            font-size: 1.8rem;
            color: #333;
        }

        /* Card container styles */
        .features-section {
            padding: 0 20px 50px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        /* Card styles */
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }

        .card.visible {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .icon {
            font-size: 2rem;
            color: burlywood;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            font-size: 1rem;
            color: #666;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .card-container {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        /* Animation Triggering */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

                /* images Gallery */

    


  .custom-gallery-container {
    padding: 40px 20px;
    text-align: center;
  }

  .custom-gallery-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 30px;
    color: #333;
  }

  .custom-gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 0;
  }

  .custom-gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .custom-gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .custom-gallery-item:hover img {
    transform: scale(1.1);
  }

  .custom-gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

/* Lightbox styles */
.custom-lightbox {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      visibility: hidden;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .custom-lightbox.active {
      visibility: visible;
      opacity: 1;
      z-index: 10;
    }

    .custom-lightbox img {
      max-width: 90%;
      max-height: 80%;
      border-radius: 10px;
    }

    .custom-lightbox .custom-close,
    .custom-lightbox .custom-nav {
      position: absolute;
      font-size: 2rem;
      color: white;
      cursor: pointer;
      background: transparent;
      border: none;
      outline: none;
    }

    .custom-lightbox .custom-close {
      top: 20px;
      right: 20px;
    }

    .custom-lightbox .custom-close:hover,
    .custom-lightbox .custom-nav:hover {
      color: #ff4444;
    }

    .custom-lightbox .custom-nav {
      top: 50%;
      transform: translateY(-50%);
    }

    .custom-lightbox .custom-prev {
      left: 20px;
    }

    .custom-lightbox .custom-next {
      right: 20px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .custom-gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      }
    }
  /* Responsive adjustments */
  @media (max-width: 768px) {
    .custom-gallery-grid {
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
  }

</style>
<!-- Splash screen -->
<div id="splash">
    <img src="img/logo/01.png" alt="Splash Screen Image">
</div>

<script>
 
</script>


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
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="mailto:7hillsproprty@gmail.com"><span>7hillsproperty@gmail.com</span></a></li>
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

    <!-- slider-area -->
    <section id="home" class="slider-area slider-four fix p-relative bg-color">
        <div class="slider-active">
            <div class="single-slider slider-bg d-flex align-items-center p-relative" style="margin-bottom:-250px;">
                <!-- Video Background -->
                <div class="image-layer">
                    <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
                        <source src="bg-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
  
    <!-- about-area -->

    <section id="about" class="about-area about-p fix marq-cont" style="padding: 10px 0 4px; color:#000;background-color:#ca8f41;margin-top:0;">
        <div class="slide_box">
            <marquee behavior="5" direction="Left">
                <p>7Hills properties providing the flexibility to design your dream home in a plotted development or enjoy the ready-to-move-in convenience of a villa.</p>
            </marquee>
        </div>

        </div>
        </div>
        </div>
    </section>
    <!-- about-area-end -->


    <!-- services-three-area -->
    <section class="services p-relative fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-relative">
                    <div class="section-title center-align text-center">
                        <h5><b>Customizable spaces and luxury living</b></h5>
                    </div>
                </div>
            </div>
            <div class="row services-active">
                <!-- Residential Construction -->
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon4.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Residential Construction</a></h3>
                            <p>At 7Hills Property, we specialize in building high-quality residential properties in Bangalore. From apartments to independent homes, we create spaces that meet the modern needs of homeowners with an emphasis on durability and comfort.</p>
                            <div class="number">01</div>
                        </div>
                    </div>
                </div>
                <!-- Commercial Construction -->
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon5.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Commercial Construction</a></h3>
                            <p>We offer top-notch commercial construction services, building state-of-the-art office buildings, retail centers, and industrial spaces in prime locations across Bangalore. Our projects focus on functionality and sustainability.</p>
                            <div class="number">02</div>
                        </div>
                    </div>
                </div>
                <!-- Property Development & Investment -->
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon6.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Property Development & Investment</a></h3>
                            <p>7Hills Property provides property development and investment services, guiding clients through the construction of lucrative real estate projects. We offer expert insights to maximize returns in Bangalore’s competitive market.</p>
                            <div class="number">03</div>
                        </div>
                    </div>
                </div>
                <!-- Infrastructure Development -->
                <div class="col-lg-4 col-md-4 bdr">
                    <div class="services-08-item">
                        <div class="services-08-thumb">
                            <img src="img/icon/se-icon5.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="services-detail.php">Infrastructure Development</a></h3>
                            <p>We also specialize in large-scale infrastructure projects, including roads, bridges, and public utilities. At 7Hills Courtyard, we focus on building sustainable and long-lasting infrastructure that serves the growing needs of Bangalore.</p>
                            <div class="number">04</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="services.php">
            <p style="text-align: center; font-size: 18px;">More details</p>
        </a>
    </section>

<!-- Project Status -->
    <section class="project">
        <div class="container">
            <div class="section-title mt-30 mb-30">
                <h5 class="text-center mt-30 mb-30 "><b>ONGOING PROJECTS</b></h5>
            </div>
            <div class="row" style="margin-right: 0; margin-left: 0;">
                <!-- Video Column -->
                <div class="col-lg-6">
                    <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit:cover;border-radius:20px;" class="pro-vid">
                        <source src="bg-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Content Column -->
                <div class="col-lg-6 mt-20 content-fade-in">
                    <h3><b>7Hills Courtyard</b></h3>

                    <!-- Top Row: Legal Documents and Layouts -->
                    <div class="row">
                        <div class="col-md-6 mt-20">
                            <h4 class="mb-10"><b>Legal Documents</b></h4>
                            <ul class="mt-10 custom-list">
                                <li> Documentation Submission for BIAAPA Meeting Approval</li>
                                <li> BMRD Approved</li>
                                <li> DC Conversion</li>
                                <li> UD Approved</li>
                                <a href="projects.php">More details</a>
                            </ul>
                        </div>
                        <div class="col-md-6 mt-20">
                            <h4 class="mb-10"><b>Layouts</b></h4>
                            <ul class="mt-10 custom-list">
                                <li> Project entrancing for 60 feet main road</li>
                                <li> Entrance arch and gated community with 24/7 security</li>
                                <li> CCTV monitoring surrounding the entire layout</li>
                               
                                <a href="projects.php">More details</a>
                            </ul>
                        </div>
                    </div>

                    <!-- Bottom Row: Water and Electricity -->
                    <div class="row mt-20">
                        <div class="col-md-6 mt-20">
                            <h4 class="mb-10"><b>Water</b></h4>
                            <ul class="mt-10 custom-list">
                                <li> Potability testing certified by authorized laboratory</li>
                                <li> Layouts have their own borewell with the volume of inches of water</li>
                                <li> Panchayat water facility</li>
                                <a href="projects.php">More details</a>
                            </ul>
                        </div>
                        <div class="col-md-6 mt-20">
                            <h4 class="mb-10"><b>Electricity</b></h4>
                            <ul class="mt-10 custom-list">
                                <li> Total of 501 kilo Vat(KV) for the entire layout</li>
                                <li> The line has to be installed straight from the main road</li>
                                <li> 2 No's of Transformers have been installed</li>
                                <a href="projects.php">More details</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

<!-- gallery-area -->
<div class="custom-gallery-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="section-title center-align text-center">
            <h5 class="text-center mt-30 mb-30"><b>Project Gallery</b></h5>
          </div>
        </div>
      </div>
   

    <div class="custom-gallery-grid">
      <!-- Gallery items -->
      <div class="custom-gallery-item" data-image="img/7Hills-img/IMG_4068.jpg">
        <img src="img/7Hills-img/IMG_4068.jpg" alt="Project 1">
      </div>
      <div class="custom-gallery-item" data-image="img/7Hills-img/IMG_4007.jpg">
        <img src="img/7Hills-img/IMG_4007.jpg" alt="Project 2">
      </div>
      <div class="custom-gallery-item" data-image="img/7Hills-img/IMG_4088.jpg">
        <img src="img/7Hills-img/IMG_4088.jpg" alt="Project 3">
      </div>
      <div class="custom-gallery-item" data-image="img/7Hills-img/DSC00972.jpg">
        <img src="img/7Hills-img/DSC00972.jpg" alt="Project 4">
      </div>
      <div class="custom-gallery-item" data-image="img/7Hills-img/DSC00939.jpg">
        <img src="img/7Hills-img/DSC00939.jpg" alt="Project 5">
      </div>
      <div class="custom-gallery-item" data-image="img/7hills/Picture30.jpg">
        <img src="img/7hills/Picture30.jpg" alt="Project 6">
      </div>
    </div>
  </div>

<!-- Lightbox -->
<div class="custom-lightbox" id="custom-lightbox">
    <button class="custom-close" id="custom-closeLightbox">&times;</button>
    <button class="custom-nav custom-prev" id="custom-prev">&larr;</button>
    <img id="custom-lightboxImage" src="" alt="Full View">
    <button class="custom-nav custom-next" id="custom-next">&rarr;</button>
  </div>
  </div>
    <!-- gallery-area-end -->


    <section class="features-section">
        <div class="section-title center-align mb-50">
            <h5 class="text-center"><b>Amazingly Convenient</b></h5>
        </div>
        <div class="card-container">
            <!-- Card 1 -->
            <div class="card" id="card1">
                <i class="icon fas fa-road"></i>
                <h3>Best Connectivity</h3>
                <p>Wide roads and metro for seamless travel.</p>
            </div>
            <!-- Card 2 -->
            <div class="card" id="card2">
                <i class="icon fas fa-plane"></i>
                <h3>Proximity to Airport</h3>
                <p>1.5 kms to Kempegowda Intl. Airport.</p>
            </div>
            <!-- Card 3 -->
            <div class="card" id="card3">
                <i class="icon fas fa-bus"></i>
                <h3>Public Transport</h3>
                <p>5 minutes to the bus stop and taxi stand.</p>
            </div>
            <!-- Card 4 -->
            <div class="card" id="card4">
                <i class="icon fas fa-map-marker-alt"></i>
                <h3>Close Proximity</h3>
                <p>Devanahalli, Hebbal, Hennur, and more.</p>
            </div>
            <!-- Card 5 -->
            <div class="card" id="card5">
                <i class="icon fas fa-hospital"></i>
                <h3>Hospitals Nearby</h3>
                <p>Aster, Manipal, Motherhood, and others.</p>
            </div>
            <!-- Card 6 -->
            <div class="card" id="card6">
                <i class="icon fas fa-school"></i>
                <h3>Top Schools</h3>
                <p>Vidyaniketan, NPS, DPS, and more.</p>
            </div>
        </div>
        <a href="projects.php">
            <p style="text-align: center; font-size: 18px; margin-top: 20px;">More details</p>
        </a>
    </section>



    <!-- blog-area -->

    <section id="blog" class="blog-area p-relative fix">
        <div class="container">
            <div class="section-title center-align mb-50">
                <h5 class="text-center"><b>Our Blog</b></h5>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title center-align mb-50">
                        <h2>Latest News Feed</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title center-align text-right">
                        <a href="blog.php">View All Blog</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-lg-6 col-md-12">
                    <div class="single-post2 mb-15">
                        <div class="blog-thumb2 zoom-animation">
                            <a href="blog-details.php"><img src="img/news1.jpg" alt="img"></a>
                        </div>
                        <div class="blog-content2">
                            <div class="b-meta">
                                <div class="meta-info">
                                    <ul>
                                        <li><i class="fal fa-user"></i> Admin</li>
                                        <li><i class="fal fa-calendar-alt"></i> 24th March 2024</li>
                                    </ul>
                                </div>
                            </div>
                            <h4><a href="blog-details.php">5 Key Trends in Bangalore’s Real Estate Market</a></h4>
                            <p>Explore the latest trends in the real estate market in Bangalore. From rising demand for luxury properties to new residential developments, we highlight the key factors driving the market in 2024.</p>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-6 col-md-12">
                    <div class="single-post2 mb-15">
                        <div class="blog-thumb2 zoom-animation">
                            <a href="blog-details.php"><img src="img/news7.jpg" alt="img"></a>
                        </div>
                        <div class="blog-content2">
                            <div class="b-meta">
                                <div class="meta-info">
                                    <ul>
                                        <li><i class="fal fa-user"></i> Admin</li>
                                        <li><i class="fal fa-calendar-alt"></i> 18th March 2024</li>
                                    </ul>
                                </div>
                            </div>
                            <h4><a href="blog-details.php">The Importance of Quality Construction in Real Estate</a></h4>
                            <p>Quality construction is at the heart of every successful real estate project. In this blog, we discuss the importance of ensuring strong foundations, the latest construction technology, and how it impacts property value.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- blog-area-end -->

<!-- Testimonal Area -->

    <section class="testimonial-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-align mb-20 text-center">
                        <h5><b>Feedback</b></h5>
                        <h6><b>Our Testimonials</b></h6>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="testimonial-active">
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonials01.webp" style="height:100px;width:100px;border-radius:50%;" alt="img">
                                <div class="ta-info">
                                    <h6>Ravi Kumar</h6>
                                    <span>Software Engineer</span>
                                </div>
                            </div>
                            <p>“7Hills Courtyard made my dream home a reality. Their attention to detail and commitment to quality made all the difference. I’m extremely happy with the residential property they developed in Bangalore.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonial3.jpg" style="height:100px;width:100px; border-radius:50%" alt="img">
                                <div class="ta-info">
                                    <h6>Ayesha Sharma</h6>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                            <p>“The commercial space we built with 7Hills Courtyard has been a game-changer for our business. The project was completed on time, and the quality exceeded our expectations. I highly recommend them for any commercial development.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonial03.jpg" style="height:100px;width:100px; border-radius:50%; ;" alt="img" alt="img">
                                <div class="ta-info">
                                    <h6>Ajay Reddy</h6>
                                    <span>Investor</span>
                                </div>
                            </div>
                            <p>“I invested in multiple projects with 7Hills Courtyard, and I’ve seen significant returns. Their knowledge of the Bangalore market and their commitment to quality construction makes them my go-to choice for property investment.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonial4.avif" style="height:100px;width:100px; border-radius:50%;" alt="img">
                                <div class="ta-info">
                                    <h6>Priya Desai</h6>
                                    <span>Architect</span>
                                </div>
                            </div>
                            <p>“I had the pleasure of working with 7Hills Courtyard on several residential projects. Their team is professional, and their focus on quality and innovative design is evident in every project they undertake.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- testimonial-area-end -->



    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        // ******************Heart Beat logo**************

           // Wait for 5 seconds, then fade out the splash screen
    window.addEventListener('load', () => {
        setTimeout(() => {
            const splash = document.getElementById('splash');

            // Add fade-out effect
            splash.classList.add('fade-out');

            // Show main content after animation
            splash.addEventListener('transitionend', () => {
                splash.style.display = 'none';
                document.getElementById('main-content');
            });
        }, 2000);
    });

    // ***********<!-- testimonial-area -->***********

    document.addEventListener("DOMContentLoaded", () => {
    const testimonialSection = document.querySelector(".testimonial-area");
    const testimonials = document.querySelectorAll(".single-testimonial");
    let currentIndex = 0;

    // Function to change the testimonial every 3 seconds
    function changeTestimonial() {
        testimonials.forEach(testimonial => {
            testimonial.style.display = 'block'; // Hide all testimonials
        });

        testimonials[currentIndex].style.display = 'block'; // Show current testimonial

        currentIndex = (currentIndex + 1) % testimonials.length; // Move to the next testimonial
    }

    // Intersection Observer for visibility of the testimonial section
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                testimonialSection.classList.add("visible");

                // Start auto-sliding testimonials when the section is in view
                changeTestimonial(); // Show the first testimonial when it becomes visible
                setInterval(changeTestimonial, 3000); // Slide every 3 seconds
            }
        });
    }, {
        threshold: 0.1
    });

    observer.observe(testimonialSection);
});


// ****************Project Status**************

document.addEventListener("DOMContentLoaded", function() {
                // Select the content section (col-lg-6 for the content)
                const contentSection = document.querySelector(".col-lg-6.mt-20");

                // Create an Intersection Observer
                const observer = new IntersectionObserver(function(entries, observer) {
                    // When the section is in view
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Add the 'visible' class to trigger the animation
                            contentSection.classList.add("visible");
                            observer.unobserve(entry.target); // Stop observing after the animation
                        }
                    });
                }, {
                    threshold: 0.5
                }); // Trigger when 50% of the section is in the viewport

                // Start observing the section
                observer.observe(contentSection);
            });

            // ********Features************
                    // Add visibility when scrolling into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.2
        });

        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });


        // gallery page

    const lightbox = document.getElementById('custom-lightbox');
    const lightboxImage = document.getElementById('custom-lightboxImage');
    const closeLightbox = document.getElementById('custom-closeLightbox');
    const prevButton = document.getElementById('custom-prev');
    const nextButton = document.getElementById('custom-next');
    const galleryItems = Array.from(document.querySelectorAll('.custom-gallery-item'));
    let currentIndex = 0;

    const openLightbox = (index) => {
      currentIndex = index;
      lightboxImage.src = galleryItems[currentIndex].getAttribute('data-image');
      lightbox.classList.add('active');
    };

    const closeLightboxHandler = () => {
      lightbox.classList.remove('active');
    };

    const showNextImage = () => {
      currentIndex = (currentIndex + 1) % galleryItems.length;
      openLightbox(currentIndex);
    };

    const showPrevImage = () => {
      currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
      openLightbox(currentIndex);
    };

    galleryItems.forEach((item, index) => {
      item.addEventListener('click', () => openLightbox(index));
    });

    closeLightbox.addEventListener('click', closeLightboxHandler);
    nextButton.addEventListener('click', showNextImage);
    prevButton.addEventListener('click', showPrevImage);

    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) closeLightboxHandler();
    });


        // Load FontAwesome for icons
        const fontAwesome = document.createElement('link');
        fontAwesome.rel = 'stylesheet';
        fontAwesome.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
        document.head.appendChild(fontAwesome);

//************************ */ Whatsapp button****************

        var wa_btnSetting = {
            "btnColor": "#16BE45",
            "ctaText": "WhatsApp",
            "cornerRadius": 40,
            "marginBottom": 20,
            "marginLeft": 20,
            "marginRight": 20,
            "btnPosition": "left",
            "whatsAppNumber": "918296000777",
            "welcomeMessage": "Hello",
            "zIndex": 999999,
            "btnColorScheme": "light"
        };
        window.onload = () => {
            _waEmbed(wa_btnSetting);
        };
    </script>


   

</main>
<!-- main-area-end -->
<?php include('footer.php'); ?>