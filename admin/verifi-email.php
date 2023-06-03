<?php

    include_once '../lib/Session.php';
    Session::();
    include_once '../lib/Database.php';
    $db = new Database();

    if (isset($_GET['token'])) {

        $token = $_GET['token'];
        $query = "SELECT v_token, v_status FROM tbl_user WHERE v_token='$token'";
        $resul $db->select($query);

        if ($result != false) {

            $rows = mysqli_fetch_assoc($result);
            if ($rows['v_token'] == 0){

                $click_token = $rows['v_token'];
                $update_status = "UPDATE tbl_user SET v_status='1' WHERE v_token='$click_token'";

                $update_result = $db->update($update_status);

                if ($update_result) {
                    $_SESSION['status'] = "Your Account Has Been Varified successfully";
                    header('location:login.php');
                }else{
                    $_SESSION['status'] = "Varification Filed !";
                    header('location:login');
                }

            }else{
                $_SESSION['status'] = "This Email Is Already Varified Plase Login";
                header('location:login.php');
            }

        }else{
            $_SESSION['status'] = "This Token Does Not Exsist !";
            header('location:login.php');
        }

    }else {
        $_SESSION['status'] = "Not Allowed";
        header('location:login.php');

    }
?>