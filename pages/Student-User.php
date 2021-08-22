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

<?php  require_once('../templates/head.php');
       require_once('../templates/header.php'); 
        ?>


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

                                        <h4 class="m-0 font-weight-bold text-info ">Your Assignment <a href="#"><i class="fa fa-tasks float-right" aria-hidden="true"></i></a></h4>
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
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px yellow;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px blue;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px red;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px green;">Your Assignment</a>
                                        <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px black;">Your Assignment</a>


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

                                        <h4 class="m-0 font-weight-bold text-info ">Learning Materials <i class="fa fa-tasks float-right" aria-hidden="true"></i></h4>
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
            <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px yellow;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px blue;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px red;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px green;">Your Assignment</a>
            <a href="#" class="list-group-item list-group-item-action hvr-grow d-flex justify-content-center" style="border-left: solid 5px black;">Your Assignment</a>


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