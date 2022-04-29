
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    <link href="./plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <style>
    
        /* Style the input fields */
        input {
          padding: 5px;
          width: 100%;
          font-size: 18px;
          font-family: sans-serif;
          border: 1px solid #green;
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
          background-color: green;
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
          background-color: green;
        }
      </style>
</head>

<body class="h-100">
    
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

    @yield('content') 

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
