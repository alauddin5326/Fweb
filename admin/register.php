<?php

    include_once '../classes/register.php';
    $re = new Register();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $addUser = $re->AddUser($_POST);

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

    <title>Registration From</title>
  </head>

  <body>
    
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <spam>

                      <?php
                      if (isset($addUser)) {
                      ?>  
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?=$addUser?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                      <?php
                      }
                      ?>
                      
                    </spam>
                    <div class="card">
                        <h5 class="card-header">Registration Form</h5>
                        <div class="card-body">
                            <form action="" method="POST">
                            <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" name="name" class="form-control" >
                                </div>

                                <div class="form-group">
                                  <label>Phone</label>
                                  <input type="text" name="phone" class="form-control" >
                                </div>

                                <div class="form-group">
                                  <label>Email address</label>
                                  <input type="email" name="email" class="form-control" >
                                </div>

                                <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" name="password" class="form-control" >
                                </div>

                            <button type="submit" class="btn btn-success">Sign Up</button>  
                        </form>
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