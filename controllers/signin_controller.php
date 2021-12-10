<?php
    include("agent_controller.php");
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $validator = clientValid($email,$password);

    if($validator == "person"){
        header("location: ../priceofschemes.php");
    } else if($validator == "agent"){
        header("location: ../allianzagentview.php");
    } 
    else{
        header("location: ../allianzsignin.php");
    }
?>