<?php

    include_once '../lib/Database.php';
    include_once '../helpers/Format.php';

    include_once '../PHPmailer/PHPMailer.php';
    include_once '../PHPmailer/SMTP.php';
    include_once '../PHPmailer/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Register{

        public $db;
        public $fr;

       public function __construct()
        {
            $this->db = new Database();
            $this->fr = new Format();
        }


        public function AddUser($data){

            function sendemail_varifi($name, $email, $v_token){
                $mail = new PHPMailer(true);
                $mail->isSMTP(); 
                $mail->SMTPAuth   = true; 

            }
          
            $name = $this->fr->validation($data['name']);
            $phone = $this->fr->validation($data['phone']);
            $email = $this->fr->validation($data['email']);
            $password = $this->fr->validation($data['password']);
            $v_token = md5(rand());


            if (empty($name) || empty($phone) || empty($email) || empty($password)) {
                $error = "Fild Must Not Be Empty";
                return $error;
            }else {
                $e_query = "SELECT * FROM tbl_user WHERE email='$email'";
                $check_email = $this->db->select($e_query);

                if ($check_email > 0) {
                    $error = "This Email Is Alrady Exisit";
                    return $error;
                    header("location:register.php");
                }else{
                    $insert_query = "INSERT INTO tbl_user(name, email, phone, password, v_token) VALUES('$name', '$email', '$phone', 'password, '$v_token')";

                    $insert_row = $this->db->insert($insert_query);

                    if ($insert_row) {
                        sendemail_varifi($name, $email, $v_token);
                        $sucess = "Resistration Sucessfull. Plase check your email inbox for varifi email";
                        return $sucess;
                    }else {
                        $error = "Registration Failed";
                        return $error;
                    }
                }
            }

        }
    }

?>