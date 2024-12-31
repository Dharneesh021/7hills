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
        style="background-image:url(img/banner\ 2.jpg)">
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
                            <h2>FAQ</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">FAQ  </li>
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


<script>
    // Function to toggle the visibility of the answer when an accordion button is clicked
function toggleAnswer(id) {
    const answer = document.getElementById('answer-' + id);
    const accordion = document.querySelectorAll('.accordion')[id - 1];
    const icon = accordion.querySelector('.icon');
    
    // Toggle the active class for the accordion button
    accordion.classList.toggle('active');
    
    // Toggle the display of the answer (show/hide with animation)
    if (answer.style.display === "block") {
        answer.classList.remove('show');
        icon.style.transform = "rotate(0deg)"; // Reset icon rotation to 0
        setTimeout(function() {
            answer.style.display = "none";
        }, 300); // wait for transition before hiding
    } else {
        // Hide all answers before showing the clicked one
        const allAnswers = document.querySelectorAll('.answer');
        allAnswers.forEach(function (item) {
            item.classList.remove('show');
            item.style.display = "none";
        });
        
        // Reset all icons' rotation to 0
        const allIcons = document.querySelectorAll('.icon');
        allIcons.forEach(function (item) {
            item.style.transform = "rotate(0deg)";
        });

        answer.style.display = "block";
        setTimeout(function() {
            answer.classList.add('show');
        }, 10); // Slight delay to trigger CSS transition
        
        // Rotate the icon of the opened accordion
        icon.style.transform = "rotate(180deg)";
    }
}

</script>

<style>
   
/* FAQ Section Styles */
.faq-section {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 50px 20px;
}

.faq-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    width: 100%;

    border-radius: 12px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); /* Soft shadow for a professional look */
    padding: 30px;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.faq-left, .faq-right {
    width: 45%;
}

.faq-item {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 8px;
    border: 1px solid #ddd;
    overflow: hidden;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.05); /* Subtle shadow for each item */
    transition: transform 0.3s ease;
}

.faq-item:hover {
    transform: translateY(-5px); /* Elevate FAQ items on hover */
}

/* Accordion Button Styles */
.accordion {
    background-color: BurlyWood;
    color: black;
    font-size: 18px;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    cursor: pointer;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: background-color 0.3s ease;
}

.accordion:hover {
    background-color: #deb887; /* Slightly darker BurlyWood for hover effect */
}

/* Icon Styles */
.icon {
    font-size: 20px;
    transition: transform 0.3s ease;
}

/* Rotate icon when the section is open */
.accordion.active .icon {
    transform: rotate(180deg);
}


.icon {
    font-size: 20px;
    transition: transform 0.3s ease; /* Smooth transition for rotation */
}

/* Rotate icon when the section is open */
.accordion.active .icon {
    transform: rotate(180deg);
}
/* Answer Styles */
.answer {
    background-color: #c79e6a7a;
    padding: 20px;
    margin-top: 10px;
    border-top: 1px solid #ddd;
    display: none;
    border-radius: 0 0 8px 8px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.answer.show {
    display: block;
    opacity: 1;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .faq-container {
        flex-direction: column;
        align-items: center;
    }

    .faq-left, .faq-right {
        width: 90%;
    }
}

</style>
 

<section class="faq-section">
        <div class="faq-container">
            <div class="faq-left">
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(1)">
                        <span class="question-text">What is the 7Hills Courtyard project?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-1">
                        <p>7Hills Courtyard is a residential layout that offers amenities like 24/7 security, CCTV surveillance, children's play areas, and common areas. It is designed to be a secure and modern community.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(2)">
                        <span class="question-text">Where is the 7Hills Courtyard located?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-2">
                        <p>The project is located on a 60-feet main road and includes well-planned infrastructure for a peaceful living experience.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(3)">
                        <span class="question-text">What legal approvals does the project have?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-3">
                        <p>The project has received approvals from the relevant authorities including BIAAPA, BMRD, DC Conversion, and UD.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(4)">
                        <span class="question-text">Is there a water supply in the layout?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-4">
                        <p>Yes, the layout has its own borewell with certified potability testing, and there is also a Panchayat water facility available.</p>
                    </div>
                </div>
            </div>

            <div class="faq-right">
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(5)">
                        <span class="question-text"> What are the security features at 7Hills Courtyard?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-5">
                        <p>The community is gated with 24/7 security services. It also has CCTV monitoring surrounding the entire layout for added safety.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(6)">
                        <span class="question-text">Are there any parks or recreational areas in the layout?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-6">
                        <p>Yes, the layout includes a 3-sided park area, children's play area, seating areas, and a common area for community activities.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(7)">
                        <span class="question-text">What amenities are provided for residents' convenience?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-7">
                        <p>Apart from the parks and playgrounds, there is also a common area for social gatherings and relaxation, making it a comfortable and convenient place to live.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="accordion" onclick="toggleAnswer(8)">
                        <span class="question-text"> How is the environment around the 7Hills Courtyard?</span>
                        <span class="icon">↓</span>
                    </button>
                    <div class="answer" id="answer-8">
                        <p>The environment is secure, with well-maintained facilities, green spaces, and a peaceful living atmosphere that enhances the residents' quality of life.</p>
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