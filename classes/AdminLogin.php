<?php

    include_once '../lib//Session.php';
    Session::loginCheak();

    include_once '../lib/Database.php';
    include_once '../helpers/Format.php';

    class AdminLogin{

        private $db;
        private $fr;

        public function __construct()
        {
            $this->db = new Database();
            $this->fr = new Format();
        }

        public function LoginUser($email, $password){


   

            $email = $this->fr->validation($email);
            $password = $this->fr->validation($password);


            if (empty ($email) || empty($password)) {
                $error = "Filds Must not be empty !";
                return $error;
            }else{
                $select = "SELECT * FROM tbl_user WHERE email='$email' AND password ='123456'";
                // $select = "SELECT * FROM tbl_user WHERE email='$email' AND password ='$password'";
                $result = $this->db->select($select);


                // echo '<pre>';
                // print_r($result);
                // die();
    

                 if (mysqli_num_rows($result) > 0) {

                    $row = mysqli_fetch_assoc($result);

                    if ($row['v_status'] == 1) {

                        Session::set('login', true);
                        Session::set('username', $row['username']);
                        header('location:index.php');

                    }else {
                        $error = "Please first verifi your email";
                        return $error;
                    }

                }else {
                    $error = "Invalid Email Or Password";
                    return $error;
                }
            }

        }
    }
?>