
<?php 

include('../templates/head.php');
include('../app/classes.php');
$student->loginUser();

?>

<body class="bg">
<header id="header" class="fixed-top d-flex align-items-center   ">
    <div class="container d-flex align-items-center mt-5">

      <div class="logo mr-auto pb-5">
          
        <h1 class="text-light"><a href="../index.php">Quezon City<br><h4 class="ml-5">University</h4> </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    

    </div>
  </header><!-- End Header -->
<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center " >
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm" style="background:transparent; opacity:0.9">
                        <div class="card-header">
                            <h3 class="mb-0 text-center text-white">Login</h3>
							
                        </div>
                        <div class="card-body">
                            <form class="form" action="login.php" method="POST">
                                <div class="form-group">
                                    <label for="uname1" class="lead text-white">Student Number</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="studno" oninput="this.value=this.value.replace(/[^0-9^-]/g,'');"  required>
               
                                </div>
                                <div class="form-group">
                                    <label for="uname1" class="lead text-white">First Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Fname"  required>
               
                                </div>
                                <div class="form-group">
                                    <label for="lname1" class="lead text-white">Last Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Lname"  required>
               
                                </div>
                            
                                <button type="submit" class="btn btn-success btn-lg float-right" name="Submit">Login</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->



</body>
</html>