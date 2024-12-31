<?php include('header.php'); ?>


<style>
    .zoom-animation img {
        transition: transform 0.3s ease-in-out;
        /* Smooth transformation */
    }

    .zoom-animation:hover img {
        transform: scale(1.1);
        /* Zoom in on hover */
    }

    p {
        color: black ;
    }

    li {
        color: black !important;

    }

    .aboutus-cont {
        margin-top: 10px;
    }
</style>

<!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <!-- <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                                <input type="text" name="s" id="search" value="" placeholder="Search"  />
                                <button><i class="fa fa-search"></i></button>
                            </form> -->


    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-2" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.php">Home</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.php">About Us</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.php">Projects</a> </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.php">Blog</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-1" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="tel:+91 82960 00777"><span>+91 82960 00777</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                    href="mailto:7hillsproperty@gmail.com"><span>7hillsproperty@gmail.com</span></a></li>
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
    <section class="breadcrumb-area d-flex  p-relative align-items-center vh-100 w-100"
        style="background-image: url('img/About/img19.jpg');background-position: center; background-repeat: no-repeat;">
        <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>About Us</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>

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

    <!-- about-area -->
    <div class="col-lg-12 pt-30 ">


        <div class="section-title">
            <h5 class="text-center aboutus-cont"><b>About Us</b></h5>
        </div>
    </div>
    <section id="about" class="about-area about-p pb-30 p-relative fix">
        <div class="container" style="margin-bottom:-50px ;">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="img/7hills/Picture36.jpg" alt="img" style="height:580px; border-radius: 15px; margin-bottom:20px">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-content3 mb-25">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="green text-color">
                                        <li>At 7Hills Courtyard <strong>by 7Hills Properties</strong>, we’re committed
                                            to delivering premium residential, commercial, and retail spaces, always focused on quality and innovation.</li>
                                        <li>The company is dedicated to
                                            developing only properties with clear, litigationfree
                                            titles, ensuring that each project is
                                            thoroughly vetted by our experienced legal
                                            team. Additionally, this team ensures that every
                                            project complies with all necessary approvals
                                            from urban development authorities before
                                            construction begins.</li>
                                        
                                        <li>Our projects are strategically located in prime areas, ensuring easy access to essential amenities and transportation hubs, making life more convenient for our residents.</li>
                                      
                                        <li>Our dedicated team of professionals—including
                                            architects, civil and structural engineers, and
                                            landscape specialists—takes responsibility for
                                            creating optimizing
                                            resources, and ensuring that each project is
                                            delivered on time</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-gallery" style="margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-md-4 zoom-animation">
                                <img src="img/7Hills-img/IMG_4068.jpg" alt="img" style="border-radius: 15px;">
                            </div>
                            <div class="col-md-4 zoom-animation">
                                <img src="img/7Hills-img/IMG_4031.jpg" alt="img" style="border-radius: 15px;">
                            </div>
                            <div class="col-md-4 zoom-animation himg">
                                <img src="img/7Hills-img/DSC00795.jpg" alt="img" style="border-radius: 15px; height:115px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Progress -->


    <style>
        .work-progr-cont {
            margin-top: 5px;
        }
    </style>


    <section id="image-gallery" class="image-gallery">
        <div class="container ">
            <div class="section-title pt-30">
                <h5 class="text-center work-progr-cont"><b>Work Progress</b></h5>
            </div>
            <div class="gallery-grid">
                <!-- Image 1 -->
                <div class="gallery-item">
                    <img src="img/7hills/Picture9.jpg" alt="Image 1">
                </div>
                <!-- Image 2 -->
                <div class="gallery-item">
                    <img src="img/7hills/img-ab.jpeg" alt="Image 2">
                </div>
                <!-- Image 3 -->
                <div class="gallery-item">
                    <img src="img/7hills/Picture25.jpg" alt="Image 3">
                </div>
                <!-- Image 4 -->
                <div class="gallery-item">
                    <img src="img/7hills/Picture23.jpg" alt="Image 4">
                </div>
            </div>
            <div class="section-title pt-30"></div>
            <p class="section-text-1">At 7hills properties, we specialize in transforming raw land into exceptional living and working spaces. We create meticulously planned residential, commercial, and mixed-use properties that blend innovation with functionality. From prime plots of land to fully constructed homes, we focus on delivering high-quality, sustainable developments that cater to the diverse needs of our clients. Whether it’s a custom-built home, a modern office complex, or a vibrant community space, we make sure every project reflects our commitment to quality, design, and long-term value.</p>
        </div>
        </div>
    </section>




    <!-- Mission and Vission  -->

    <style>
        /* animation for the misison vission image */

        .image-section {
            position: relative;
            overflow: hidden;
        }

        .image-section img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            animation: fadeInOut 6s ease-in-out infinite;

        }

        @keyframes fadeInOut {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }
        }

        /* animation for the text in mission vission  */
        .text-section {
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .text-section.visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>


    <script>
        // Trigger fade-in when the element comes into view
        window.addEventListener('scroll', function() {
            var section = document.querySelector('.text-section');
            var rect = section.getBoundingClientRect();

            if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                section.classList.add('visible');
            }
        });
    </script>

<div class="section-title">
            <h5 class="text-center aboutus-cont"><b>Mission And Vision</b></h5>
        </div>
    <div class="container-1">
        <div class="image-section1 wow fadeInLeft animated">
            <img src="img/img-abt.png" alt="Left Image">
        </div>
        <div class="text-section">
            <h4 style="margin-left:-6px;"><b>Mission</b></h4>
            <p class="text-1">To create exceptional living, working, and recreational spaces that prioritize quality, sustainability,
                and innovation. We aim to consistently meet and exceed customer expectations through transparent
                processes, ethical practices, and a commitment to enhancing lifestyles. By fostering trust and building
                strong relationships, we strive to contribute positively to communities and the environment while
                delivering value to all stakeholders.</p>
            <h4 style="margin-left:-6px;"><b>Vision</b></h4>
            <p class="text-1">To be a globally recognized leader in the real estate industry, known for developing world-class
                residential, commercial, and mixed-use properties. Our vision is to shape the future of urban living by
                integrating cutting-edge design, advanced technology, and sustainable practices. We aspire to set new
                benchmarks in quality, customer satisfaction, and societal impact, creating enduring value for
                generations to come.</p>
        </div>
    </div>





    <!-- about-area-end -->
    <!-- video-area -->

    <section id="video" class="video-area pt-8  p-relative"
        style=" background-repeat: no-repeat; background-position: center bottom; background-size:cover;">
        <!-- Lines -->
        <!-- <div class="content-lines-wrapper2">
                                <div class="content-lines-inner2">
                                    <div class="content-lines2"></div>
                                </div>
                            </div> -->
        <!-- Lines -->
        <div class="container">
            <section class="video-container">
                <div class="section-title ">
                    <h5 class="text-center"><b>Promo Video</b></h5>
                </div>
                <video controls style="border-radius: 20px;">
                    <source src="bg-video.mp4" type="video/mp4" >
                    Your browser does not support the video tag.
                </video>
            </section>
        </div>
    </section>
   


    <style>
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
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const testimonialSection = document.querySelector(".testimonial-area");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        testimonialSection.classList.add("visible");
                    }
                });
            }, {
                threshold: 0.1
            });

            observer.observe(testimonialSection);
        });
    </script>

    <section class="testimonial-area pt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pt-30">
                        <h5 class="text-center"><b>our testimonial</b></h5>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="testimonial-active">
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonials01.webp"
                                    style="height:100px;width:100px;border-radius:50%;" alt="img">
                                <div class="ta-info">
                                    <h6>Ravi Kumar</h6>
                                    <span>Software Engineer</span>
                                </div>
                            </div>
                            <p>“7Hills Courtyard made my dream home a reality. Their attention to detail and commitment
                                to quality made all the difference. I’m extremely happy with the residential property
                                they developed in Bangalore.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonial3.jpg"
                                    style="height:100px;width:100px; border-radius:50%" alt="img">
                                <div class="ta-info">
                                    <h6>Ayesha Sharma</h6>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                            <p>“The commercial space we built with 7Hills Courtyard has been a game-changer for our
                                business. The project was completed on time, and the quality exceeded our expectations.
                                I highly recommend them for any commercial development.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonial03.jpg"
                                    style="height:100px;width:100px; border-radius:50%; ;" alt="img" alt="img">
                                <div class="ta-info">
                                    <h6>Ajay Reddy</h6>
                                    <span>Investor</span>
                                </div>
                            </div>
                            <p>“I invested in multiple projects with 7Hills Courtyard, and I’ve seen significant
                                returns. Their knowledge of the Bangalore market and their commitment to quality
                                construction makes them my go-to choice for property investment.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="img/testimonial/testimonial4.avif"
                                    style="height:100px;width:100px; border-radius:50%;" alt="img">
                                <div class="ta-info">
                                    <h6>Priya Desai</h6>
                                    <span>Architect</span>
                                </div>
                            </div>
                            <p>“I had the pleasure of working with 7Hills Courtyard on several residential projects.
                                Their team is professional, and their focus on quality and innovative design is evident
                                in every project they undertake.”</p>
                            <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- team-area-end -->

</main>
<!-- main-area-end -->
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
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

<?php include('footer.php'); ?>

<?php
$pic = "img/about1.jpg";
?>