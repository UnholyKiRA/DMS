<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['pdaid'] == 0)) {
  header('location:logout.php');
} else {


  if (isset($_POST['submit'])) {

    $adminid = $_SESSION['pdaid'];
    $adname = $_POST['adminname'];

    $query = mysqli_query($con, "update tbladmin set AdminName='$adname' where ID='$adminid'");
    if ($query) {
      $msg = "Admin profile has been updated.";
    } else {
      $msg = "Something Went Wrong. Please try again.";
    }
  }
?>



  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DMS</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">


    <!-- Navbar -->

    <?php include('include/header.php'); ?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php include('include/sidebar.php'); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Admin Profile</li>
          </ol>
          <p style="font-size:16px; color:red" align="center"> <?php if ($msg) {
                                                                  echo $msg;
                                                                }  ?> </p>
          <!-- Icon Cards-->

          <!-- Area Chart Example-->
          <form name="directory" method="post">
            <?php

            $adminid = $_SESSION['pdaid'];
            $ret = mysqli_query($con, "select * from tbladmin where ID='$adminid'");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

            ?>

              <!-- DataTables Example -->

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" id="adminname" name="adminname" class="form-control" required="required" autofocus="autofocus" value="<?php echo $row['AdminName']; ?>">
                      <label for="firstName">Admin Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" id="mobilenumber" name="mobilenumber" class="form-control" required="required" maxlength="10" readonly="true" value="<?php echo $row['MobileNumber']; ?>">
                      <label for="lastName">Mobile Number</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="email" name="email" class="form-control" readonly="true" required="required" value="<?php echo $row['Email']; ?>">
                  <label for="inputEmail">Email address</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-label-group">
                      <input type="text" id="adminregdate" name="adminregdate" class="form-control" readonly="true" required="required" value="<?php echo $row['AdminRegdate']; ?>">
                      <label for="inputPassword">Admin Registration Date</label>
                    </div>
                  </div>


                </div>
              </div>


            <?php } ?>
            <p style="text-align: center; "><button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Update</button></p>
          </form>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php include('include/footer.php'); ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

  </html>
<?php }  ?>