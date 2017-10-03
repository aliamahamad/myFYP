<?php 
//include the database connectivity setting
include ("inc/dbconn.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title> Student Registration System </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-register mx-auto mt-5">
        <div class="card-header" align="center">
          <b><h4> Daftar Akaun </h4></b>
        </div>
        <div class="card-body">
          <form role="form" method="GET" action="" name="">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label> First name </label>
                  <input type="text" class="form-control" name="fname" placeholder="Enter first name" required>
                </div>
                <div class="col-md-6">
                  <label>Last name</label>
                  <input type="text" class="form-control" name="lname" placeholder="Enter last name" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" maxlength="8" placeholder="Password">
                </div><br>
                <div class="col-md-6" >
                  <label>Confirm password</label>
                  <input type="password" class="form-control" name="confirmpass" maxlength="8" placeholder="Confirm password">
                </div>
              </div>
              <div>
                  <label> Role </label>
                  <select name="role" class="form-control">
                    <option value="pengguna"> Pengguna </option>
                  </select>
                </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit" value="Daftar"> Daftar </button>
            <!-- <a class="btn btn-primary btn-block" href="success_reg.php" input type="submit">Register</a> -->
          </form>

          <div class="text-center">
            <a class="d-block small mt-3" href="index.php">Login Page</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <?php
        //check staff name input by the user if null
        if(!isset($_GET['email'])){
          
        }
        else{//if there's user search - then perform db search
        //Create SQL query
          $fname = $_GET['fname'];
          $lname = $_GET['lname'];
          $email = $_GET['email'];
          $password = $_GET['password'];
          $role = $_GET['role'];

          $query = "INSERT INTO members(fname, lname, email, password, role) 
          values ('$fname','$lname','$email','$password','$role')";
          //Execute the query
          $qr = mysqli_query ($db, $query);
          if($qr == false){
            echo ("Query cannot be executed!<br>");
            echo ("SQL Error : " . mysqli_error($db));
          }
          else{//insert successfull
            #echo "The new user has been saved...<br>";
            #echo "<a href='php-db-template.php?staffname=$firstname'>View $firstname $lastname</a>";
          }
        }
        ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>