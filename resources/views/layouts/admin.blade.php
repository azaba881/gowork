<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="./plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
<style>
    
  /* Style the input fields */
  input {
    padding: 5px;
    width: 100%;
    font-size: 18px;
    font-family: Raleway;
    border: 1px solid #0080ff;
  }
  .form-s{background-color:rgba(0,0,0,0);
    background-position:center bottom,center calc(99%);
    background-repeat:no-repeat;background-size:0 2px,100% 1px;
    padding:0;
    transition: background 1s ease-out 0s}
    form-control-line{border-left:0 none;border-radius:0;border-right:0 none;border-top:0 none;box-shadow:none;padding-left:0}.has-success .form-control{border-color:#7ace4c;box-shadow:none!important}
  
  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }
  
  /* Hide all steps by default: */
  .tab {
    display: none;
  }
  
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #0080ff;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  
  /* Mark the active step: */
  .step.active {
    opacity: 1;
  }
  
  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #0080ff;
  }
</style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color: white;">
            <div class="brand-logo">
                <a href="index.html">                   
                <img src="images/logo-text.png" width="150px" style="margin-top: -25px;" alt="">
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header" style="background-color: green;">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger" >
                        <span class="toggle-icon" style="color: white;"><i  class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">
                    <ul class="clearfix">
                        
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i style="color: white;" class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2 badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a style="color: white;" href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i style="color: white;" class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{route('profil')}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu"> 
                    <li>
                        <a href="{{route('admin')}}" aria-expanded="false">
                            <span class="nav-text"><i class="fa  fa-dashboard fa-fw" aria-hidden="true"></i> DASHBOARD</a></span>
                        </a>
                    </li> 
                    <li>
                        <a href="{{route('externe')}}" aria-expanded="false">
                            <span class="nav-text"><i class="fa fa-th-large fa-fw" aria-hidden="true"></i> OFFRES EXTERNES</a></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('adminentreprise')}}" aria-expanded="false">
                            <span class="nav-text"><i class="fa fa-credit-card fa-fw" aria-hidden="true"></i> ENTREPRISES</a></span>
                        </a>
                    </li> 
                    <li>
                        <a href="{{route('admintravailleur')}}" aria-expanded="false">
                            <span class="nav-text"><i class="fa fa-user fa-fw" aria-hidden="true"></i>DEMANDEUR D'EMPLOI</a></span>
                        </a>
                    </li>
                    <li>
                        <a aria-expanded="false" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <span class="nav-text"><i class="fa fa-power-off fa-fw menu-icon" aria-hidden="true"></i> DECONNEXION</a></span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>  
                                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">ADMINISTRATEUR</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">

            @yield('content')
       
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
    
    
    <!--**********************************
        Footer start
    ***********************************-->
   
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<script src="plugins/common/common.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/settings.js"></script>
<script src="js/gleek.js"></script>
<script src="js/styleSwitcher.js"></script>
<script src="./plugins/jquery-steps/build/jquery.steps.min.js"></script>
<script src="./plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./js/plugins-init/jquery-steps-init.js"></script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
// This function will display the specified tab of the form ...
var x = document.getElementsByClassName("tab");
x[n].style.display = "block";
// ... and fix the Previous/Next buttons:
if (n == 0) {
document.getElementById("prevBtn").style.display = "none";
} else {
document.getElementById("prevBtn").style.display = "inline";
}
if (n == (x.length - 1)) {
document.getElementById("nextBtn").innerHTML = "SOUMETTRE";
} else {
document.getElementById("nextBtn").innerHTML = "SUIVANT";
}
// ... and run a function that displays the correct step indicator:
fixStepIndicator(n)
}

function nextPrev(n) {
// This function will figure out which tab to display
var x = document.getElementsByClassName("tab");
// Exit the function if any field in the current tab is invalid:
if (n == 1 && !validateForm()) return false;
// Hide the current tab:
x[currentTab].style.display = "none";
// Increase or decrease the current tab by 1:
currentTab = currentTab + n;
// if you have reached the end of the form... :
if (currentTab >= x.length) {
//...the form gets submitted:
document.getElementById("regForm").submit();
return false;
}
// Otherwise, display the correct tab:
showTab(currentTab);
}

function validateForm() {
// This function deals with validation of the form fields
var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");
// A loop that checks every input field in the current tab:
for (i = 0; i < y.length; i++) {
// If a field is empty...
if (y[i].value == "") {
  // add an "invalid" class to the field:
  y[i].className += " invalid";
  // and set the current valid status to false:
  valid = false;
}
}
// If the valid status is true, mark the step as finished and valid:
if (valid) {
document.getElementsByClassName("step")[currentTab].className += " finish";
}
return valid; // return the valid status
}

function fixStepIndicator(n) {
// This function removes the "active" class of all steps...
var i, x = document.getElementsByClassName("step");
for (i = 0; i < x.length; i++) {
x[i].className = x[i].className.replace(" active", "");
}
//... and adds the "active" class to the current step:
x[n].className += " active";
}
</script>

</body>

</html>


                
                           

                                
                                    
                                
                    