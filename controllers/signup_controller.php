<?php
    include("agent_controller.php");
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['GhanaID'];

    if(createClient($name,$email,$id,$password)){
        echo "Sign up successful";
        header("location: ../allianzsignin.php");
    } else {
        echo "Error";
    }
    
?>