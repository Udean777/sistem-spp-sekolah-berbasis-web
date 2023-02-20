<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="udin" AND $password=="12345")
    {
        $_SESSION["username"]=$username;
        header("location:home_admin.php");
    }else{
        header("location:index.php?login_error");
    }
?>