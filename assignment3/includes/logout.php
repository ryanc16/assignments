<?php
session_start();
if(isset($_SESSION['logged_in'])){
    $_SESSION = array();
    session_destroy();
}
header("Location: ../members.php")
?>