<?php 
    session_start(); 
    if($_SESSION ["prenom"] == "" ){
        header('Location: localhost/eval-e2.com/admin.php');
        exit();

      }else{
        header('Location: localhost/eval-e2.com/login.php');
        exit();
    }

    $nomPage = "Admin";
    $_SESSION["prenom"];
    include("includes/header.php"); 
    include("includes/content.php");
    include("includes/footer.php") 


?>