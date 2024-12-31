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

  .section {
    padding: 20px;
    text-align: center;
  }

  .section1 {
    padding: 20px;
    margin: 10px;
    height: 70%;
    width: 100%;
    text-align: center;
  }

  .section1 img {
    padding: 20px;
    height: 270px;
    width: 100%;
  }


  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 10px;
  }

  .gallery-grid img {
    width: 100%;
    border-radius: 10px;
  }

  .video-container1 {
    padding: 40px;
    display: flex;

  }

  .video-container {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
  }

  .video-container iframe {
    width: 100%;
    height: 315px;
  }

  .responsive-img {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    display: block;
  }


  /* GALLERY SECTION */
  /* images Gallery */
  .custom-gallery-container {
    text-align: center;
    margin-top: 30px;
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
    z-index: 100;
  }

  .custom-lightbox.active {
    visibility: visible;
    opacity: 1;
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

  /* Carousel Gallery */


  /* Locations */
  .location-section {
    background-color: #f9f9f9;
    padding: 10px;
    margin-top: 30px;
  }

  .heading-container {
    text-align: center;
    margin-bottom: 20px;
  }

  .heading-container h2 {
    color: #bc986b;
    font-size: 24px;
  }

  .heading-container p {
    color: #555;
    font-size: 16px;
  }

  .content-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
  }

  .map-container {
    flex: 1 1 50%;
    max-width: 48%;
    margin-right: 2%;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
  }

  .content1 {
    flex: 1 1 50%;
    margin-bottom: -50px;
  }

  .neighbourhood {
    margin-top: 20px;
  }

  .neighbourhood-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    text-transform: capitalize;
    font-weight: bold;
  }

  .neighbourhood h3 {
    color: #000000;
    margin: 0;
  }

  .accordion {
    background-color: #bc986b;
    ;
    color: rgb(0, 0, 0);
    cursor: pointer;
    padding: 10px 15px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    transition: background-color 0.3s, transform 0.3s;
    margin-bottom: 5px;
    border-radius: 4px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .accordion:hover {
    background-color: rgb(202, 143, 65);
  }

  .accordion i {
    transition: transform 0.3s ease;
  }

  .accordion.active i {
    transform: rotate(180deg);
    /* Rotate the icon */
  }

  .panel {
    padding: 0 15px;
    display: none;
    background-color: #f1f1f1;
    overflow: hidden;
    margin-bottom: 10px;
    border-left: 2px solid #6a0dad;
  }

  .panel ul {
    list-style: none;
    padding: 10px 0 0 15px;
    margin: 0;
  }

  .panel li {
    margin: 5px 0;
    color: #333;
  }

  .view-btn {
    background-color: #bc986b;
    color: white;
    border: none;
    padding: 8px 16px;
    cursor: pointer;
    border-radius: 4px;
    font-size: 14px;
  }

  .view-btn:hover {
    background-color: #ca8f41;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .content-container {
      flex-direction: column;
    }

    .map-container {
      max-width: 100%;
      margin: 0 0 20px 0;
    }

    .map-container iframe {
      height: 250px;
    }

    .neighbourhood-header {
      flex-direction: column;
      align-items: flex-start;
    }

    .view-btn {
      margin-top: 10px;
      align-self: flex-end;
    }
  }

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

  /* PROJECT SECTION-1  */

  .menu-section-project-menu-section {
    background-color: #f8f8f8;
    padding: 10px 0;
    border: 1px solid #ddd;
  }

  .menu-row-project-menu-section .menu-item-project-menu-section {
    background-color: #fff;
    border: 1px solid #bc986b;
    color: rgb(0, 0, 0);
    margin: 5px;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .menu-row-project-menu-section .menu-item-project-menu-section:hover {
    background-color: #bc986b;
    color: #fff;
  }


  .submenu-content-project-menu-section {
    display: none;
  }

  .submenu-content-project-menu-section.active {
    display: block;
  }

  .submenu-project-menu-section {
    margin: 20px 0;
  }

  .submenu-item-project-menu-section {
    background-color: #fff;
    border: 1px solid #bc986b;
    color: rgb(0, 0, 0);
    margin: 5px;
    font-size: 14px;
    transition: all 0.3s ease;
  }

  .submenu-item-project-menu-section:hover {
    background-color: #bc986b;
    color: #fff;
  }

  .submenu-detail-project-menu-section {
    margin: 10px 0;
    display: none;
  }

  .submenu-detail-project-menu-section.active {
    display: block;
  }

  img {
    max-width: 100%;
    height: auto;
    /* border: 1px solid #ddd; */
    border-radius: 5px;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .menu-row-project-menu-section {
      flex-direction: row;
      justify-content: space-evenly;
    }

    .menu-row-project-menu-section .menu-item-project-menu-section {
      font-size: 14px;
      padding: 10px 20px;
      width: auto;
      margin-bottom: 10px;
    }

    .submenu-item-project-menu-section {
      font-size: 12px;
      width: auto;
      margin-bottom: 5px;
    }

    .content-section-project-menu-section {
      padding: 10px;
    }

    .submenu-content-project-menu-section {
      display: none;
    }

    .submenu-content-project-menu-section.active {
      display: block;
    }

    .menu-item-project-menu-section.active+.submenu-content-project-menu-section {
      display: block;
    }

    .submenu-project-menu-section {
      display: flex;
      justify-content: space-evenly;
      flex-wrap: nowrap;
      gap: 10px;
    }
  }

  .project-btn {
    padding: 10px 10px !important;
    background-color: #ddd;
    /* Initial background color */
    color: rgb(0, 0, 0);
    /* Text color using the color palette */
    border: 2px solid #bc986b;
    /* Border color using the color palette */
    border-radius: 4px;
    /* Optional: smooth corners */
    cursor: pointer;
    text-align: center;

    transition: all 0.3s ease;
    /* Smooth transition for hover effects */

    border: none;

    display: inline-block;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1;
    margin-bottom: 0;
    text-align: center;
    text-transform: unset;
    touch-action: manipulation;
    transition: all 0.3s ease 0s;
    white-space: nowrap;
  }

  .project-btn:hover {
    background-color: #bc986b;
    /* Change background to color palette on hover */
    color: white;
    /* Change text color to white on hover */
  }


  .project-main-btn {
    background-color: #ddd;
    /* Initial background color */
    color: rgb(0, 0, 0);
    /* Text color using the color palette */
    border: 2px solid #bc986b;
    /* Border color using the color palette */
    border-radius: 4px;
    /* Optional: smooth corners */
    cursor: pointer;
    text-align: center;
    transition: all 0.3s ease;
    /* Smooth transition for hover effects */
    border: none;
    padding: 20px 45px;
    display: inline-block;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1;
    margin-bottom: 0;
    text-align: center;
    text-transform: unset;
    touch-action: manipulation;
    transition: all 0.3s ease 0s;
    white-space: nowrap;
  }

  .project-main-btn {
    background-color: #bc986b;
    /* Change background to color palette on hover */
    color: white;
    /* Change text color to white on hover */
  }

  .project-btn.active {
    background-color: #bc986b;
    /* Active background color */
    color: white;
    /* Active text color */
    border-color: #bc986b;
    /* Keep border consistent with the active state */
  }

  .project-main-btn.active {
    background-color: #bc986b;
    /* Active background color */
    color: white;
    /* Active text color */
    border-color: #bc986b;
    /* Keep border consistent with the active state */
  }

  /* CSS FOR ICON IN ONGOING PROJECTS */
  .custom-list-project-menu-section {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .custom-list-project-menu-section li {
    font-size: 16px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
  }

  .star-icon {
    color: #bc986b;
    /* Custom color */
    margin-right: 10px;
    /* Space between icon and text */
    font-size: 18px;
    /* Adjust size */
  }

  /* CSSF FOR ONGOING PROJECT HEADINGS */
  .ongoing-project-1 {
    color: #bc986b;
  }


  /* CSS FOR CARD CONTAINER */
  /* Global styles */
  .text-center {
    text-align: center;
    margin: 20px 0 30px;
    font-size: 1.8rem;
    color: #333;
  }

  /* Card container styles */
  .features-section {
    padding: 0 20px 0px;
    /* margin-top: 30px; */
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




  /* MASTER PLAN CONTAINER */
  .table-section {
    margin-bottom: 20px;
  }

  .table {
    margin-bottom: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    border: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .table thead th {
    background-color: #bc986b;
    color: white;
    text-align: center;
    border: 1px solid #d4af7f;
  }

  .table tbody tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
  }

  .table tbody td {
    text-align: center;
    padding: 12px;
    border: 1px solid #ddd;
  }

  .table tbody tr:nth-child(even) {
    background-color: #f7f7f7;
  }

  .table tbody tr:nth-child(odd) {
    background-color: #ffffff;
  }

  /* Image styling */
  .image-section img {
    width: 100%;
    height: auto;
    border: 3px solid #bc986b;
    border-radius: 8px;
  }

  /* Mobile view adjustments */
  @media (max-width: 768px) {
    .image-section img {
      aspect-ratio: 3 / 4;
      /* 2:3 ratio on mobile */
      height: auto;
    }

    /* Adjust the rounded image section size for mobile */
    .rounded-image-section {
      padding-top: 100%;
      /* Default 1:1 Aspect Ratio */
      /* margin-bottom: -100px !important; */
    }

    .rounded-image-section img {
      border-radius: 50%;
      /* Circular images */
      object-fit: cover;
      max-width: 80%;
      /* Make sure images fit inside the container */
      margin: 0 auto;
    }

    /* Stack the images vertically on small screens */
    .round-img .col-md-4 {
      max-width: 100%;
      flex: 0 0 100%;
      /* Make the columns take full width */
      margin-bottom: 15px;
      /* Add some space between images */
    }

    .rounded-image-section img {
      position: absolute;
      top: 0;
      left: 30px !important;
      width: 80% !important;
      height: 80% !important;
      border-radius: 50%;
      /* Circular images */
      object-fit: cover;
    }
  }

  @media (min-width: 768px) {
    .content {
      display: flex;
      justify-content: space-between;
    }


  }

  /* New Image Section */
  .embed-responsive-16by9 {
    position: relative;
    height: 0;
    padding-bottom: 56.25%;
    /* 16:9 Aspect Ratio */
    overflow: hidden;
    max-width: 100%;
  }

  .embed-responsive-16by9 img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Ensures the image covers the container */
  }

  /* New Rounded Image Section */
  .rounded-image-section {
    position: relative;
    width: 100%;
    padding-top: 100%;
    /* 1:1 Aspect Ratio */
    margin-bottom: -70px;
  }

  .rounded-image-section img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    /* Circular images */
    object-fit: cover;
  }

  /* bullet points */
  /* Custom list styling */
  .custom-list {
    list-style: none;
    /* Remove default bullet points */
    padding: 0;
    /* Remove extra padding */
    margin: 0;
  }

  .custom-list li {
    position: relative;
    padding-left: 25px;
    /* Space for the symbol */
    margin-bottom: 10px;
    font-size: 16px;
    line-height: 1.5;
  }

  /* Custom ✦ star symbol */
  .custom-list li::before {
    content: "✦";
    /* Second star symbol */
    color: burlywood;
    /* Orange-red color for the star */
    position: absolute;
    left: 0;
    /* Position to the left of the text */
    top: 0;
    font-size: 18px;
    /* Slightly larger than text */
    font-weight: bold;
  }


  .faq-container {
    width: 90%;
    /* Set width to 90% */
    max-width: 1200px;
    /* Optional: add a max width for larger screens */
    margin: 30px auto;

    background-color: #fff;
    /* padding: 20px; */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  @media (min-width: 1025px) and (max-width: 1440px) {
    .faq-container {
      margin-top: -50px;
    }
  }


  .faq-title {
    text-align: center;
    color: #333;
    font-size: 2rem;
    margin-bottom: 20px;
  }

  .faq-item {
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .faq-header {
    background-color: #f1f1f1;
    cursor: pointer;
    padding: 15px;
    font-size: 1.2rem;
    font-weight: bold;
    text-align: left;
    border: none;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .faq-header:hover {
    background-color: #f0f0f0;
  }

  .faq-header i {
    font-size: 1.5rem;
    transition: transform 0.3s ease;
  }

  .faq-header.active {
    background-color: burlywood;
    color: #333;
  }

  .faq-body {
    padding: 15px;
    background-color: #f9f9f9;
    display: none;
    font-size: 1rem;
    color: #555;
  }

  .faq-body.show {
    display: block;
  }

  /* Optional: Add transition for accordion opening and closing */
  .faq-body {
    transition: max-height 0.3s ease-out;
    max-height: 0;
    overflow: hidden;
  }

  .faq-body.show {
    max-height: 500px;
    /* Set a max-height for smooth transition */
  }

  .faq-accordion{
    margin: 0 10px 0 10px;
    padding-bottom: 10px;
  }

  .faq-header.active-faq {
    background-color: #bc986b;
    color: white;
    /* Optional: Adjust text color for better contrast */
    transition: background-color 0.3s ease;
  }
</style>
<style>
  /* CSS FOR GGOGLE REV AND FAQ HEADING TEXT */
  @media(max-width:786px) {
    .google-rev {
      margin-top: 0px;
    }

  }

  @media (min-width: 786px) and (max-width: 1800px) {
    .google-rev {
      margin-top: 100px;
    }

  }
</style>
<style>
  /* Map */
  .iframe-section {
    height: 400px;
  }


  /* TABEL 01 */
  @media(max-width:786px) {
    .table01 {
      margin-left: -40px;
    }

  }
</style>
<!-- header-end -->
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
      <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.php">Projects</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.php">Blog</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.php">Contact</a></li>
    </ul>
  </div>

  <div id="cssmenu2" class="menu-one-page-menu-container">
    <ul id="menu-one-page-menu-1" class="menu">
      <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="tel:+91 82960 00777"><span>+91 82960 00777</span></a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="mailto:7hillsproperty@gmail.com"><span>7hillsproperty@gmail.com</span></a></li>
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



  <style>
    .breadcrumb-area {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100vh;
      /* Full viewport height */
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
      opacity: 0.5;
      /* Adjust the dimming effect */
      z-index: 1;
      /* Ensures the overlay is above the background */
    }

    .breadcrumb-area h1 {
      position: relative;
      z-index: 2;
      /* Ensures the text appears above the overlay */
      color: white;
      /* Makes the text visible against the dimmed background */
    }

    /* STYLE FOR REVIEW CARDS */

    .review-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
      margin: 10px;
      flex: 0 0 30%;
    }

    .stars {
      color: #FFD700;
      font-size: 16px;
      margin-top: 5px;
    }

    .profile-img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }

    .review-content {
      font-size: 14px;
      color: #555;
      margin-top: 10px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #000;
      border-radius: 50%;
    }

    .carousel-indicators li {
      background-color: #000;
    }

    .carousel-indicators {
      bottom: auto !important;
    }

    @media (max-width: 768px) {
      .review-card {
        flex: 0 0 100%;
      }
    }
  </style>

  <!-- breadcrumb-area -->
  <section class="breadcrumb-area d-flex  p-relative align-items-center vh-100 w-100" style="background-image:url('img/portfolio/banner-1.jpg'); background-position: center;">
    <!-- Lines -->
    <!-- <div class="content-lines-wrapper2">
                    <div class="content-lines-inner2">
                        <div class="content-lines2"></div>
                    </div>
                </div> -->
    <!-- Lines -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12">
          <div class="breadcrumb-wrap text-left">
            <div class="breadcrumb-title">
              <h2>Projects</h2>
              <div class="breadcrumb-wrap">

                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project</li>

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
  <!-- Project status -->

  <!-- services-three-area -->


  <section class="projexts-section01">
    <div class="container-fluid">
      <div class="row">
        <!-- Menu Section -->
        <div class="col-12 menu-section-project-menu-section mt-3">
          <div class="d-flex justify-content-center flex-wrap menu-row-project-menu-section">
            <button class="project-main-btn menu-item-project-menu-section active" data-target="submenu1-project-menu-section">Ongoing Projects</button>
            <button class="project-main-btn menu-item-project-menu-section" data-target="submenu2-project-menu-section">Completed Projects</button>
            <button class="project-main-btn menu-item-project-menu-section" data-target="submenu3-project-menu-section">Upcoming Projects</button>
          </div>
        </div>


      </div>

      <!-- Content Section -->
      <div class="row content-section-project-menu-section">
        <!-- Ongoing Projects Submenu -->
        <div id="submenu1-project-menu-section" class="col-12 submenu-content-project-menu-section active">
          <h4 style="display: flex;justify-content:center" class="mt-4">Ongoing Projects</h4>
          <div class="submenu-project-menu-section" style="display: flex;justify-content:center">
            <button class=" project-btn submenu-item-project-menu-section active" data-target="submenu1-1-project-menu-section" style="padding: 20px;">7Hills Courtyard</button>
            <button class=" project-btn submenu-item-project-menu-section" data-target="submenu1-2-project-menu-section">Project 2</button>
            <button class=" project-btn submenu-item-project-menu-section" data-target="submenu1-3-project-menu-section">Project 3</button>
          </div>
          <div id="submenu1-1-project-menu-section" class="submenu-detail-project-menu-section active">
            <div id="ongoing-projects-eg-section-project-project-menu-section" class="project-eg-section-project-project-menu-section active">
              <div class="row" style="margin-right: 0; margin-left: 0;">
                <!-- Video Column -->
                <div class="col-lg-6">
                  <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit:cover;border-radius: 15px;" class="pro-vid-project-menu-section">
                    <source src="bg-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col-lg-6 mt-20 content-fade-in-project-menu-section">
                  <h3><b>7Hills Courtyard</b></h3>



                  <!-- Top Row: Legal Documents and Layouts -->
                  <div class="row">
                    <div class="col-md-6 mt-20">
                      <h4 class="mb-10 ongoing-project-1"><b>Legal Documents</b></h4>
                      <ul class="mt-10 custom-list-project-menu-section">
                        <li><span class="star-icon">&#10022;</span> Documentation Submission for BIAAPA Meeting Approval</li>
                        <li><span class="star-icon">&#10022;</span> BMRD Approved</li>
                        <li><span class="star-icon">&#10022;</span> DC Conversion</li>
                        <li><span class="star-icon">&#10022;</span> UD Approved</li>
                      </ul>


                    </div>
                    <div class="col-md-6 mt-20">
                      <h4 class="mb-10 ongoing-project-1"><b>Layouts</b></h4>
                      <ul class="mt-10 custom-list-project-menu-section">
                        <li><span class="star-icon">&#10022;</span> Project entrancing for 60 feet main road</li>
                        <li> <span class="star-icon">&#10022;</span> Entrance arch and gated community with 24/7 security</li>
                        <li><span class="star-icon">&#10022;</span> CCTV monitoring surrounding the entire layout</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Bottom Row: Water and Electricity -->
                  <div class="row mt-20">
                    <div class="col-md-6 mt-20">
                      <h4 class="mb-10 ongoing-project-1"><b>Water</b></h4>
                      <ul class="mt-10 custom-list-project-menu-section">
                        <li><span class="star-icon">&#10022;</span> Potability testing certified by authorized laboratory</li>
                        <li><span class="star-icon">&#10022;</span> Layouts have their own borewell with the volume of inches of water</li>
                        <li><span class="star-icon">&#10022;</span> Panchayat water facility</li>
                      </ul>
                    </div>
                    <div class="col-md-6 mt-20">
                      <h4 class="mb-10 ongoing-project-1"><b>Electricity</b></h4>
                      <ul class="mt-10 custom-list-project-menu-section">
                        <li><span class="star-icon">&#10022;</span> Total of 501 kilo Vat(KV) for the entire layout</li>
                        <li><span class="star-icon">&#10022;</span> The line has to be installed straight from the main road</li>
                        <li><span class="star-icon">&#10022;</span> 2 No's of Transformers have been installed</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- FEATURE SECTION -->
            <section class="features-section" id="features">
              <div class="section-title center-align mb-30 mt-30">
                <h5 class="text-center mt-5"><b>Amazingly Convenient</b></h5>
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
                <!-- Card 7 -->
                <div class="card" id="card7">
                  <i class="icon fas fa-hotel"></i>
                  <h3>Hospitality</h3>
                  <p>Hilton, Taj, Courtyard, Hyatt, and others.</p>
                </div>
                <!-- Card 8 -->
                <div class="card" id="card8">
                  <i class="icon fas fa-city"></i>
                  <h3>Business Hubs</h3>
                  <p>KIADB SEZ, Aerospace Park, and Financial District.</p>
                </div>
              </div>
            </section>

            <!-- gallery-area -->

            <section class="gallery-section">

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

            </section>

            <!-- gallery-area-end -->




            <!-- MASTER PLAN SECTION -->

            <section class="Master-plan">

              <div class="section-title center-align mb-30 mt-30">
                <h5 class="text-center mt-5 mb-5"><b>Master Plan</b></h5>
              </div>

              <div>
                <div class="row content">
                  <!-- Left Section: Tables -->
                  <div class="table-section col-sm-12 col-md-6">
                    <!-- First Table -->
                    <div class="table01">
                      <div class="container">
                        <table class="table table-bordered table-striped table-hover table-sm">
                          <thead>
                            <tr>
                              <th>SL. No.</th>
                              <th>Land Use</th>
                              <th>Area Sq m</th>
                              <th>Percentage</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Residential</td>
                              <td>10,489.34</td>
                              <td>54.93%</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Parks & OS</td>
                              <td>1,910.86</td>
                              <td>10.01%</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>CA</td>
                              <td>957.40</td>
                              <td>5.01%</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Roads</td>
                              <td>5,738.24</td>
                              <td>30.05%</td>
                            </tr>
                            <tr>
                              <td colspan="2"><strong>TOTAL</strong></td>
                              <td><strong>19,095.84</strong></td>
                              <td><strong>100%</strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <!-- Second Table -->
                    <table class="table table-bordered table-striped table-hover table-sm">
                      <thead>
                        <tr>
                          <th>Dimensions</th>
                          <th>No. of Sites</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>30' x 40'</td>
                          <td>53</td>
                        </tr>
                        <tr>
                          <td>Odd</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td class="text-danger"><strong>TOTAL</strong></td>
                          <td class="text-danger"><strong>93</strong></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- New Image Section below the second table -->
                    <div class="row">
                      <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                          <img src="img/table-7hills.jpg" alt="16:9 Image" class="img-fluid border border-warning" />
                        </div>
                      </div>
                    </div>

                    <!-- New Rounded Image Section below the left-side image section -->
                    <div class="round-img">
                      <div class="row mt-4">
                        <div class="col-md-4">
                          <div class="rounded-image-section ">
                            <img src="img/table-approval1.jpg" alt="Rounded Image 1" class="img-fluid " />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="rounded-image-section">
                            <img src="img/table-approval2.jpg" alt="Rounded Image 2" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="rounded-image-section">
                            <img src="img/table-approval3.jpg" alt="Rounded Image 3" class="img-fluid" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Left Section: Image -->
                  <div class="image-section col-sm-12 col-md-6">
                    <img src="img/img (1).jpeg.jpg" alt="Placeholder Image" />
                  </div>
                </div>
              </div>
            </section>

            <!-- Locations -->

            <section id="location" class="location-section">
              <div class="container-fluid mb-30">
                <!-- Top Heading Section -->
                <div class="heading-container">
                  <h2 class="mb-30 mt-30"><b>LOCATIONS</b></h2>
                  <p>
                    From serene surroundings to convenient access to essential amenities, ensuring a harmonious blend
                    of comfort and convenience right at your doorstep.
                  </p>
                </div>

                <div class="content-container">
                  <!-- Map Section -->
                  <div class="map-container">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4691.333150781469!2d77.74829497170916!3d13.185965356853826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0303fa080353%3A0x30bc6f447f7201ca!2s7Hills%20Courtyard!5e0!3m2!1sen!2sin!4v1735557750452!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>

                  <!-- Content Section -->
                  <div class="content1">
                    <div class="neighbourhood">
                      <div class="neighbourhood-header">
                        <h3>know Your Neighbourhood</h3>
                        <button class="view-btn">View More</button>
                      </div>
                      <button class="accordion">
                        Educational Institutions
                        <i class="fas fa-chevron-down"></i>
                      </button>
                      <div class="panel">
                        <ul>
                          <li>School 1</li>
                          <li>College 1</li>
                          <li>University 1</li>
                        </ul>
                      </div>

                      <button class="accordion">
                        Hospitals
                        <i class="fas fa-chevron-down"></i>
                      </button>
                      <div class="panel">
                        <ul>
                          <li>Hospital 1</li>
                          <li>Clinic 1</li>
                          <li>Health Center 1</li>
                        </ul>
                      </div>

                      <button class="accordion">
                        Shopping
                        <i class="fas fa-chevron-down"></i>
                      </button>
                      <div class="panel">
                        <ul>
                          <li>Mall 1</li>
                          <li>Market 1</li>
                          <li>Supermarket 1</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>



            <!-- GOOGLE REVIEW SECTION -->

            <section class="google-review">


              <div class="container my-5">
                <div class="section-title center-align mb-30 mt-30">
                  <h5 class="text-center"><b>Google Reviews</b></h5>
                </div>
                <div id="reviewCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="d-flex flex-wrap justify-content-center">
                        <div class="review-card">
                          <img src="img/testimonial/testimonial03.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">Harish Kumar S</h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">"What really stood out was their attention to detail and commitment to making sure everything was completed on time and without any issues. Their excellent communication made the entire experience stress-free and enjoyable. I appreciate their dedication and support throughout this journey. Thank you, Mr. Jagdish and Ramya, for your outstanding service."</p>
                        </div>
                        <div class="review-card d-none d-md-block">
                          <img src="img/testimonial/testimonial3.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">DiviyaDhasini S</h5>
                          <div class="stars">★★★★☆</div>
                          <p class="review-content">"BIAAPA approved, RERA registered. After 2 months of search I finally booked the plot in 7 hills courtyard and I see a good growth and this project is located 1km from the main road and all servey numbers are of general property. The quality of the materials are good and developers has plans to construct the villa's as well and proposed club house."</p>
                        </div>
                        <div class="review-card d-none d-md-block">
                          <img src="img/testimonial/testimonial03.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">Shiva Nooka</h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">"Excellent Location with Promising Development Potential I recently purchased 2 villa plot in 7hills courtyard and am pleased with the decision. The location is ideal, situated in a rapidly developing area with easy access to major highways, airport and lot of companies."</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex flex-wrap justify-content-center">
                        <div class="review-card">
                          <img src="img/testimonial/testimonial3.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">Radha S Beri</h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">“7Hills Courtyard Villa project is a prime choice for both living & investment. BIAPPA approved & just 1 km from the International Airport back gate, it offers exceptional convenience.I’ve been investing in projects with Mr. Jagadish since 2018, and he is truly exceptional. His genuine and honest approach distinguishes him from anyone else I’ve encountered in the industry.”</p>
                        </div>
                        <div class="review-card d-none d-md-block">
                          <img src="img/testimonial/testimonial3.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">Megha</h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">"Absolutely the best plots in Bengaluru. We are grateful we came across 7hills courtyard. They are truly experts at what they do… best quality of plots also the materials what they have used in order to maintain the structure of pipelines, manholes, a proper STP & the underground water sump."</p>
                        </div>
                        <div class="review-card d-none d-md-block">
                          <img src="img/testimonial/testimonial03.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">Shiva Shankar</h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">"Well developed project. At right time, At right location, Apt for investment, Lucrative business idea and ROI. Clear title deeds, Ramya had been very responsive answering all the questions and providing clarifications to all the queries."</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex flex-wrap justify-content-center">
                        <div class="review-card">
                          <img src="img/testimonial/testimonial03.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">ALEMERI</h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">Well planned residential plots in Future Bengaluru. Quality wise trust me there is no compromise. It’s absolutely worth investing. Thanks and I appreciate the assistance from the team</p>
                        </div>
                        <div class="review-card d-none d-md-block">
                          <img src="img/testimonial/testimonial03.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">Kaluri kishore</h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">I have purchased a villa site along with my friend.. it’s really good investment as it is located near to new SAP, cricket academy, airport backgate, and STRR etc,. Also would like to appreciate Mr.Jagadeesh sir on his passion and dedication towards delivering commitment and his vision..
                          </p>
                        </div>
                        <div class="review-card d-none d-md-block">
                          <img src="img/testimonial/testimonial3.jpg" alt="Profile Picture" class="profile-img">
                          <h5 class="mt-2">Priyadarshini S
                          </h5>
                          <div class="stars">★★★★★</div>
                          <p class="review-content">BIAAPA approved, RERA registered. After 2 months of search I finally booked the plot in 7 hills courtyard and I see a good growth and this project is located 1km from the main road and all servey numbers are of general property.
                            The quality of the materials are good and developers has plans to construct the villa's as well and proposed club house.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <ol class="carousel-indicators">
                    <li data-target="#reviewCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#reviewCarousel" data-slide-to="1"></li>
                    <li data-target="#reviewCarousel" data-slide-to="2"></li>
                  </ol>
                </div>
              </div>


            </section>
          </div>
          <div id="submenu1-2-project-menu-section" class="submenu-detail-project-menu-section">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-2 UnAvailable...❌</h1>
          </div>
          <div id="submenu1-3-project-menu-section" class="submenu-detail-project-menu-section">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-3 UnAvailable...❌</h1>
          </div>
        </div>

        <!-- Completed Projects Submenu -->
        <div id="submenu2-project-menu-section" class="col-12 submenu-content-project-menu-section">
          <h4 style="display: flex;justify-content:center" class="mt-4">Completed Projects</h4>
          <div class="submenu-project-menu-section" style="display: flex;justify-content:center">
            <button class=" project-btn submenu-item-project-menu-section active" data-target="submenu2-1-project-menu-section">Project 1</button>
            <button class="project-btn submenu-item-project-menu-section" data-target="submenu2-2-project-menu-section">Project 2</button>
            <button class="project-btn submenu-item-project-menu-section" data-target="submenu2-3-project-menu-section">Project 3</button>
          </div>
          <div id="submenu2-1-project-menu-section" class="submenu-detail-project-menu-section active">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-1 UnAvailable...❌</h1>
          </div>
          <div id="submenu2-2-project-menu-section" class="submenu-detail-project-menu-section">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-2 UnAvailable...❌</h1>
          </div>
          <div id="submenu2-3-project-menu-section" class="submenu-detail-project-menu-section">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-3 UnAvailable...❌</h1>
          </div>
        </div>

        <!-- Upcoming Projects Submenu -->
        <div id="submenu3-project-menu-section" class="col-12 submenu-content-project-menu-section">
          <h4 style="display: flex;justify-content:center" class="mt-4">Upcoming Projects</h4>
          <div class="submenu-project-menu-section" style="display: flex;justify-content:center">
            <button class="project-btn submenu-item-project-menu-section active" data-target="submenu3-1-project-menu-section">Project 1</button>
            <button class="project-btn submenu-item-project-menu-section" data-target="submenu3-2-project-menu-section">Project 2</button>
            <button class="project-btn submenu-item-project-menu-section" data-target="submenu3-3-project-menu-section">Project 3</button>
          </div>
          <div id="submenu3-1-project-menu-section" class="submenu-detail-project-menu-section active">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-1 UnAvailable...❌</h1>
          </div>
          <div id="submenu3-2-project-menu-section" class="submenu-detail-project-menu-section">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-2 UnAvailable...❌</h1>
          </div>
          <div id="submenu3-3-project-menu-section" class="submenu-detail-project-menu-section">
            <h1 class="text-danger m-5 fs-6  fw-bold" style="text-align: center;">Project-3 UnAvailable...❌</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->

  <section class="FAQ-SECTION">

    <div class="faq-container">
      <div class="section-title center-align mb-30 mt-30">
        <h5 class="text-center faq-text mt-5"><b>Frequently Asked Questions</b></h5>
      </div>
      <div class="faq-accordion">
        <!-- FAQ Item 1 -->
        <div class="faq-item">
          <button class="faq-header">
            What types of properties does 7Hills Properties offer?
            <i class="fas fa-plus"></i>
          </button>
          <div class="faq-body">
            We offer a range of properties, including residential plots, commercial spaces, mixed-use layouts, and investment opportunities in rapidly growing areas.
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item">
          <button class="faq-header">
            Do you provide amenities in your layouts?
            <i class="fas fa-plus"></i>
          </button>
          <div class="faq-body">
            Yes, our layouts often include amenities such as:
            <ol>
              <li>A clubhouse with facilities like a table tennis room, aerobics room, a co-working space, badminton court, gym, pantry, kid’s play area and many more.</li>
              <li>24/7 security, Wide roads and Proper drainage systems.</li>
            </ol>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item">
          <button class="faq-header">
            Can I resell the property in the future?
            <i class="fas fa-plus"></i>
          </button>
          <div class="faq-body">
            Yes, all properties purchased through us come with clear titles, making resale a straightforward process.
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
          <button class="faq-header">
            Where are your properties located?
            <i class="fas fa-plus"></i>
          </button>
          <div class="faq-body">
            Our properties are located in prime and developing areas across Bangalore and nearby cities, with easy access to transportation, schools, and hospitals.
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
          <button class="faq-header">
            Are the properties approved by local authorities??
            <i class="fas fa-plus"></i>
          </button>
          <div class="faq-body">
            Yes, all our properties are approved by the relevant local authorities such as BIAAPA, BMRDA, and UD. We ensure all legal documentation is complete and transparent.
          </div>
        </div>
      </div>
    </div>
  </section>



</main>
<!-- main-area-end -->
<!-- footer -->



<script>
  //JS FOR MENU IN PROJECT SECTION

  document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.menu-item-eg-section-project');
    const sections = document.querySelectorAll('.project-eg-section-project');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const targetId = tab.id.split('-tab-')[0] + '-projects-eg-section-project';

        sections.forEach(section => section.classList.remove('active'));
        document.getElementById(targetId).classList.add('active');

        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        tab.scrollIntoView({
          behavior: 'smooth',
          block: 'nearest',
          inline: 'center'
        });
      });
    });
  });

  // ANIMATION FOR TEXT IN PROJECT MENU 1

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
  document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.menu-item-project-menu-section');
    const submenuContents = document.querySelectorAll('.submenu-content-project-menu-section');
    const submenuItems = document.querySelectorAll('.submenu-item-project-menu-section');
    const submenuDetails = document.querySelectorAll('.submenu-detail-project-menu-section');

    // Function to reset all menus and show the default submenu
    function resetMenus() {
      submenuContents.forEach(content => content.classList.remove('active'));
      menuItems.forEach(item => item.classList.remove('active'));
      submenuItems.forEach(item => item.classList.remove('active'));
      submenuDetails.forEach(detail => detail.classList.remove('active'));
    }

    // Show the first submenu by default when no menu is selected
    if (!document.querySelector('.submenu-content-project-menu-section.active')) {
      submenuContents[0].classList.add('active');
      menuItems[0].classList.add('active');
      document.querySelectorAll('.submenu-item-project-menu-section')[0].classList.add('active');
      document.querySelectorAll('.submenu-detail-project-menu-section')[0].classList.add('active');
    }

    // Menu item toggle
    menuItems.forEach(menu => {
      menu.addEventListener('click', () => {
        resetMenus();

        // Add active class to the clicked menu item
        menu.classList.add('active');

        const target = menu.dataset.target;
        const targetSubmenus = document.querySelector(`#${target}`).querySelectorAll('.submenu-item-project-menu-section');

        // Show the target submenu
        document.getElementById(target).classList.add('active');

        // Show the first submenu of the target menu
        targetSubmenus[0].classList.add('active');
        document.getElementById(targetSubmenus[0].dataset.target).classList.add('active');
      });
    });

    // Submenu item toggle
    submenuItems.forEach(item => {
      item.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent the click from propagating to the menu

        const target = item.dataset.target;
        const submenuDetail = document.getElementById(target);

        // If the submenu detail is already active, do not toggle it off
        if (!submenuDetail.classList.contains('active')) {
          // Close all other submenu details
          const activeSubmenus = document.querySelectorAll('.submenu-detail-project-menu-section.active');
          activeSubmenus.forEach(submenu => submenu.classList.remove('active'));

          submenuDetail.classList.add('active');
        }

        // Set the clicked submenu item as active
        submenuItems.forEach(submenu => submenu.classList.remove('active'));
        item.classList.add('active');
      });
    });
  });

  function setActive(button) {
    // Remove active class from all buttons
    const buttons = document.querySelectorAll('.project-btn');
    buttons.forEach(btn => btn.classList.remove('active'));

    // Add active class to the clicked button
    button.classList.add('active');
  }

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


  // end project

  // Accordion functionality
  const accordions = document.querySelectorAll('.accordion');

  accordions.forEach((accordion) => {
    accordion.addEventListener('click', () => {
      // Close all panels
      accordions.forEach((otherAccordion) => {
        if (otherAccordion !== accordion) {
          otherAccordion.classList.remove('active');
          otherAccordion.nextElementSibling.style.display = 'none';
        }
      });

      // Toggle current panel
      accordion.classList.toggle('active');
      const panel = accordion.nextElementSibling;
      panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
    });
  });


  // FAQ
  // Get all FAQ headers
  const faqHeaders = document.querySelectorAll('.faq-header');

  // Add click event listener to each FAQ header
  faqHeaders.forEach(header => {
    header.addEventListener('click', function() {
      // Close all other FAQ bodies and remove active class
      faqHeaders.forEach(otherHeader => {
        const otherBody = otherHeader.nextElementSibling;
        const otherIcon = otherHeader.querySelector('i');

        if (otherHeader !== this) {
          otherBody.classList.remove('show');
          otherIcon.classList.remove('fa-minus');
          otherIcon.classList.add('fa-plus');
          otherHeader.classList.remove('active-faq'); // Remove active class
        }
      });

      // Toggle the current FAQ body
      const body = this.nextElementSibling;
      const icon = this.querySelector('i');

      if (body.classList.contains('show')) {
        body.classList.remove('show');
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
        this.classList.remove('active-faq'); // Remove active class
      } else {
        body.classList.add('show');
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
        this.classList.add('active-faq'); // Add active class
      }
    });
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
</script>



<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>

<!-- SCRIPT FOR GOOGLE REVIEWS -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<?php include('footer.php'); ?>