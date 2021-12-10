<?php
require_once ('model/connection.php');

  $conn = new mysqli(SERVER, USERNAME, PASSWD, DATABASE); 
  // Check connection 
  if ($conn->connect_error) { 
      die("Connection failed: " . $conn->connect_error); 
  }     
     
    if(isset($_POST['rButt'])){ 
     
    $first=$_POST['fname']; 
    $email=$_POST['mail']; 
    $Pers=$_POST['Pid'];
    $nxtofkin = $_POST['nkin']; 
    $connumb = $_POST['cnum'];
    $polt = $_POST['ptype'];


    $sql= "INSERT INTO registers VALUES('$first','$email', $Pers,'$nxtofkin', $connumb,'$polt', 0)"; 
     
    $result=mysqli_query($conn,$sql); 
     
    if($result){ 
        echo "Thank you for joining our scheme"; 
        //header("location: index.html"); 
         
        exit(); 
    } 
    else{
        //echo $first;
        echo " Message has not been recorded"; 
        exit(); 
    } 
     
      
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Registration</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>"ALLIANZ INSURANCE"</title>
    

<style>

.checkss{
    display:flex;
}

*{
    margin: 0;
    padding: 0;
}
body{
    background: #eeeeee;
}
.center{
    display: flex;
    justify-content: center;
    align-items: center;
}
.main{
    width: 100%;
    height: 100vh;
}
.box{
    flex-direction: column;
    background: white;
    width: 500px;
    height: 650px;
    border-radius: 3rem;
}
.heading{
    margin-bottom: 30px;
}
.input{
    width: 250px;
    height: 40px;
    border-radius: 50px;
    border: none;
    background: #f3f1f1;
    margin: 10px 0;
    padding: 0 15px;
    outline: none;
    font-size: 0.9rem;
}
.btn{
    width: 200px;
    height: 40px;
    border: none;
    border-radius: 50px;
    background: #0000ff;
    color: white;
    cursor: pointer;
    outline: none;
}
.btn:hover{
    background: #ffa500;
}
.gender{
    width: 230px;
    height: 40px;
    margin: 10px 0;
}
.gender input{
    -webkit-appearance: none;
    text-align: center;
    line-height: 40px;
    width: 50%;
    height: 100%;
    position: relative;
    background: #f3f1f1;
    color: rgb(0, 0, 0);
    cursor: pointer;
    border-radius: 50px;
    margin: 0 5px;
    outline: none;
}
.gender input:checked{
    background: #ff414f;
    color: white;
}
.gender input::before{
    content: 'Female';
}
.gender input:nth-child(2)::before{
    content: 'Male';
}

</style>

</head>
<body>
  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.allianz-gh.com/content/dam/onemarketing/system/allianz-logo.svg" alt="" width="70" height="70" style="height:fit-content;">
            </a>          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Allianzindex.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="priceofschemes.php">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allianzsignin.php">Admin</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
 <img src= "https://www.allianz-gh.com/content/dam/onemarketing/system/allianz-logo.svg" class="rounded mx-auto d-block" alt="allianz" width="80" height="80">     
 <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h4 class="display-4 fw-normal"> Insurance Registration</h4>
      
</div>

<form method="POST">
    <div class="main center">
        <div class="box center">
            <h1 class="heading">Submit information</h1>
            <input type="text" name="fname" id="" class="input" placeholder="Enter first name">
            <input type="email" name="mail" id="" class="input" placeholder="Enter Email">
            <input type="text" name="Pid" id="" class="input" placeholder="Enter ID">
            <input type="text" name="nkin" id="" class="input" placeholder="Enter name of next of kin">
            <input type="text" name="cnum" class="input" placeholder="enter contact number">
            <br>
            <input type="text" name="ptype" class="input" placeholder="enter policy type">
            <br>
            <br>           
            <!-- <input type="password" name="" class="input" placeholder="Re-Enter Password"> -->
            <button class="btn"  name="rButt">Register</button>
        </div>
    </div>
    
</form>


<br>
<br>









</body>
</html>      