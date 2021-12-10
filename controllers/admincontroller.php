<?php
    include("agent_controller.php");
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(agentValid($email,$password)){
        header("location: ../allianzagentview.php");
    }
    else{
        header("location: ../allianzsignin.php");
    }
?>
