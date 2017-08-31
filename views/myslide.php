<?php ?>
<!--
       If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
       Slide effect: slide, fade
       Text Align: slide_style_center, slide_style_left, slide_style_right
       Add Text Animation: https://daneden.github.io/animate.css/
       -->
<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">

<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- Third Slide -->
        <div class="item active">

            <!-- Slide Background -->
            <img src=" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>

            <div class="container">
                <div class="row">
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                        <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                        <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Slide -->

        <!-- Second Slide -->
        <div class="item">

            <!-- Slide Background -->
            <img src="images/motherboard.png" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_left">
                <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
            </div>
        </div>
        <!-- End of Slide -->

        <!-- Third Slide -->
        <div class="item">

            <!-- Slide Background -->
            <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_right">
                <h1 data-animation="animated zoomInLeft">Beautiful Animations</h1>
                <p data-animation="animated fadeInRight">Lots of css3 Animations to make slide beautiful .</p>
                <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
            </div>
        </div>
        <!-- End of Slide -->


    </div><!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> <!-- End  bootstrap-touch-slider Slider -->
    </div>
