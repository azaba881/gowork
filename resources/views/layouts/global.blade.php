<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>GOWORK</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        
        <link rel="manifest" href="site.webmanifest">
        <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle" style="background-color: green"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div> 
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start --> 
       <div class="header-area">
            <div class="main-header header-sticky" >
                <div class="container-fluid" style="">
                    <div class="row align-items-center" > 
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1"> 
                            <div class="logo">
                                <a href="{{route('hme')}}"><img src="assets/img/logo/logo.png" width="150" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-8 col-md-8" style="padding-right:50px;">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation" >    
                                        <li ><a href="{{route('hme')}}"> ACCUEIL</a></li>
                                        <li><a href="{{route('blog')}}">BLOG</a></li>
                                        <li><a href="{{route('contact')}}">CONTACT</a></li>
                                        @if (Route::has('login'))                                        
                                            @auth
                                            <li>
                                                @if (auth()->user()->type == 'entreprise')
                                                <a href="{{ url('/entreprise') }}" >DASHBOARD</a>
                                                @else
                                                <a href="{{ url('/home') }}" >DASHBOARD</a>
                                                @endif
                                               
                                            </li>
                                            @else 
                                                <li> <a href="#" data-toggle="modal" data-target="#exampleModal"  class="">CONNEXION</a></li>                                                                                     
                                                @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">INSCRIPTION</a></li>
                                                @endif
                                            @endauth
                                        
                                        @endif
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1"  >
        <div class="modal-dialog">
            <div class="modal-content" >
            <div class="form-input-content">
                <div class="card login-form mb-0" >
                    <div class="card-body pt-5">
                        <a class="" href="{{route('home')}}"> <h4 style="color: green">CONNEXION</h4></a>

                <form method="POST" class="mt-3 mb-5 login-input" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" style="height: 50px;border-radius:0"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                
                                <input  id="password" style="height: 50px;border-radius:0" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-prepend"><span class="input-group-text"><i id="togglePassword" style="cursor:pointer;color:green" class="fa fa-eye-slash"></i></span>
                                </div>
                            </div>
                            

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12 offset-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        
                            <button  type="submit" style="background-color: green;width:100%;" class="btn login-form__btn submit" style="width: 100%">
                                {{ __('Login') }}
                            </button>
                    </div>
                    <p style="margin-bottom:-50px;margin-top:10px" class="text-center login-form__footer">Dont have account? <a href="{{route('register')}}" class="text-primary">Sign Up</a> now</p>
                </form>
            </div>
        </div>
        </div>
    </div>
            
        </div>
    </div>
   
        @yield('content')

        
        <footer>

            <!-- Footer Start-->
           <div class="footer-main" data-background="assets/img/shape/footer_bg.png">
             <div class="footer-area footer-padding">
                 <div class="container">
                     <div class="row d-flex justify-content-between">
                         <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                              <div class="single-footer-caption mb-30">
                                   <!-- logo -->
                                  <div class="footer-logo">
                                      <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt="" style="width: 60%;"></a>
                                  </div>
                                  <div class="footer-tittle">
                                      <div class="footer-pera">
                                          <p class="info1">221B Baker Street, P.O Box 353 Park <br> Road, USA - 215431</p>
                                          <p class="info2">info@yourdomain.com</p>
                                     </div>
                                  </div>
                                  <div class="footer-social">
                                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                                     <a href="#"><i class="fab fa-twitter"></i></a>
                                     <a href="#"><i class="fas fa-globe"></i></a>
                                     <a href="#"><i class="fab fa-behance"></i></a>
                                 </div>
                              </div>
                            </div>
                         </div>
                         <div class="col-lg-2 col-md-4 col-sm-5">
                             <div class="single-footer-caption mb-50">
                                 <div class="footer-tittle">
                                     <h4 style="color:green">NOS LIENS</h4>
                                     <ul>
                                         <li><a href="about.html">About</a></li>
                                         <li><a href="about.html">Features</a></li>
                                         <li><a href="single-blog.html">Pricing</a></li>
                                         <li><a href="blog.html">Blog</a></li>
                                         <li><a href="contact.html">Contact</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-2 col-md-4 col-sm-7">
                             <div class="single-footer-caption mb-50">
                                 <div class="footer-tittle">
                                     <h4 style="color:green">POLITIQUES</h4>
                                     <ul>
                                         <li><a href="#">Privacy Policy</a></li>
                                         <li><a href="#">Terms & Conditions</a></li>
                                         <li><a href="#"> Sitemap</a></li>
                                         <li><a href="#">FAQs</a></li>
                                         <li><a href="#">Report a bugb</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-4 col-sm-5">
                             <div class="single-footer-caption mb-50">
                                 <div class="footer-tittle">
                                     <h4 style="color:green">CONTACT</h4>
                                     <ul>
                                      <li><a href="#">Email Marketing</a></li>
                                      <li><a href="#"> Offline SEO</a></li>
                                      <li><a href="#">Social Media Marketing</a></li>
                                      <li><a href="#">Lead Generation</a></li>
                                      <li><a href="#"> 24/7 Support</a></li>
                                  </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- footer-bottom aera -->
             <div class="footer-bottom-area footer-bg">
                 <div class="container">
                     <div class="footer-border">
                          <div class="row d-flex align-items-center">
                              <div class="col-xl-12 ">
                                  <div class="footer-copy-right text-center">
                                      <p style="color:white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
       Copyright &copy; by INNOCENT KPADE | Tout droits réservés <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                  </div>
                              </div>
                          </div>
                     </div>
                 </div>
             </div>
           </div>
            <!-- Footer End-->
     
        </footer>
        
         <!-- JS here -->
         
             <!-- All JS Custom Plugins Link Here here -->
             <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
             <!-- Jquery, Popper, Bootstrap -->
             <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
             <script src="./assets/js/popper.min.js"></script>
             <script src="./assets/js/bootstrap.min.js"></script>
             <!-- Jquery Mobile Menu -->
             <script src="./assets/js/jquery.slicknav.min.js"></script>
     
             <!-- Jquery Slick , Owl-Carousel Plugins -->
             <script src="./assets/js/owl.carousel.min.js"></script>
             <script src="./assets/js/slick.min.js"></script>
             <!-- Date Picker -->
             <script src="./assets/js/gijgo.min.js"></script>
             <!-- One Page, Animated-HeadLin -->
             <script src="./assets/js/wow.min.js"></script>
             <script src="./assets/js/animated.headline.js"></script>
             <script src="./assets/js/jquery.magnific-popup.js"></script>
     
             <!-- Scrollup, nice-select, sticky -->
             <script src="./assets/js/jquery.scrollUp.min.js"></script>
             <script src="./assets/js/jquery.nice-select.min.js"></script>
             <script src="./assets/js/jquery.sticky.js"></script>
             
             <!-- contact js -->
             <script src="./assets/js/contact.js"></script>
             <script src="./assets/js/jquery.form.js"></script>
             <script src="./assets/js/jquery.validate.min.js"></script>
             <script src="./assets/js/mail-script.js"></script>
             <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
             
             <!-- Jquery Plugins, main Jquery -->	
             <script src="./assets/js/plugins.js"></script>
             <script src="./assets/js/main.js"></script>

<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
                    var i=0;
                    var timer1 = setInterval(function(){ document.querySelector("#timer1").textContent = i++;
                             if(i>100)
                    {  clearInterval(timer1);
                      document.querySelector("#timer1").classList.add("end");
                    }}, 100);

                    var timer2 = setInterval(function(){ document.querySelector("#timer2").textContent = i++;
                             if(i>243)
                    {  clearInterval(timer2);
                      document.querySelector("#timer2").classList.add("end");
                    }}, 243);

                    var timer3 = setInterval(function(){ document.querySelector("#timer3").textContent = i++;
                             if(i>50)
                    {  clearInterval(timer3);
                      document.querySelector("#timer3").classList.add("end");
                    }}, 50);

                    var timer4 = setInterval(function(){ document.querySelector("#timer4").textContent = i++;
                             if(i>675)
                    {  clearInterval(timer4);
                      document.querySelector("#timer4").classList.add("end");
                    }}, 675);

</script>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type); 

            document.getElementById('togglePassword').className = 'fa fa-eye';
                       
            this.classList.Password('bi-eye');
        });
</script>
         </body>
     </html>