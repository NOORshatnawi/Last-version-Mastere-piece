<?php
session_start();
include'./includes/connection.php';


?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lawyer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
   
<!-- Font Awesome -->
<link rel="stylesheet" href="./admin/plugins/fontawesome-free/css/all.min.css">

<!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
       /* @media (max-width: 900px) {
  .custom1{
    padding-left: 12px;
  }
}
@media (min-width: 901px) {
  .custom1{
    padding-left: 137px;
  }
}
 */
 .vh-100 {
    height: 157vh!important;
}

.vh-200 {
    height: 175vh!important;
}
a {
  text-decoration: none !important;
}


    </style>
</head>
<script>
    function verifyPassword() {
      var pw = document.getElementById("pass1").value;
      var pw2 = document.getElementById("pass2").value;
     // var username = document.getElementById("user_name").value; 
     // document.cookie = "username = " + username;

     //check empty password field
      if(pw == "") {
         document.getElementById("message").innerHTML = "**Fill the password please!";
         return false;
      }
     
     //minimum password length validation
      if(pw.length < 8) {
         document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
         return false;
      }
    
    //maximum length of password validation
      if(pw.length > 15) {
         document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
         return false;
      } 

      // check repeat password is match or not
      if(pw2 == pw){
        return true;
      }else{
        document.getElementById("message2").innerHTML = "**Please Confirm your Password";
          return false;
      }
      
    }

    function verifyPassword2() {
        // for lawyer validation
      var pw = document.getElementById("lawyer_pass1").value;
      var pw2 = document.getElementById("lawyer_pass2").value;
      //check empty password field
      if(pw == "") {
         document.getElementById("message3").innerHTML = "**Fill the password please!";
         return false;
      }
     
     //minimum password length validation
      if(pw.length < 8) {
         document.getElementById("message3").innerHTML = "**Password length must be atleast 8 characters";
         return false;
      }
    
    //maximum length of password validation
      if(pw.length > 15) {
         document.getElementById("message3").innerHTML = "**Password length must not exceed 15 characters";
         return false;
      } 

      // check repeat password is match or not
      if(pw2 == pw){
        return true;
      }else{
        document.getElementById("message4").innerHTML = "**Please Confirm your Password";
          return false;
      }
      
    }
    </script>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    
     <!-- header-start -->
     <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="about.html">About</a></li>
<!--                                         <li><a href="Practice.html">Practice Area</a></li>
 -->                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a class="active" href="signup.php">Signup</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                            <div class="social_media_links">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


 <!--Signup area-->
 <br>
 <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
     <li class="nav-item" role="presentation">
       <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Regist as User</button>
     </li>
     <li class="nav-item" role="presentation">
       <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Regist as Lawyer</button>
     </li>
     
   </ul>
   <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
         <section class="vh-100" style="background-color: #2f2b21;">
             <div class="container h-100">
               <div class="row d-flex justify-content-center align-items-center h-100">
                 <div class="col-lg-12 col-xl-11">
                   <div class="card text-black" style="border-radius: 25px;">
                     <div class="card-body p-md-5">
                       <div class="row justify-content-center">
                         <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
           
                           <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up as User</p>
           
                           <form  class="mx-1 mx-md-4"  onsubmit ="return verifyPassword()"  method="post">
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0" >
                                 
                                 <input type="text" name="user_name" id="user_name" class="form-control" required />
                                 <label class="form-label" for="form3Example1c">Your Name</label>
                                 <?php if (isset($_SESSION['name_error'])): ?>
                                <span style="color:red"><?php echo $_SESSION['name_error']; ?></span>
                                <?php  endif ?>
                               </div>
                             </div>
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <input type="email" name="user_email" id="form3Example3c" class="form-control" required />
                                 <label class="form-label" for="form3Example3c">Your Email</label>
                               </div>
                             </div>
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <span id = "message" style="color:red"> </span> <br>
                                 <input type="password" name="user_pass" id="pass1" class="form-control" />
                                 <label class="form-label" for="pass1">Password</label>
                               </div>
                             </div>
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <span id = "message2" style="color:red"> </span> <br>
                                 <input type="password" id="pass2" class="form-control" />
                                 <label class="form-label" for="pass2">Repeat your password</label>
                               </div>
                             </div>
           
                             <div class="form-check d-flex  mb-5">
                               <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                               <label class="form-check-label" for="form2Example3">
                                 I agree all statements in <a href="#!">Terms of service</a>
                               </label>
                             </div>
           
                             <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                               <button type="submit" name="regist_user" class="btn btn-primary btn-lg">Register</button>
                             </div>
           
                           </form>
           
                         </div>
                         <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
           
                           <img src="./img/draw1.webp"
                             class="img-fluid" alt="Sample image">
           
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </section>
 
     </div>
     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
         <section class="vh-200" style="background-color: #2f2b21;" >
             <div class="container h-100">
               <div class="row d-flex justify-content-center align-items-center h-100">
                 <div class="col-lg-12 col-xl-11">
                   <div class="card text-black" style="border-radius: 25px;">
                     <div class="card-body p-md-5">
                       <div class="row justify-content-center">
                         <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
           
                           <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up as Lawyer</p>
                           <form class="mx-1 mx-md-4"  onsubmit ="return verifyPassword2();"  method="post">
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <input type="text" name="lawyer_name" id="form3Example1c" class="form-control" required />
                                 <label class="form-label" for="form3Example1c">Your Name</label>
                                 <?php if (isset($_SESSION['name_error2'])): ?>
                                <span style="color:red"><?php echo $_SESSION['name_error2']; ?></span>
                                <?php  endif ?>
                               </div>
                             </div>
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <input type="email" name="lawyer_email" id="form3Example3c" class="form-control" required/>
                                 <label class="form-label" for="form3Example3c">Your Email</label>
                               </div>
                             </div>

                             <div class="d-flex flex-row align-items-center mb-4">
                                 <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                 <div class="form-outline flex-fill mb-0">
                                     <input class="form-control" type="tel" id="phone" name="phone" placeholder="00962-78-123-4567" pattern="[0-9]{5}-[0-9]{2}-[0-9]{3}-[0-9]{4}" required>
                                 <label class="form-label" for="phone">Your Phone</label>
                                 <small>Format: 00962-78-123-4567</small>
     
                                 </div>
                               </div>
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <span id = "message3" style="color:red"> </span> <br>
                                 <input type="password" name="lawyer_pass" id="lawyer_pass1" class="form-control" />
                                 <label class="form-label" for="lawyer_pass1">Password</label>
                               </div>
                             </div>
           
                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <span id = "message4" style="color:red"> </span> <br>
                                 <input type="password" id="lawyer_pass2" class="form-control" />
                                 <label class="form-label" for="lawyer_pass">Repeat your password</label>
                               </div>
                             </div>
           

                             <div class="d-flex flex-row align-items-center mb-4">
                               <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                               <div class="form-outline flex-fill mb-0">
                                 <select name="lawyer_case" class="form-select form-control" aria-label="Default select example" required>
                                    <option selected value="1">Family lawyer</option>
                                    <option value="2">Consumer lawyer</option>
                                    <option value="3">Criminal lawyer</option>
                                    <option value="4">Business lawyer</option>
                                    </select>     
                                 <label class="form-label" for="form3Example3c">Your Case</label>
                               </div>
                             </div>
                             <div class="form-check d-flex  mb-5">
                               <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                               <label class="form-check-label" for="form2Example3">
                                 I agree all statements in <a href="#!">Terms of service</a>
                               </label>
                             </div>
           
                             <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                               <button type="submit" name="regist_lawyer" class="btn btn-primary btn-lg">Register</button>
                             </div>
           
                           </form>
           
                         </div>
                         <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
           
                           <img src="./img/draw1.webp"
                             class="img-fluid" alt="Sample image">
           
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </section>
 
     </div>
        </div>
 
 <!--END Signup area-->


    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>High Quality Law <br>
                                    Advice and Support</h3>
                                <p>Leading Polish Lawyer in your city</p>
                                <a href="#" class="boxed-btn4 ">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider_area_end -->
   <br>
   
    <!-- footer_start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="footer_text">200, A-block, Green road, USA <br>
                                +10 367 267 2678 <br>
                                <a class="domain" href="#">lawyer@contact.com</a></p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Practice Area
                            </h3>
                            <ul>
                                <li><a href="#">Business law
                                    </a></li>
                                <li><a href="#">Finance law</a></li>
                                <li><a href="#">Education law</a></li>
                                <li><a href="#">Family law</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end -->


    <!-- JS here -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                // disableDaysOfWeek: [0, 0],
            //     icons: {
            //      rightIcon: '<span class="fa fa-caret-down"></span>'
            //  }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
            var timepicker = $('#timepicker').timepicker({
             format: 'HH.MM'
         });
        </script>
        
        

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
<?php
if (isset($_POST['regist_lawyer'])) {
  $lawyer_name = $_POST['lawyer_name'];
  
  $lawyer_email = $_POST['lawyer_email'];
  $phone = $_POST['phone'];
  $lawyer_pass= $_POST['lawyer_pass'];
  $lawyer_case = $_POST['lawyer_case'];

   //check username in database before insert

   $sql_lu = "SELECT * FROM lawyer_info WHERE lawyer_name = '$lawyer_name' ";
   $result = mysqli_query($conn,$sql_lu);
   if(mysqli_num_rows($result) > 0 )
   {
     $name_error2 = "Sorry... username already taken";
     $_SESSION['name_error2'] = $name_error2;
     ?>
 <script>  window.location.assign("signup.php"); </script>
     <?php
   }else{ unset($_SESSION['name_error2']);

  $sql = "INSERT INTO lawyer_info (lawyer_name,lawyer_email,phone,lawyer_pass,lawyer_case) VALUES ('$lawyer_name','$lawyer_email','$phone','$lawyer_pass','$lawyer_case')";
  

  if (mysqli_query($conn,$sql)) {
    $last_id = mysqli_insert_id($conn);
    $_SESSION['id'] = $last_id;
      ?>
    <script>
    swal({
  title: "Registered successfully",
  text: "Go to the login page",
  icon: "success",
  button: true,
 
})
.then((willDelete) => {
  if (willDelete) {
    window.location.assign("login.php");
  } 
});

    </script>
<?php
mysqli_close($conn);
   //echo "succses";
  }
  else {
   // header("Location: ../index.php");
   echo "Error: " . $sql . "<br>" . $conn->error;

  }
}}

if (isset($_POST['regist_user'])) {

  $user_name = $_POST['user_name'];
  
  $user_email = $_POST['user_email'];
  $user_pass= $_POST['user_pass'];
      
  //check username in database before insert

  $sql_u = "SELECT * FROM users_info WHERE user_name = '$user_name' ";
  $result = mysqli_query($conn,$sql_u);
  if(mysqli_num_rows($result) > 0 )
  {
    $name_error = "Sorry... username already taken";
    $_SESSION['name_error'] = $name_error;
    ?>
<script>  window.location.assign("signup.php"); </script>
    <?php
  }else{
    unset($_SESSION['name_error']);
  $sql = "INSERT INTO users_info (user_name,user_email,user_pass) VALUES ('$user_name','$user_email','$user_pass')";
  
  

  if (mysqli_query($conn,$sql)) {
    $last_id = mysqli_insert_id($conn);
    $_SESSION['id'] = $last_id;
    ?>
    <script>
    swal({
  title: "Registered successfully",
  text: "Go to the login page",
  icon: "success",
  button: true,
 
})
.then((willDelete) => {
  if (willDelete) {
    window.location.assign("login.php");
  } 
});

    </script>
<?php
mysqli_close($conn);
exit();
    //echo "succses";
  }
  else {
   // header("Location: ../index.html");
   echo "Error: " . $sql . "<br>" . $conn->error;

  }
}
}