@extends('layouts/master')
@section('content')






   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area inc-shape content-less">
        <div id="bootcarousel" class="carousel text-light text-large slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/background-img.png);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Good doctor, Healthy life</h4>
                                            <h2 data-animation="animated slideInRight">Meet the <strong>Best Doctors</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/background-img.png);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Best institution, Good services</h4>
                                            <h2 data-animation="animated slideInRight">Meet the <strong>Best Hospital</strong></h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->




    {{-- start of the details section --}}


    {{-- <div class="helpInfo-details">
        <div class="col-md-12 col-lg-12 col-xl-12 d-none d-md-block">
            <div class="d-flex justify-content-between">
                <div class="media helpInfo">11111</div>
                <div class="media helpInfo">222</div>
                <div class="media helpInfo">333</div>
            </div>
        </div>
    </div> --}}





    {{-- End of the details section --}}


    <!-- Start Top Entry
    ============================================= -->
    <div class="top-entry-area relative default-padding text-center">
        <div class="container">
            <div class="item-box">
                <div class="row align-center">
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="fas fa-tooth"></i>
                            {{-- <i class="fas fa-ambulance"></i> --}}
                            <h4>Caring</h4>
                            <p>
                                We will be respectful, friendly, helpful, and compassionate to our patients, staff, and team members.                            <ul>
                                <li>
                                    <span>Phone</span>
                                    <p>(+987)98765432</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="thumb">
                            <img src="assets/assets/img/den-1.png" alt="Thumb">
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="fas fa-ribbon"></i>
                            <h4>Excellence</h4>
                            <p>
                                We will strive for excellence in all surgical procedures, hospital duties, education programs, and community activities.

                            </p>
                            <ul>
                                <li>
                                    <span>Phone</span>
                                    <p>(+987)98765432</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Entry -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding bg-gray relative">

         <!-- Shape -->
        <div class="shape-left-top shape">
            <img src="assets/assets/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row">

                <div class="col-lg-6 thumb">
                    <div class="thumb-box">
                        <img src="assets/assets/img/den-2.jpg" alt="Thumb">
                        <div class="intro-video">
                            <div class="video">
                                <a href="https://www.youtube.com/watch?v=5vY-D42NFP4" class="popup-youtube relative theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="content">
                                <h5>Let’s see our intro video</h5>
                                <p>
                                    If your smile is not becoming to you, then you should be coming.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <h5>Has been working since 2000</h5>
                    <h2>The <strong>Ultimate Equipment</strong> To Give You The Best Of <strong>Treatments</strong>.</h2>
                    <p>
                        We value our customers and appreciate hearing how we can improve and better support you. If you have any question or want to make an appointment, do not hesitate to contact us!


                    </p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Online Appoinment</a></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-drugs"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Health Queries</a></h5>
                            </div>
                        </li>
                    </ul>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Make Appoinment</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End About -->




{{-- ------------------start of services section ------------------------ --}}
<section class="services-section">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-c741274 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c741274" data-element_type="section">
 
       

<div class="rt-el-title section-heading heading-dark text-center heading-layout1 style1 theme3">		
        <h2 class="rtin-title">Our Expert Procedures</h2>
</div>


<section class="elementor-section elementor-inner-section elementor-element elementor-element-7d988bb8 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7d988bb8" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">

            <div class="container">
                <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="elementor-widget-container">
                            <a href="https://skyfallblue1.com/Argyle/our-procedures/wisdom-tooth-removal/">
                    <div class="eael-infobox">
                    <div class="infobox-icon">
                    
                                <img decoding="async" src="https://skyfallblue1.com/Argyle/wp-content/uploads/2023/07/Icon-1-1.png" alt="">
                    
                    </div>
                    <div class="infobox-content">
                                <h4 class="title">Wisdom Tooth Removal</h4>
                                                                      <p><p>Wisdom teeth commonly become impacted, affecting the health of adjacent teeth and requiring removal.</p></p>                                                      </div>
                    </div>
                        </a>
                    </div>
                    </div>
                </div>



                <div class="col-md-3">
                    <div class="card">
                        <div class="elementor-widget-container">
                            <a href="https://skyfallblue1.com/Argyle/our-procedures/dental-implant/">
                    <div class="eael-infobox">
                    <div class="infobox-icon">
                    
                                <img decoding="async" src="https://skyfallblue1.com/Argyle/wp-content/uploads/2023/07/icon-2.png" alt="">
                    
                    
                    
                    </div>
                    <div class="infobox-content">
                                <h4 class="title">Dental Implant Surgery</h4>
                                                                            <p><p>Dental implants are often an alternative to dentures or bridgework when those don’t work well with a patient.</p></p>
                                                                                </div>
                    </div>
                    
                        </a>
                    </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card">
                        <div class="elementor-widget-container">
                            <a href="https://skyfallblue1.com/Argyle/our-procedures/bone-grafting/">
                    <div class="eael-infobox">
                    <div class="infobox-icon">
                    
                                <img decoding="async" src="https://skyfallblue1.com/Argyle/wp-content/uploads/2023/07/icon-3.png" alt="">
                    
                    
                    
                    </div>
                    <div class="infobox-content">
                                <h4 class="title">Bone Grafting Service</h4>
                                                                            <p><p>Teeth do more than help you chew and smile. With bone grafting, we can increase the volume of your jawbone</p></p>
                                                                                </div>
                    </div>
                    
                        </a>
                    </div>
                    </div>
                </div>



                <div class="col-md-3">
                    <div class="card">
                        <div class="elementor-widget-container">
                            <a href="https://skyfallblue1.com/Argyle/our-procedures/corrective-jaw-surgery/">
                    <div class="eael-infobox">
                    <div class="infobox-icon">
                    
                                <img decoding="async" src="https://skyfallblue1.com/Argyle/wp-content/uploads/2023/07/icon-4.png" alt="">
                    
                    
                    
                    </div>
                    <div class="infobox-content">
                                <h4 class="title">Corrrective Jaw Surgery</h4>
                                                                            <p><p>Our Oral &amp; Maxillofacial Surgeons can reposition the facial bones to restore proper function &amp; facial appearance.</p></p>
                                                                                </div>
                    </div>
                    
                        </a>
                    </div>
                    </div>
                </div>

            </div>
        </div>

 


                </div>
    </div>
</section>
  
</section>
</section>

{{-- ---------------------End of services section --------------------- --}}


    <!-- Start Services 
    ============================================= -->
    <div class="department-area carousel-shadow default-padding-bottom bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Services</h4>
                        <h2>Our Department</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-items department-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Eye Care</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jonathom Doe
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Dental Care</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jaknil Akia
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Primary Care</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                               <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Shikla Brotha
                                    </p>
                               </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Orthopaedics</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jaknil Akia
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bottom shape">
            <img src="assets/img/shape/8.png" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Services -->

    <!-- Start Consultation 
    ============================================= -->
    <div class="consultation-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 process">
                    <h2>
                        How to get a <br> consultation from us?
                    </h2>
                    <p>
                        Badies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.
                    </p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-calendar-1"></i>
                                <h5>Make Appointment</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-doctor"></i> 
                                <h5>Select A Doctor</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-heartbeat-1"></i>
                                <h5>Confirm Consultation</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 form">
                    <div class="appoinment-box text-center wow fadeInRight">
                        <div class="heading">
                            <h4>Make an Appointment</h4>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="f_name" name="name" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="f_phone" name="phone" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Department</option>
                                            <option value="2">Medecine</option>
                                            <option value="4">Dental Care</option>
                                            <option value="5">Traumatology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="f_date" name="date" placeholder="Date" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="f_time" name="time" placeholder="Time" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" id="f_submit">
                                        Book Appoinment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Consultation -->

    <!-- Start Choose Us 
    ============================================= -->
    <div class="choose-us-area">
        <div class="row">
            <div class="col-lg-6 thumb bg-cover" style="background-image: url(assets/img/2440x1578.png);"></div>
            <div class="col-lg-6 info">
                <div class="info-box">
                    <h5>At Our Clinic</h5>
                    <h2>Our Doctors <br> Specialize in you.</h2>
                    <p>
                        Respect forming clothes do in he. Course so piqued no an by appear. Themselves reasonable pianoforte so motionless he as difficulty be. Abode way begin ham there power whole. Suppose neither evident welcome
                    </p>
                    <p>
                        Do unpleasing indulgence impossible to conviction. Suppose neither evident welcome it at do civilly uncivil. Sing tall much you get nor.
                    </p>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Doctor Lists</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Doctos Area 
    ============================================= -->
    <div class="doctors-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Doctors</h4>
                        <h2>Meet our Experts</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="doctor-items">
                <div class="row">

                    <div class="col-lg-4">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                    <i class="flaticon-cardiologist"></i>
                                    <span>Cardiologists</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-dermatologist"></i>
                                    <span>Dermatologists</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-paramedic"></i>
                                    <span>Medicine Specialists</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab4" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-therapist"></i>
                                    <span>Family Physicians</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8">
                        <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                            
                            <div id="tab1" class="tab-pane fade active show">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Dr. Jonathom Doe</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. 
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Prof. Hones Park </h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. 
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Professor. Sakaoat Amir</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate.  
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Dr. Andro kuria</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate.  
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Professor. Matori Pulas</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate.  
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Doctos Area -->

    <!-- Start Testomonials 
    ============================================= -->
    <div class="testimonials-area overflow-hidden carousel-shadow default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4 text-light">
                    <div class="heading">
                        <h5>Testimonials</h5>
                        <h2>Whay people says <br> about our services</h2>
                        <a class="btn btn-sm btn-light effect" href="#"><i class="fas fa-angle-right"></i>Viewl All</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonials-carousel text-center owl-carousel owl-theme">

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/100x100.png" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testomonials Area -->

    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area bottom-less bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>News</h4>
                        <h2>Latest Blog</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                                <div class="post-date">
                                    12 Jul
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Health</a>
                                        </li>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Enjoyed me settled mr respect no spirits civilly. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                                <div class="post-date">
                                    05 Aug
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Test</a>
                                        </li>
                                        <li>
                                            <a href="#">Doctor</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Suitable settling attended no doubtful feelings.</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 24 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                                <div class="post-date">
                                    27 Dec
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Unwilling sportsmen he in questions september. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 07 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Contact Area  
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">

                    <div class="col-lg-7 wow address-box fadeInUp bg-cover" style="background-image: url(assets/img/2440x1578.png);">
                        <div class="address-info">
                            <ul>
                                <li>
                                    <h5><i class="flaticon-call"></i> Phone</h5>
                                    <span>+44-20-7328-4499</span>
                                </li>
                                <li>
                                    <h5><i class="flaticon-email"></i> Email</h5>
                                    <span>info@healdi.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInLeft contact-form-box">
                        <h2>Need help? <strong>Let's ask your questions</strong></h2>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message
                                    </button>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->


@endsection