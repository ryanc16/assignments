<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include('dbconnect.php');
        if($db){
            if(isset($_POST['loginEmail']) && isset($_POST['loginPass'])){
                if(!empty($_POST['loginEmail']) && !empty($_POST['loginPass'])){
                    $email = mysqli_real_escape_string($db, $_POST['loginEmail']);
                    $pass = $_POST['loginPass'];
                    $query = "SELECT email,password,username FROM users WHERE email = '".$email."'";
                    $result = mysqli_query($db,$query);
                    if($result && mysqli_num_rows($result) == 1){
                        $row = mysqli_fetch_array($result);
                        if($email == $row[0] && sha1($pass) == $row[1]){
                            $minutesToExpire = 10;
                            $_SESSION['expire'] = time();
                            $_SESSION['expire'] += 60*$minutesToExpire;
                            //.", ".date("M d, Y h:i:s a",$_SESSION['expire'])
                            $_SESSION['email'] = $row[0];
                            $_SESSION['logged_in'] = 1;
                            //$_SESSION['role'] = $row[2];
                            $_SESSION['name'] = $row[2];
                            header("Location: ../members.php");
                        }
                        else header("Location: ../members.php?login_error=wrong_pwd");
                    }
                    else header("Location: ../members.php?login_error=user_not_exist");
                }
                else header("Location: ../members.php?login_error=empty_fields");
            }
            else header("Location: ../members.php?login_error=empty_fields");
        }
        else header("Location: ../members.php?login_error=db_error");
    }
    else die;
?>