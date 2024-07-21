
<?php

error_reporting(0);
include('admin/include/dbconnection.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Directory Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <div class="container">
      <a class="navbar-brand" href="index.php"> Directory Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="admin/">Admin Login
              <span class="sr-only">(current)</span>
            </a>
          </li>
     
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
<form name="search" method="post" action="searchdata.php">
    <!-- Jumbotron Header -->
       <div class="card my-4">
          <h5 class="card-header">Search By Name / Contact Number /Prefession </h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" name="searchdata" placeholder="Search for..." required="true">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </div>
          </div>
        </div>
</form>




    <!-- Page Features -->
  
    <div class="row text-left">
<?php
$ret=mysqli_query($con,"select * from tbldirectory where  (Status=1)");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
          

  <table class="table table-bordered">

      <tr>
        <th colspan="2">  <h4 class="card-title" align="center"><?php  echo $row['FullName'];?></h4></th>
      </tr>
      <tr>
        <th>Mobile Number</th>
        <td><?php  echo $row['MobileNumber'];?></td>
      </tr>

           <tr>
        <th>Email</th>
        <td><?php  echo $row['Email'];?></td>
      </tr>

           <tr>
        <th>Profession</th>
        <td><?php  echo $row['Profession'];?></td>
      </tr>


           <tr>
        <th>Address</th>
        <td><?php  echo $row['Address'];?></td>
      </tr>

         <tr>
        <th>City</th>
        <td><?php  echo $row['City'];?></td>
      </tr>
    </table>

          </div>
        </div>
      
      </div>
    <?php } }?>

      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">   <span>DMS-Directory Management System</span></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
