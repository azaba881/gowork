@extends('layouts.global')
 @section('content')
    <main>
        <style>
            /* Conteneur principal */
      
.top-content {
    width: 100%;
    padding: 0;
}
.top-content .carousel {
    margin-bottom: 0px;
}
.top-content .carousel-control-prev {
    border-bottom: 0;
}
.top-content .carousel-control-next {
    border-bottom: 0;
}
 
@media (max-width: 767px) {
h1, h2 {
    font-size: 22px;
    line-height: 30px;
}
 
.top-content .carousel-indicators {
    display: none;
}
}
.top-content .carousel-item {
    height: 100vh;
    min-height: 400px;
}
.top-content .carousel-item img {
    height: 100%;
    object-fit: cover;
}
 
@media (max-width: 575px) {
 
.top-content h1, .top-content h2, .top-content h3 {
    font-size: 18px;
}
}
 
@media (max-width: 575px) {
.top-content .carousel-item {
    max-height: 400px;
}
}
/*---------- SLIDE CAPTION ----------*/
.slide_style_left {
    text-align: left !important;
    left: 0;
    top: 25%;
    margin: auto;
    padding: 10px;
    position: absolute;
    text-align: left;
    padding: 10px 85px;
}
.slide_style_right {
    text-align: right !important;
    top: 25%;
    right: 0;
    margin: auto;
    padding: 10px;
    position: absolute;
    text-align: left;
    padding: 10px 85px;
}
.slide_style_bottom {
    text-align: center !important;
    left: 0;
    bottom:15%;
    right: 0;
    margin: auto;
    padding: 10px;
    position: absolute;
    text-align: left;
    padding: 10px 85px;
}
 
.slide-text > h1 {
    padding: 0;
    color: #ffffff;
    font-size: 70px;
    font-style: normal;
    line-height: 84px;
    margin-bottom: 30px;
    letter-spacing: 1px;
    display: inline-block;
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
}
    .slide-heading{
        font-size: 40px;
    font-weight: bold;
    color: #f4ac0c;
     -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
    }
    .slide-heading-1{
    font-size: 40px;
    font-weight: bold;
    color: #fff;
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
    }
.slide-text > p {
    padding: 0;
    color: #ffffff;
    font-size: 20px;
    line-height: 24px;
    font-weight: 300;
    margin-bottom: 40px;
    letter-spacing: 1px;
    -webkit-animation-delay: 1.1s;
    animation-delay: 1.1s;
}
.slide-text > a.btn-default, .slide-text > a.btn-warning, .slide-text > a.btn-danger {
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
.slide-text > a.btn-primary {
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
.slide-text > a:hover, .slide-text > a:active {
    color: #ffffff;
    background: #222222;
    -webkit-transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
    transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
}
        </style>
   
        <!-- Slider Area Start-->
        <div class="top-content">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active"> <img  class="d-block w-100"  src="images/imgs/DIGITALC.jpg" alt="First slide"> 
                  
                  <!-- Slide Text Layer -->
                    <div class="slide_style_left">
                        <div class="row" style="padding-left:8%;">
                          <div class="col-7 slide-text">
                              <h2 style="font-size:50px;color:white;font-weight:800;" class="animate__animated animate__lightSpeedInLeft">CRÉER OU TROUVER<br>DE L'EMPLOI RAPIDEMENT</h2>
                                <p  class="animate__animated animate__fadeInUp" style="font-weight: 500">
                                    Entreprises,Travailleurs qualifiés en quéte d'emploi nous mettons notre plateforme à votre disposition 
                                        pour faciliter le recrutement des travailleurs pour les entreprises et l'accès rapide aux offres de travail pour les travailleurs .
                                </p>
                                <a href="{{route('register')}}"  class="btn btn-warning btn-lg animate__animated animate__fadeInUp" style="background-color:orange" >GET STARTED</a> 
                                <a href="#"  data-toggle="modal" data-target="#exampleModal"  class="btn btn-primary btn-lg animate__animated animate__fadeInUp">DASHBOARD</a> 
                          </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"> <img  class="d-block w-100"  src="images/imgs/2.jpg" alt="Second slide"> 
                  <!-- Slide Text Layer -->
                    <div class="slide_style_right text-center">
                        <div class="row" >
                            <div class="col-12 slide-text text-center">
                                 <h1 class="animate__animated animate__lightSpeedInRight">Bootstrap </h1>
                                 <p  class="animate__animated animate__fadeInUp" style="font-weight: 500">
                                    Entreprises,Travailleurs qualifiés en quéte d'emploi nous mettons notre plateforme à votre disposition 
                                        pour faciliter le recrutement des travailleurs pour les entreprises et l'accès rapide aux offres de travail pour les travailleurs .
                                </p>
                                <a href="#" target="_blank" class="btn btn-warning btn-lg animate__animated animate__fadeInUp" >select one</a> 
                                <a href="#" target="_blank"  class="btn btn-primary btn-lg animate__animated animate__fadeInUp">select two</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"> <img  class="d-block w-100"  src="images/imgs/3.jpg" alt="Third slide"> 
                  <!-- Slide Text Layer -->
                    <div class="slide_style_left">
                          <div class="row" >
                          <div class="col-12 slide-text text-center">
                              <h2 class="animate__animated animate__lightSpeedInLeft slide-heading">Bootstrap Carousel</h2>
                                <p  class="animate__animated animate__fadeInUp"><small>Bootstrap now touch enable slide.</small></p>
                                <a href="#" target="_blank" class="btn btn-warning  animate__animated animate__fadeInUp" >select one</a> 
                          </div>
                          </div>
                          </div>
                </div>

              <a  class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"  aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
       
          <div class="container-fluid">
            <div class="row text-center" style="background-color: green;padding:1%;color:white;text-align:justify">
                <div class="col" style="display: flex;align-items:bottom;flex-direction:row,justify-content:center">
                  <h1  style="font-size: 50px;color: white;"><span id="timer1">345</span>  /</h1><p style="color:white;text-align:justify">OFFRES <br> DISPONIBLES</p>
                </div>
                <div class="col" style="display: flex;align-items:bottom;flex-direction:row,justify-content:center">
                    <h1 style="font-size: 50px;color: white;"> <span id="timer2">345</span>  /</h1><p style="color:white;text-align:justify">DEMANDEURS <br> D'EMPLOI</p>
                  </div>
                  <div class="col" style="display: flex;align-items:bottom;flex-direction:row,justify-content:center">
                    <h1 style="font-size: 50px;color: white;"><span id="timer3">345</span>/</h1><p style="color:white;text-align:justify">OFFRES <br> CLOTURÉES</p>
                  </div>
                  <div class="col" style="display: flex;align-items:bottom;flex-direction:row,justify-content:center">
                    <h1 style="font-size: 50px;color: white;"><span id="timer1">345</span> /</h1><p style="color:white;text-align:justify">ENTREPRISES <br> CONNECTÉES </p>
                  </div>
                  <div class="col" style="display: flex;align-items:bottom;flex-direction:row,justify-content:center">
                    <h1 style="font-size: 50px;color: white;"><span id="timer4">345</span> /</h1><p style="color:white;text-align:justify">DOMAINES <br> D'EXPÉRIENCES</p>
                  </div>
            </div>
          </div>
          
        <!-- Slider Area End-->

        <!-- What We do start-->
        <div class="what-we-do we-padding" style="margin-top:-50px;">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2 style="color: green">TYPES D'OFFRES D'EMPLOI</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <!-- first type-->
                     <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-6"> 
                            <div class="do-caption">
                                <h4>STAGE</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                       
                        </div>
                    </div>

                     <!-- two type-->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-6">
                           
                            <div class="do-caption">
                                <h4>JOB</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                       
                        </div>
                    </div>
                     <!-- three type-->
                   <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-6"> 
                            <div class="do-caption">
                                <h4>INTÉRIM</h4>
                                <p>Hunky dory barney fanny around up the duff no biggie loo cup of tea jolly good ruddy say arse!</p>
                            </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- We Create Start 2 -->
        <div class="we-create-area create-padding" style="margin-top:-200px;">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <div class="we-create-img">
                            <img src="assets/img//service/banner_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="we-create-cap">
                            <h3 >We Create a Steps to Build a Successful Digital Product</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis orem ipsum dolor sit amet, consectetur adipiscing.</p>
                            <a href="#" data-toggle="modal" data-target="#exampleModal" style="background-color: green" class="btn">COMMENCER</a>
                        </div>
                    </div>
                </div>
                <!-- We Create End 2 -->
                <div class="row d-flex align-items-end" style="margin-top:100px;">
                    <div class="col-lg-6 col-md-12">
                        <div class="we-create-cap">
                            <h3>We Create a Steps to Build a Successful Digital Product</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis orem ipsum dolor sit amet, consectetur adipiscing.</p>
                            <a href="#" data-toggle="modal" data-target="#exampleModal" style="background-color: green" class="btn">COMMENCER</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="we-create-img">
                            <img src="assets/img//service/vf.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- Generating Start -->
        <div class="generating-area " style="margin-top:-30px"> 
            <div class="container">
                 <!-- Section-tittle -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2 style="color: green" >ÉTAPES À SUIVRE</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-chart"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>ANALYSE ET PROMOTIONS DES OFFRES DE TRAVAIL</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-social-media-marketing"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>SÉLECTION ET EMBAUCHE DES CANDIDATS</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-speaker"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>Keep you in the Loop</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-generating d-flex mb-30">
                            <div class="generating-icon">
                                <span class="flaticon-growth"></span>
                            </div>
                            <div class="generating-cap">
                                <h4>SUIVI AUPRÈS DE L’ENTREPRISE ET DU TRAVAILLEUR</h4>
                                <p>Seddo eiusmod tempor incididunt labore lore magna aliqua uisipsum suspendis incididun
                                    se ultrices gravida. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Generating End -->
       
       
        <!-- Tips Triks Start -->
        <div class="tips-triks-area tips-padding" style="margin-top:-150px">
            <div class="container">
                 <!-- Section-tittle -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2 style="color: green">ACTUALITÉS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_1.jpg" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="#">Twice profit than before you ever got</a></h4>
                                <span>Continue Reading</span>
                                <p>March 3, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_2.jpg" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="#">Twice profit than before you ever got</a></h4>
                                <span>Continue Reading</span>
                                <p>March 3, 2020</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_3.jpg" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="#">Twice profit than before you ever got</a></h4>
                                <span>Continue Reading</span>
                                <p>March 3, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_1.png" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4><a href="#">Twice profit than before you ever got</a></h4>
                                <span>Continue Reading</span>
                                <p>March 3, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-3 col-md-12">
                        <div class="wantToWork-btn f-right">
                            <a href="{{route('blog')}}" style="background-color: green" class="btn btn-primary">EN SAVOIR PLUS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tips Triks End -->
       <!-- Testimonial Start -->
       <div class="testimonial-area">
        <div class="container">
           <div class="testimonial-main">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5  col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2 style="color: green">Témoignages</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                        <div class="col-lg-10 col-md-9">
                            <div class="h1-testimonial-active">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption ">
                                        <div class="testimonial-top-cap">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src="assets/img/testmonial/testimonial.png" alt="">
                                            </div>
                                        <div class="founder-text">
                                            <span>Oliva jems</span>
                                            <p>UIX designer</p>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-caption ">
                                        <div class="testimonial-top-cap">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src="assets/img/testmonial/testimonial.png" alt="">
                                            </div>
                                        <div class="founder-text">
                                            <span>Oliva jems</span>
                                            <p>UIX designer</p>
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
    <!-- Testimonial End -->
    </main>
        
   @endsection