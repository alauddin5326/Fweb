
<?php

include_once '../classes/Adminlogin.php';
$al = new AdminLogin();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// echo '<pre>';
//       print_r($_POST);
//       die();
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $chkLogin = $al->LoginUser($email, $password);
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login From</title>
  </head>

  <body>
    
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">

                <spam>

                      <?php
                      if (isset($_SESSION['status'])) {
                      ?>  
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?=$_SESSION['status'] ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                      <?php
                      }
                      ?>
                      
                    </spam>


                    <div class="card">
                        <h5 class="card-header">Login Form</h5>
                        <div class="card-body">
                            <form method="POST">
                            <div class="form-group">
                                  <label>Email address</label>
                                  <input value="alauddin5326@gmail.com" type="email" name="email" class="form-control" >
                                </div>

                                <div class="form-group">
                                  <label>Password</label>
                                  <input value="123456" type="Password" name="password" class="form-control" >
                                </div>
                                
                            <button type="submit" class="btn btn-success">Login</button>  
                            <a href="" class="btn btn-primary">sign Up</a>
                            <a href="#" class="float-right">Forget our Password</a>
                        </form>

                        <hr>
                        <h5>Did not receive your varification email <a href="#">Resend</h5>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>