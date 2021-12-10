<?php
    include_once ('../controllers/agent_controller.php');
    if(isset($_POST['update'])){ 

    $firstName=$_POST['fname']; 
    $email=$_POST['email']; 
    $Pers=$_POST['id'];
    $nxtofkin = $_POST['nkin']; 
    $connumb = $_POST['cnumber'];
    $polt = $_POST['ptype'];
    $nclaims = $_POST['nclaims'];
    } 

    function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
    ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }

    
    $res = updateClient($firstName, $email, $Pers, $nxtofkin, $connumb, $polt, $nclaims);
    console_log($res);
    if($res){
        header("location: ../allianzagentview.php");
    }
?>