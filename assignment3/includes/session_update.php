<?php
    session_start();
    if(isset($_SESSION['logged_in'])){
        if(time() < $_SESSION['expire']){
            $minutesToExpire = 10;
            $_SESSION['expire'] = time();
            $_SESSION['expire'] += 60*$minutesToExpire;
        }
        else{
            header("Location: logout.php");
        }
    }
?>