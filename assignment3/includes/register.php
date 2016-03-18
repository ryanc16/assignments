<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include('dbconnect.php');
        if($db){
            if(isset($_POST['registerEmail']) && isset($_POST['registerPass1'])){
                if(!empty($_POST['registerEmail']) && !empty($_POST['registerPass1'])){
                    $email = mysqli_real_escape_string($db, $_POST['registerEmail']);
                    $pass1 = $_POST['registerPass1'];
                    $pass2 = $_POST['registerPass2'];
                    $query = "SELECT email FROM users WHERE email = '".$email."'";
                    $result = mysqli_query($db,$query);
                    if($result && mysqli_num_rows($result) < 1){
                        if($pass1 == $pass2){
                            $query = "INSERT INTO users (email,password) VALUES('".$email."','".sha1($pass1)."')";
                            $result = mysqli_query($db,$query);
                            if($result){
                                $minutesToExpire = 10;
                                $_SESSION['expire'] = time();
                                $_SESSION['expire'] += 60*$minutesToExpire;
                                //.", ".date("M d, Y h:i:s a",$_SESSION['expire'])
                                $_SESSION['email'] = $email;
                                $_SESSION['logged_in'] = 1;
                                header("Location: ../members.php");
                            }
                            else header("Location: ../members.php");
                        }
                        else header("Location: ../members.php?register_error=passwords_not_match");
                    }
                    else header("Location: ../members.php?register_error=user_already_exist");
                }
                else header("Location: ../members.php?register_error=empty_fields");
            }
            else header("Location: ../members.php?register_error=empty_fields");
        }
        else header("Location: ../members.php?register_error=db_error");
    }
    else die;
?>