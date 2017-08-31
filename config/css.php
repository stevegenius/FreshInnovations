<?php
// Css File: 

?>

<!-- localhosted links -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="dist/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="dist/css/bootstrap-theme.min.css" >

<!-- jQuery UI css -->
<link rel="stylesheet" href="jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css" >

<!-- FontAwesome css -->
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" href="animate.css-master/animate.min.css">
<!-- end of my host -->



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css" >

<!-- jQuery UI css -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" >

<!-- FontAwesome css -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" >

<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Slabo+27px" rel="stylesheet">
<style>
    h3 {color: #ffe92f;}
    h1 {color: #ffe92f;}
    h1.s {
        color: #ffffff;}
    h2.featurette-heading {
        color: #ffe92f;
    }


    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        color: #ffffff;
       /* background-color: rgba(154, 207, 234, 1);*/
        background-image: none;
        background-color: rgba(154, 207, 234, 0);
        border-bottom-style: solid;
        border-bottom-color: white;

    }

    .navbar-default {
        border: transparent;
    }
    .navbar.navbar-default.navbar-fixed-top{
        background-color: rgba(154, 207, 234, 0);
        background-image: none;


    }
    /* the bg will appear during scrol of the page*/
    .navbar.navbar-default.navbar-fixed-top.top-nav-collapse{
        background-color: rgba(154, 207, 234, 0.9);
        background-image: none;


    }

    ul.nav.navbar-nav>li>a {  font-weight: 400px; font-style: normal;  color:white; font-size: 22px; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; }
    ul.nav.navbar-nav>li>a:hover {  color:#ffe92f; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;  }
    ul.nav.navbar-nav>li>a:active { color:ffe92f; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;  }
    li>a.active {
        color:ffe92f;
    }




    /* slides css here.. **/
    .carousel-fade .carousel-inner > .item {
        transition-property: opacity;
    }
    .carousel-fade .carousel-inner > .item,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
    }
    .carousel-fade .carousel-inner > .item.active,
    .carousel-fade .carousel-inner > .item.next.left {
        opacity: 1;
    }
    .carousel-fade .carousel-inner > .next,
    .carousel-fade .carousel-inner > .prev,
    .carousel-fade .carousel-inner > .active.left,
    .carousel-fade .carousel-inner > .active.right {
        left: 0;
    }
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right,
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        transform: translate3d(0, 0, 0);
    }

    .carousel-fade {
    .carousel-inner {
    .item {
        transition-property: opacity;
    }

    .item,
    .active.left,
    .active.right {
        opacity: 0;
    }

    .active,
    .next.left,
    .prev.right {
        opacity: 1;
    }

    .next,
    .prev,
    .active.left,
    .active.right {
        left: 0;
        transform: translate3d(0, 0, 0);
    }
    }

    .carousel-control {
        z-index: 2;
    }
    }
    .carousel-indicators .active{
        margin: 1px 5px 1px 1px;
        box-shadow: 0 0 0 2px #fff;
        background-color:lightblue;
        position: relative;

    }
    .carousel-indicators li{
        padding: 0;
        width: 15px;
        height: 15px;
        border: 1px solid rgb(158, 158, 158);
        text-indent: 0;
        overflow: hidden;
        text-align: left;
        position: relative;
        letter-spacing: 1px;
        background: rgb(158, 158, 158);
        border-radius: 50%;
        margin-right: 5px;
        ransition: all 0.5s cubic-bezier(0.22,0.81,0.01,0.99);
        z-index: 10;
        cursor: pointer;
        display: inline-block;
        margin: 1px;
    }


        /*---------- LEFT/RIGHT ROUND CONTROL ----------*/
    .control-round .carousel-control {
        top: 47%;
        opacity: 0;
        width: 45px;
        height: 45px;
        z-index: 100;
        color: #ffffff;
        display: block;
        font-size: 24px;
        cursor: pointer;
        overflow: hidden;
        line-height: 43px;
        text-shadow: none;
        position: absolute;
        font-weight: normal;
        background: transparent;
        -webkit-border-radius: 100px;
        border-radius: 100px;
    }
    .control-round:hover .carousel-control{
        opacity: 1;
    }
    .control-round .carousel-control.left {
        background-color: rgba(154, 207, 234, 1.80);
        left: 1%;
    }
    .control-round .carousel-control.right {
        background-color: rgba(154, 207, 234, 0.5);
        right: 1%;
    }
    .control-round .carousel-control.left:hover,
    .control-round .carousel-control.right:hover{
        color: #ffe92f;
        background: rgba(0, 0, 0, 0.5);
        border: 0px transparent;
    }
    .control-round .carousel-control.left>span:nth-child(1){
        left: 45%;
    }
    .control-round .carousel-control.right>span:nth-child(1){
        right: 45%;
    }

    /*---------- INDICATORS CONTROL ----------*/
    .indicators-line > .carousel-indicators{
        right: 45%;
        bottom: 3%;
        left: auto;
        width: 90%;
        height: 20px;
        font-size: 0;
        overflow-x: auto;
        text-align: right;
        overflow-y: hidden;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 1px;
        white-space: nowrap;
    }
    .indicators-line > .carousel-indicators li{
        padding: 0;
        width: 15px;
        height: 15px;
        border: 1px solid rgb(158, 158, 158);
        text-indent: 0;
        overflow: hidden;
        text-align: left;
        position: relative;
        letter-spacing: 1px;
        background: rgb(158, 158, 158);
        -webkit-font-smoothing: antialiased;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        margin-right: 5px;
        -webkit-transition: all 0.5s cubic-bezier(0.22,0.81,0.01,0.99);
        transition: all 0.5s cubic-bezier(0.22,0.81,0.01,0.99);
        z-index: 10;
        cursor:pointer;
    }
    .indicators-line > .carousel-indicators li:last-child{
        margin-right: 0;
    }
    .indicators-line > .carousel-indicators .active{
        margin: 1px 5px 1px 1px;
        box-shadow: 0 0 0 2px #fff;
        background-color: transparent;
        position: relative;
        -webkit-transition: box-shadow 0.3s ease;
        -moz-transition: box-shadow 0.3s ease;
        -o-transition: box-shadow 0.3s ease;
        transition: box-shadow 0.3s ease;
        -webkit-transition: background-color 0.3s ease;
        -moz-transition: background-color 0.3s ease;
        -o-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;

    }
    .indicators-line > .carousel-indicators .active:before{
        transform: scale(0.5);
        background-color: #fff;
        content:"";
        position: absolute;
        left:-1px;
        top:-1px;
        width:15px;
        height: 15px;
        border-radius: 50%;
        -webkit-transition: background-color 0.3s ease;
        -moz-transition: background-color 0.3s ease;
        -o-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
    }




    /*---------- SLIDE CAPTION ----------*/
    .slide_style_left {
        text-align: left !important;
    }
    .slide_style_right {
        text-align: right !important;
    }
    .slide_style_center {
        text-align: center !important;
    }

    .slide-text {
        left: 0;
        top: 25%;
        right: 0;
        margin: auto;
        padding: 10px;
        position: absolute;
        text-align: left;
        padding: 10px 85px;

    }



    /**font-family: 'Open Sans', sans-serif;

    font-family: 'Slabo 27px', serif;

    font-family: 'Raleway', sans-serif;**/



    .slide-text > h1 {

        padding: 0;
        /* background-color: rgba(154, 207, 234, 0.12);*/
         color: #ffffff;
         font-size: 70px;
         font-style: normal;
         font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
         line-height: 84px;
         margin-bottom: 30px;
         letter-spacing: 1px;
         display: inline-block;
         -webkit-animation-delay: 0.7s;
         animation-delay: 0.7s;
     }
     .slide-text > p {
         padding: 0;
         background-color: rgba(154, 207, 234, 0.3);
        color: #f1f1f1;
        font-size: 24px;
        line-height: 24px;
        font-weight: 400;
        margin-bottom: 40px;
        letter-spacing: 1px;
        -webkit-animation-delay: 1.1s;
        animation-delay: 1.1s;
    }
    .slide-text > a.btn-default{
        color: #000;
        font-weight: 400;
        font-size: 13px;
        line-height: 15px;
        margin-right: 10px;
        text-align: center;
        padding: 17px 30px;
        white-space: nowrap;
        letter-spacing: 1px;
        display: inline-block;
        border: none;
        text-transform: uppercase;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
        transition: background 0.3s ease-in-out, color 0.3s ease-in-out;

    }
    .slide-text > a.btn-primary{
        color: #ffffff;
        cursor: pointer;
        font-weight: 400;
        font-size: 13px;
        line-height: 15px;
        margin-left: 10px;
        text-align: center;
        padding: 17px 30px;
        white-space: nowrap;
        letter-spacing: 1px;
        background: #00bfff;
        display: inline-block;
        text-decoration: none;
        text-transform: uppercase;
        border: none;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
        transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .slide-text > a:hover,
    .slide-text > a:active {
        color: #ffffff;
        background: #222222;
        -webkit-transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
        transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
    }






    /*------------------------------------------------------*/
    /* RESPONSIVE
    /*------------------------------------------------------*/

    @media (max-width: 991px) {
        .slide-text h1 {
            font-size: 40px;
            line-height: 50px;
            margin-bottom: 20px;
        }
        .slide-text > p {

            font-size: 18px;
        }
    }


    /*---------- MEDIA 480px ----------*/
    @media  (max-width: 768px) {
        .slide-text {
            padding: 10px 50px;
        }
        .slide-text h1 {
            font-size: 30px;
            line-height: 40px;
            margin-bottom: 10px;
        }
        .slide-text > p {
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 20px;
        }
        .control-round .carousel-control{
            display: none;
        }

    }
    @media  (max-width: 480px) {
        .slide-text {
            padding: 10px 30px;
        }
        .slide-text h1 {
            font-size: 20px;
            line-height: 25px;
            margin-bottom: 5px;
        }
        .slide-text > p {
            font-size: 12px;
            line-height: 18px;
            margin-bottom: 10px;
            text-align: left;
        }
        .slide-text > a.btn-default,
        .slide-text > a.btn-primary {
            font-size: 10px;
            line-height: 10px;
            margin-right: 10px;
            text-align: center;
            padding: 10px 15px;
        }
        .indicators-line > .carousel-indicators{
            display: none;
        }

    }




    html,
    body,
    .carousel,
    .carousel-inner,
    .carousel-inner .item {
        height: 100%;
    }

    .item:nth-child(1) {
        background: url(./images/d.png);
        background-attachment: fixed;
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .item:nth-child(2) {
        background: url(./images/coding.png);
        background-attachment: fixed;
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .item:nth-child(3) {
        background: url(./images/mc.png);
        background-attachment: fixed;
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
/** End Slides**/




    body {
        overflow-x: hidden;
        width: 100%;
        height: 100%;
    }

    html {
        width: 100%;
        height: 100%;
    }

    @media(min-width:767px) {
        .navbar {
            padding: 9px 0;
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            padding: 0;
        }


    }

/*    The padding is very important to make sure the scrollspy picks up the right area when scrolled to. Adjust the margin and padding of sections and children
    of those sections to manage the look and feel of the site. */


    /*class="service"*/
    p.service {
        color: #ffffff;
        font-size: 18px;
        font-style: normal;
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
        text-align: left;


    }
    .intro-section {

        mini-height:100%;
        padding-top: 65px;
        padding-bottom: 10px;
        text-align: center;
        background: #fff;
    }

    .services-section {

        mini-height:100%;
        padding-top: 65px;
        padding-bottom: 10px;
        text-align: center;
        background-color:#1b2319;
        background-image: url("./images/bgc.png");
        background-repeat: ;
    }
    .fix-section {

        mini-height:100%;
        padding-top: 65px;
        padding-bottom: 10px;
        text-align: center;
        color: #ffffff;
        background: white;
        background-attachment: fixed;
        background-image: url("./images/light.png");
        background-repeat: no-repeat;
    }
    .build-section {

        mini-height:100%;
        padding-top: 65px;
        padding-bottom: 10px;
        text-align: center;
        background: white;
        background-image: url("./images/l.pn");
        background-repeat:no-repeat;
    }

    .about-section {

        mini-height:100%;
        padding-top: 65px;
        padding-bottom: 10px;
        text-align: center;
        background-attachment: fixed;
        background-image: url("./images/iphone.png");
        background-color:rgba(66, 139, 202, 0.12);
        background-repeat: no-repeat;
    }


    .contact-section {

        
        padding-top: 65px;
        padding-bottom: 10px;
        text-align: center;
        background-color:rgba(66, 139, 202, 0.2);
        background-image: url("./images/note.png") ;
        background-attachment: fixed;
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .contact-text {
        color: #ffffff;
        font-size: 18px;
        font-style: normal;
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
        text-align: left;
    }

    .fix {
        display: list-item;
        text-align: left;
        font-size: 18px;
        list-style:square; }


/*
        /*=========================
          Icons
         ================= */

    /* footer social icons */
    ul.social-network {
        list-style: none;
        display: inline;
        margin-left:0 !important;
        padding: 0;
    }
    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }


    /* footer social icons */
    .social-network a.icoInstagram:hover {
        background-color: deeppink;
    }
    .social-network a.icoFacebook:hover {
        background-color:#3B5998;
    }
    .social-network a.icoTwitter:hover {
        background-color:#33ccff;
    }
    .social-network a.icoGoogle:hover {
        background-color:#BD3518;
    }
    .social-network a.icoVimeo:hover {
        background-color:#0590B8;
    }
    .social-network a.icoLinkedin:hover {
        background-color:#007bb7;
    }
    .social-network a.icoInstagram:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
    .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
        color:#fff;
    }
    a.socialIcon:hover, .socialHoverClass {
        color:#44BCDD;
    }

    .social-circle li a {
        display:inline-block;
        position:relative;
        margin:0 auto 0 auto;
        -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;
        text-align:center;
        width: 50px;
        height: 50px;
        font-size:20px;
    }
    .social-circle li i {
        margin:0;
        line-height:50px;
        text-align: center;
    }

    .social-circle li a:hover i, .triggeredHover {
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms--transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        -ms-transition: all 0.2s;
        transition: all 0.2s;
    }
    .social-circle i {
        color: #fff;
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        -ms-transition: all 0.8s;
        transition: all 0.8s;
    }

    a.bg {
        background-color:rgba(66, 139, 202, 0.095);
    }



/* font awesome things */
    .fa-phone {
        color:#ffffff ;
        margin: 1px;
    }
    .fa-whatsapp {
        color:#adff2f ;
        margin: 1px;
    }
    .fa-apple {
        color: #ffffff;
        margin: 5px;
    }
    .fa-windows {
        color: #ffffff;
        margin: 5px;
    }
    .fa-android {
        color: #adff2f;
        margin: 5px;
    }
    .fa-laptop {
        color: #ffffff;
        margin: 5px;
    }
    .fa-wrench {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-mobile-phone {
        color: #ffffff;
        margin: 5px;
    }
    .fa-desktop {
        color: #ffffff;
        margin: 5px;
    }
    .fa-camera-retro {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-picture-o {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-search {
        color: #ffffff;
        margin: 5px;
    }
    .fa-signal {
        color: #ffffff;
        margin: 5px;
    }
    .fa-exchange {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-wifi {
        color: #ffffff;
        margin: 5px;
    }
    .fa-joomla {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-wordpress {
        color: #ffffff;
        margin: 5px;
    }
    .fa-globe {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-paint-brush {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-server {
        color: #ffffff;
        margin: 5px;
    }
    .fa-cogs {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-database {
        color: #ffe92f;
        margin: 5px;
    }
    .fa-code {
        color: #ffffff;
        margin: 5px;
    }
    .fa-envelope-o{
        color: #ffe92f;
        margin: 5px;
    }
    .fa-facebook.ft {
        color:#ffffff ;
        padding-top: 15px;
    }
    .fa-instagram.ft {
        color: #ff1493;
        padding-top: 15px;
    }
    .fa-twitter.ft {
        color:#9ACFEA ;
        padding-top: 15px;
    }



/*about  */
    .card {
        padding-top: 20px;
        margin: 10px 0 20px 0;
        background-color: rgba(214, 224, 226, 0.2);
        border-top-width: 0;
        border-bottom-width: 2px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .card .card-heading {
        padding: 0 20px;
        margin: 0;
    }

    .card .card-heading.simple {
        font-size: 20px;
        font-weight: 300;
        color: #777;
        border-bottom: 1px solid #e5e5e5;
    }

    .card .card-heading.image img {
        display: inline-block;
        width: 46px;
        height: 46px;
        margin-right: 15px;
        vertical-align: top;
        border: 0;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .card .card-heading.image .card-heading-header {
        display: inline-block;
        vertical-align: top;
    }

    .card .card-heading.image .card-heading-header h3 {
        margin: 0;
        font-size: 14px;
        line-height: 16px;
        color: #262626;
    }

    .card .card-heading.image .card-heading-header span {
        font-size: 12px;
        color: #999999;
    }

    .card .card-body {
        padding: 0 20px;
        margin-top: 20px;
    }

    .card .card-media {
        padding: 0 20px;
        margin: 0 -14px;
    }

    .card .card-media img {
        max-width: 100%;
        max-height: 100%;
    }

    .card .card-actions {
        min-height: 30px;
        padding: 0 20px 20px 20px;
        margin: 20px 0 0 0;
    }

    .card .card-comments {
        padding: 20px;
        margin: 0;
        background-color: #f8f8f8;
    }

    .card .card-comments .comments-collapse-toggle {
        padding: 0;
        margin: 0 20px 12px 20px;
    }

    .card .card-comments .comments-collapse-toggle a,
    .card .card-comments .comments-collapse-toggle span {
        padding-right: 5px;
        overflow: hidden;
        font-size: 12px;
        color: #999;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .card-comments .media-heading {
        font-size: 13px;
        font-weight: bold;
    }

    .card.people {
        position: relative;
        display: inline-block;
        width: 170px;
        height: 300px;
        padding-top: 0;
        margin-left: 20px;
        overflow: hidden;
        vertical-align: top;
    }

    .card.people:first-child {
        margin-left: 0;
    }

    .card.people .card-top {
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        width: 170px;
        height: 150px;
        background-color: #ffffff;
    }

    .card.people .card-top.green {
        background-color: #53a93f;
    }

    .card.people .card-top.blue {
        background-color: #427fed;
    }

    .card.people .card-info {
        position: absolute;
        top: 150px;
        display: inline-block;
        width: 100%;
        height: 101px;
        overflow: hidden;
        background: #ffffff;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .card.people .card-info .title {
        display: block;
        margin: 8px 14px 0 14px;
        overflow: hidden;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        color: #000000;
    }

    .card.people .card-info .desc {
        display: block;
        margin: 8px 14px 0 14px;
        overflow: hidden;
        font-size: 12px;
        line-height: 16px;
        color: #ffffff;
        text-overflow: ellipsis;
    }

    .card.people .card-bottom {
        position: absolute;
        bottom: 0;
        left: 0;
        display: inline-block;
        width: 100%;
        padding: 10px 20px;
        line-height: 29px;
        text-align: center;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .card.hovercard {
        position: relative;
        padding-top: 0;
        overflow: hidden;
        text-align: center;
        background-color: rgba(154, 207, 234, 0.65);
    }

    .card.hovercard .cardheader.one {
        background: url("./images/our-team/desk.png");
        background-size: cover;
        height: 135px;
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .card.hovercard .cardheader.two {
        background: url("./images/our-team/grs.png");
        background-size: cover;
        height: 135px;
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .card.hovercard .cardheader.three {
        background: url("./images/our-team/mob.png");
        background-size: cover;
        height: 135px;
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .card.hovercard .cardheader.four {
        background: url("./images/our-team/softwares.png");
        background-size: cover;
        height: 135px;
        background-repeat: no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }


    .card.hovercard .avatar {
        position: relative;
        top: -50px;
        margin-bottom: -50px;
    }

    .card.hovercard .avatar img {
        width: 120px;
        height: 120px;
        max-width: 120px;
        max-height: 120px;
        -webkit-border-radius: 60%;
        -moz-border-radius: 60%;
        border-radius: 60%;
        border: 6px solid rgba(255,255,255,0.5);
    }

    .card.hovercard .info {
        padding: 4px 8px 10px;
    }

    .card.hovercard .info .title {
        margin-bottom: 4px;
        font-size: 24px;
        line-height: 1;
        color: #ffffff;
        background-color:rgba(66, 139, 202, 0.2);
        vertical-align: middle;
    }

    .card.hovercard .info .desc {
        overflow: hidden;
        font-size: 14px;
        line-height: 20px;
        color: #ffffff;
        background-color:rgba(66, 139, 202, 0.1);
        text-overflow: ellipsis;
    }

    .card.hovercard .bottom {
        padding: 0 20px;
        margin-bottom: 17px;
    }

    h1.title{
        color: #ffffff;/*rgba(66, 139, 202, 0.3)*/
    }
    p.desc {
        color: #ffffff;
        font-size: 16px;
    }



    .more {
        position: relative;
        display: inline-block;
        width: 300px;
        height: auto;
        overflow: hidden;
        vertical-align: top;
        padding: 0 20px;
        margin-top: 20px;
    }

 .myfoot {
     width: 100%;
     background: url(./images/patch.png);
     background-position: center;
 }
 .ft {
     font-size: 24px;
     text-align: center;
     padding: 10px;

     color: #ffffff;
 }

 .copyright {

 }
</style>
