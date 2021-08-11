<?php

require_once('../app/classes.php');

$userdetails = $student->get_user_data();
//COPY THIS EVERY PAGES PARA BUMALIK PAG HINDI  NAKA SET ANG Userdetails GEGE

$StudentIDNumber = $_SESSION['login'];
if (!isset($userdetails)) {
    header('location: ../index.php');
}

$student->SubmitBio();
$student->UpdateBio();

$student->Upload();
// print_r($userdetails);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quezon City University</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/logo.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="../assets/css/student.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/modified.css">


</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Student Portal</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->

            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Profile" aria-expanded="true" aria-controls="collapseTry">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Profile</span>
                </a>
                <div id="Profile" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile :</h6>
                        <a class="collapse-item" href="#GeneralSettingsInformation">General Settings</a>
                        <a class="collapse-item" href="#DataInformations">Informations</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading ">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Messages</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Reciever Inbox</h6>
                        <a class="collapse-item" href="#InboxMessage">Inbox Message</a>
                        <a class="collapse-item" href="#ChatMessageFromClassmates">Chat Message</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#AnnouncementFromAdmin">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Announcement</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#listofCLassSubject">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Class Subject</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#ForumForStudents">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Forum</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Random</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="#">Random</a>
                        <a class="collapse-item" href="#">Random</a>
                        <a class="collapse-item" href="#">Random</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Random </h6>
                        <a class="collapse-item" href="#">Random</a>
                        <a class="collapse-item" href="b#">Random</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <button class="nav-link">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Donations</span></button>
            </li> -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->


                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <div class="text-center d-none d-md-inline">
                        <a href="#"> <i class="fa fa-bars" id="sidebarToggle"></i></a>
                    </div>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>

                            </div>
                        </div>
                    </form>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>

                            </a>

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">

                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>

                                        </div>


                                    </div>

                                </form>
                            </div>

                        </li>


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages CHANGE THIS -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->

                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                    <?php

                                    $student->getFullName();
                                    ?>

                                </span>
                                <?php $student->UploadAvatar() ?>
                                <i class="fas fa-caret-down"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item newStyle" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item newStyle"  href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item newStyle" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item newStyle" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-xl-9 col-lg-7">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex align-items-between">
                                    <div class="col mr-2">

                                        <h3 class="m-0 font-weight-bold text-info ">Your Profile</h3>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h2 class="font-weight-bold">
                                                Hi <?php $student->getFullName(); ?>,
                                                <small class="text-muted">You have completed 70% of your weekly targets. congrats</small>
                                            </h2>
                                            <div class="m-5">
                                                <button class="btn btn-warning">Seat Goals</button>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../assets/img/learning2.jpg" alt="QCU" style="height:250px; width:200px;">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                      
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body" >
                                    <div class="row no-gutters align-items-start">
                                        <div class="col mr-2">
                                            <p class=" text-center font-weight-bold text-info ">Date Today </p>

                                            <h3 class="text-center" id="date"></h3>
                                        </div>

                                    </div>

                                </div>
                                <div class="card-bod">
                                    <div class="row no-gutters align-items-start">
                                        <div class="col mr-2 h-100">
                                            <blockquote class="blockquote text-center">
                                                <p class="" id="factDisplay"></p>
                                                <footer class="blockquote-footer">Someone famous name <cite title="Source Title">Vincent Fernandez</cite></footer>
                                            </blockquote>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-xl-9 col-lg-7">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex align-items-between">
                                    <div class="col mr-2">

                                        <h4 class="m-0 font-weight-bold text-info ">Your Assignment</h4>
                                    </div>

                                    <div class="col-auto">
                                        <a href="#" class="text-primary">View More</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <blockquote class="blockquote text-center">
                                                <p class="mb-0 font-weight-bold">English Lesson</p>
                                                <footer class="footer"><small> Question & Answer</small></footer>
                                            </blockquote>

                                            <img src="../assets/img/learning2.jpg" class="img-fluid img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm">
                                            <blockquote class="blockquote text-center">
                                                <p class="mb-0 font-weight-bold">English Lesson</p>
                                                <footer class="footer"><small> Question & Answer</small></footer>
                                            </blockquote>

                                            <img src="../assets/img/learning2.jpg" class="img-fluid img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm">
                                            <blockquote class="blockquote text-center">
                                                <p class="mb-0 font-weight-bold">English Lesson</p>
                                                <footer class="footer"><small> Question & Answer</small></footer>
                                            </blockquote>

                                            <img src="../assets/img/learning2.jpg" class="img-fluid img-thumbnail" alt="">
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex align-items-between">
                                    <div class="col mr-2">

                                        <h4 class="m-0 font-weight-bold text-info ">Your Tasks <i class="fa fa-tasks float-right" aria-hidden="true"></i></h4>
                                    </div>


                                </div>
                                <div class="card-body m p-0">

                                    <div class="list-group m-0 p-0 ">
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px yellow;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px blue;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px red;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px green;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px black;">Your Assignment</a>


                                    </div>
                                    <div class="d-flex justify-content-center m-2">
                                        <button type="button" class="btn btn-outline-info" style="border-radius:20px 0 20px 0; height:40px; width:200px"> <i class="fa fa-plus" aria-hidden="true"></i> Create New</button>

                                    </div>




                                </div>
                            </div>
                        </div>

                        <div class="col-xl-9 col-lg-7">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex align-items-between">
                                    <div class="col mr-2">

                                        <h4 class="m-0 font-weight-bold text-info ">Learning Materials</h4>
                                    </div>

                                    <div class="col-auto">
                                        <a href="#" class="text-primary">View More</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <blockquote class="blockquote text-center">
                                                <p class="mb-0 font-weight-bold">Books Lesson</p>
                                                <footer class="footer"><small> Question & Answer</small></footer>
                                            </blockquote>

                                            <img src="../assets/img/learning2.jpg" class="img-fluid img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm">
                                            <blockquote class="blockquote text-center">
                                                <p class="mb-0 font-weight-bold">Math Lesson</p>
                                                <footer class="footer"><small> Question & Answer</small></footer>
                                            </blockquote>

                                            <img src="../assets/img/learning2.jpg" class="img-fluid img-thumbnail" alt="">
                                        </div>
                                        <div class="col-sm">
                                            <blockquote class="blockquote text-center">
                                                <p class="mb-0 font-weight-bold">Programming Lesson</p>
                                                <footer class="footer"><small> Question & Answer</small></footer>
                                            </blockquote>

                                            <img src="../assets/img/learning2.jpg" class="img-fluid img-thumbnail" alt="">
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">

<!-- Project Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-between">
        <div class="col mr-2">

            <h4 class="m-0 font-weight-bold text-info ">Your Subject <i class="fas fa-book-reader float-right"></i> </h4>
        </div>

    
    </div>
    <div class="card-body m p-0">

        <div class="list-group m-0 p-0 ">
            <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px yellow;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px blue;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px red;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px green;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow" style="border-left: solid 5px black;">Your Assignment</a>


        </div>
        <div class="d-flex justify-content-center m-2">
            <button type="button" class="btn btn-outline-info" style="border-radius:20px 0 20px 0; height:40px; width:200px"> <i class="fa fa-plus" aria-hidden="true"></i> Create New</button>

        </div>




    </div>
</div>
</div>



                    </div>

                </div>

                <!-- Content Row -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <!-- <span>Copyright &copy; Bootstrap Made By</span> -->
                        <a href="https://github.com/vincefernandez">Vincent Fenandez</a>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../app/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <script src="../assets/js/modified.js"></script>
 

    <!-- Page level plugins -->



</body>


</html>