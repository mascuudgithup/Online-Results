<?php  

session_start();
if($_SESSION['username']==''){
    header("Location: ../login/auth-login.php");
 
  die();
}
// session_start();
// if(!$_SESSION['username']){
//     header("location : ../login/auth-login.php");
//     die();
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>JUST UNIVERSITY</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
 	<!-- CSS -->
     <link rel="stylesheet" href="../../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
   <script src="https://www.gstatic.com/charts/loader.js"></script>
   
    <!-- Favicon icon -->
    <script src="https://kit.fontawesome.com/db76417cf2.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="../../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../../assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>

    <script src="../js/companetion.css" ></script>
  

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>










    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <img class="img img-fluid" src="../images/avatar.png" style="border-radius: 50%;" alt="">
                        <!-- <i class="feather icon-trending-up"></i> -->
                    </div>
                    <span class="b-title"><?php  echo $_SESSION['username']?></span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
<<<<<<< HEAD
            <?php  
            
            if ($_SESSION['type']=="admin")
            {
        
           echo '   <div class="navbar-content scroll-div">
           <ul class="nav pcoded-inner-navbar">
               <li class="nav-item pcoded-menu-caption">
                   <label></label>
               </li>
               <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                   <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
               </li>
               <li class="nav-item pcoded-menu-caption">
                   <!-- <label>UI Element</label> -->
               </li>
               <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                   <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user"></i></span><span class="pcoded-mtext">Users</span></a>
                   <ul class="pcoded-submenu">
                       <li class=""><a href="users.php" class="">Manage Users</a></li>
                      
                   </ul>
               </li>
               <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                   <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-school"></i></span><span class="pcoded-mtext">Manage Collections</span></a>
                   <ul class="pcoded-submenu">
                       <li class=""><a href="classes.php" class="">Classes</a></li>
                       <li class=""><a href="Simester.php" class="">Semester</a></li>
                       <li class=""><a href="subjects.php" class="">Subjects</a></li>
                      
                   </ul>
               </li>
               
               <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                   <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-graduation-cap"></i></span><span class="pcoded-mtext">Students</span></a>
                   <ul class="pcoded-submenu">
                       <li class=""><a href="Students.php" class="">Manage Students</a></li>
                       <li class=""><a href="view_students.php" class="">View Students</a></li>
                      
                      
                   </ul>
               </li>
              
               <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                   <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-square-poll-horizontal"></i></span><span class="pcoded-mtext">Results</span></a>
                   <ul class="pcoded-submenu">
                       <li class=""><a href="results.php" class="">Manage Results</a></li>
                       <li class=""><a href="view-results.php" class="">View Results</a></li>

                   </ul>
               </li>
              
              
              
              
               <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                   <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                   <ul class="pcoded-submenu">
                       <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                       <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                   </ul>
               </li>
               
           </ul>
       </div>';
            }
            else if ($_SESSION['type']=="user")
            echo '   <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label></label>
                </li>
                
               
                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-square-poll-horizontal"></i></span><span class="pcoded-mtext">Results</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="Students.php" class="">Manage Results</a></li>
                        <li class=""><a href="view_students.php" class="">View Results</a></li>
 
                    </ul>
                </li>
               
               
               
               
                
            </ul>
        </div>';
            
            ?>
         
=======
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label></label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <!-- <label>UI Element</label> -->
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user"></i></span><span class="pcoded-mtext">Users</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="users.php" class="">Manage Users</a></li>
                            <li class=""><a href="combinanational.php" class="">create combanitional</a></li>
                           
                        </ul>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-school"></i></span><span class="pcoded-mtext">Manage Collections</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="classes.php" class="">Classes</a></li>
                            <li class=""><a href="Simester.php" class="">Semester</a></li>
                            <li class=""><a href="subjects.php" class="">Subjects</a></li>
                           
                        </ul>
                    </li>
                    
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-graduation-cap"></i></span><span class="pcoded-mtext">Students</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="Students.php" class="">Manage Students</a></li>
                            <li class=""><a href="view_students.php" class="">View Students</a></li>
                           
                           
                        </ul>
                    </li>
                    
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                   <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-square-poll-horizontal"></i></span><span class="pcoded-mtext">Results</span></a>
                   <ul class="pcoded-submenu">
                       <li class=""><a href="results.php" class="">Manage Results</a></li>
                       <li class=""><a href="view-results.php" class="">View Results</a></li>

                   </ul>
               </li>
                   
                   
                   
                   
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
>>>>>>> 41cf7d766d4561c56d0ca4e9b2e90b2466fcb937
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <!-- <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div> -->
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <!-- <p class="m-b-0">NEW</p> -->
                                </li>
                                <li class="notification">
                                    <!-- <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div> -->
                                </li>
                                <li class="n-title">
                                    <!-- <p class="m-b-0">EARLIER</p> -->
                                </li>
                                <li class="notification">
                                    <!-- <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div> -->
                                </li>
                                <li class="notification">
                                    <!-- <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div> -->
                                </li>
                            </ul>
                            <!-- <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div> -->
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="../images/avatar.png" class="img-radius" alt="User-Profile-Image">
                                
                                <span><?php echo $_SESSION['username'] ?></span>
                                <a href="../login/logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>