<?php
session_start();
include'./includes/connection.php';
 if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
} 


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
</head>
<style>
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
                                       
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
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
                                        <li><a class="active" href="profile.php">My Profile</a></li>
                                        <li><span style="color:#ff8484;"> welcome &nbsp;<?php echo $_SESSION['username']; ?> <i class="ti-angle-down"></i>  </span>
                                    
                                    <ul class="submenu">
                                    <li><a href="login.php">Logout</a></li>
                                            </ul>
                                            </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3  col-lg-2 d-none d-lg-block">
                        
                        <ul>
                                    <li><span style="color:red"> welcome &nbsp;</span></li>
                                    
                                </ul>
                    
                        
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
    <br>
 <ul class="nav nav-pills mb-3 justify-content-center" style="background-color: #3d3b34;padding-top: 12px;padding-bottom: 12px;" id="pills-tab" role="tablist">
     <li class="nav-item" role="presentation">
       <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Appointment Booking</button>
     </li>
     <li class="nav-item" role="presentation">
       <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">My bookings</button>
     </li>
     
   </ul>


   <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
         <section class="vh-100">
         <div class="appointment_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <div class="appiontment_thumb d-none d-lg-block">
                        <img src="img/appointment/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6">
                    <div class="appointment_info">
                        <div class="opacity_icon d-none d-lg-block">
                            <i class="flaticon-balance"></i>
                        </div>
                        <h3>Make an Appointment</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <form  method="post" >
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                    
                                            <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="email" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="tel" name="phone_num" placeholder="Phone no." required>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <input id="datepicker" name="appointment_date" placeholder="Appointment date" required>
                
                                    </div>

                                    <div class="col-xl-6 col-md-6">
                                    <select name="user_case" class="form-select" aria-label="Default select example" required>
                                    <option selected value="1">Family Case</option>
                                    <option value="2">Consumer Case</option>
                                    <option value="3">Criminal Case</option>
                                    <option value="4">Business Case</option>
                                    </select>                
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="messages" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appoinment_button">
                                            <button class="boxed-btn5" type="submit" name="appointment" >Submit</button>
                                        </div>
                                    </div>
                                </div>
        
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
           </section>
 
     </div>
     <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
     <section class="content">
      <div class="container-fluid">
     
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-responsive-lg">
                  <thead>
                  <tr>
                    <th> Id</th>
                    <th style="min-width: 9em;">Name</th>
                    <th>Email  </th>
                    <th>Phone Number </th>
                    <th> Appointment_Date </th>
                    <th>Messages</th>
                   <th> User Case </th>
                    <th>Cancel</th>
                    <th>Update</th>

</tr>

                  </thead>
                  <tbody>
                  <?php
                        $usr_id = $_SESSION['id'];
                        $sql = "SELECT * FROM users_appointments WHERE users_info_id = '$usr_id' ORDER BY id DESC";
                        $result = mysqli_query($conn,$sql);
                        if($result->num_rows > 0) {

                        while($row = mysqli_fetch_array($result)){
                            $u_case =  $row['user_case'];
                    ?>
                    <tr>
                    <td><?php echo $row['id'] ?></td>
                      <td style="min-width: 9em;"><?php
                      echo $row['name'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['phone_num'] ?></td>
                      <td><?php echo $row['appointment_date'] ?></td>
                      <td><?php echo $row['messages'] ?></td>
                      <td><?php if( $u_case == 1){
                         echo 'Family Case';
                      } elseif($u_case == 2){
                        echo 'Consumer Case';
                      }elseif($u_case == 3){
                        echo 'Criminal Case';
                      }else{
                        echo 'Business Case';
                      } ?></td>
                        <td><a href="#" data-toggle="modal" data-target="#deletee<?php echo $row['id'] ?>"><i class="fas fa-trash-alt text-danger"></i></a></td>
                        <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>
                    </tr>

                    <?php
 
          include 'update_user.php';
 
                    
                    ?>
 <!-- Delete Modal -->
                    <div class="modal fade" id="deletee<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="Label<?php echo $row['id'] ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="Label<?php echo $row['id'] ?>">Appointment Cancellation </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          Do you want to cancel the appointment  <?php echo $row['name'] ?> ?
                          </div>
                          <div class="modal-footer">
                            <form method="post" action="./includes/server.php">
                              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                              <input type="submit" class="btn btn-danger" name="delete_appointment" value="Delete">
                            </form>
                          </div>
<!--end delete modal-->
                    <?php }} else { ?> <tr>
                      <td><?php echo  ""; ?></td>
                      <td style="min-width: 9em;"><?php
                      echo ""; ?></td>
                      <td><?php echo  ""; ?></td>
                      <td><?php echo  ""; ?></td>
                      <td><?php echo  ""; ?></td>
                      <td><?php echo  ""; ?></td>
                      <td><?php echo  ""; ?></td>
                
                        <td><a href="#" data-toggle="modal" data-target="#deletee<?php echo $row['id'] ?>"><i class="fas fa-trash-alt text-danger"></i></a></td>
                        <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>

                    </tr>
                    <?php } ?>


                 </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
     </div>
        </div>
 
   

    <!-- bradcam_area_start  -->
    <!-- <div class="bradcam_area">
        <div class="bradcam_inner bradcam_bg d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Finest And Strongest Law <br>
                                Firm Win The World</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- bradcam_area_end  -->
    <!-- practice_area_start -->
    <div class="practice_area practice_area2">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/1.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3>Business Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/2.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-courthouse"></i>
                                <h3>Finance Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/3.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-judge"></i>
                                <h3>Family Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-jury"></i>
                                <h3>Education Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- practice_area_end -->
    <!-- about_area _start  -->
    <div class="about_area">
        <div class="opacity_icon d-none d-lg-block">
            <i class="flaticon-balance"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <h3>Finest And Strongest Law <br>
                            Firm Win The World</h3>
                        <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                            suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                            don't look even slightly believable. </p>
                        <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <div class="image_hover">
                                <div class="hover_inner">
                                    <h2>93%</h2>
                                    <span>Success Case</span>
                                </div>
                            </div>
                        </div>
                        <h3>About Lawyer Justice</h3>
                        <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                            suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                            don't look even slightly believable. </p>
                        <div class="total_cases">
                            <div class="single_cases">
                                <h4>879</h4>
                                <p>Total Cases</p>
                            </div>
                            <div class="single_cases">
                                <h4>787</h4>
                                <p>Case Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area _end -->

    <!-- testmonial_area_start  -->
    <div class="testmonial_area testmonial_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end  -->

     <!-- our_loyers-start  -->
     <div class="our_loyers">
        <div class="container">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-60">
                                <h3>Our Lawyers</h3>
                                <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered alteration in some.</p>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/1.png" alt="">
                        </div>
                        <h3>Henry Miller</h3>
                        <span>Family Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/2.png" alt="">
                        </div>
                        <h3>Jon Anderson</h3>
                        <span>Consumer Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/3.png" alt="">
                        </div>
                        <h3>Jaky Nadan</h3>
                        <span>Criminal Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_loyers-end  -->
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
      //  $( ".selector" ).datepicker({ dateFormat: 'yy-mm-dd' });

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

if (isset($_POST['appointment'])) {
  
    $users_info_id = $_SESSION['id'];
    $name = $_POST['name'];
    
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $appointment_date= $_POST['appointment_date'];
    $messages= $_POST['messages'];
    $user_case =  $_POST['user_case'];
  
    $sql = "INSERT INTO users_appointments (users_info_id,name,email,phone_num,appointment_date,messages,user_case) 
    VALUES ('$users_info_id','$name','$email','$phone_num','$appointment_date','$messages','$user_case')";
    
    ?>

<script>
swal({
                title: "Appointment Booking",
                text: "Once you book an appointment, you cannot back down. You can cancel the appointment from the Appointments tab later",
                icon: "success",
                button: true,
                
}).then((willDelete) => {
        if (willDelete) {
           // form.submit();
          // $('form').submit();
          swal("The appointment has been booked successfully", {
      icon: "success",
    });
    
    <?php
    if (mysqli_query($conn,$sql)) {
        //$last_id = mysqli_insert_id($conn);
        //$_SESSION['id'] = $last_id;
        mysqli_close($conn);
        //sleep(10);
        ?>
        setTimeout(() => {window.location.assign("profile.php"); }, 3000);
            

        <?php

      }
      else {
       // header("Location: ../index.php");
       echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    ?>
        } 
        });

        </script>
    <?php
     
    
  
    
  }
?>