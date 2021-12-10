<?php
  include ('model/connection.php');
  $conn = new mysqli(SERVER, USERNAME, PASSWD, DATABASE); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agentview</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>"ALLIANZ INSURANCE"</title>
  
<style>

.namehold{
     margin: 0 12.5rem;
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="priceofschemes.php">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allianzsignin.php">Log in</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
<img src= "https://www.allianz-gh.com/content/dam/onemarketing/system/allianz-logo.svg" class="rounded mx-auto d-block" alt="allianz" width="80" height="80">

<div class="namehold">
  <form action="views.php" method="post">
    <table class="table table-striped table-hover" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Client name</th>
      <th scope="col">Email</th>
      <th scope="col">Next of kin</th>
      <th scope="col">Contact number</th>
      <th scope="col">Policy type</th>
      <th scope="col">Number of claims</th>
      <!-- <th scope="col">Claims</th> -->

    </tr>
  </thead>
  <tbody>
    
    <?php
      include_once ('controllers/agent_controller.php');
       $s = mysqli_query($conn,"select*from registers");
        while($r=mysqli_fetch_array($s))
        {
      ?>
      <tr>
      
      <th>
        <input type="hidden" name="id" value="<?php echo $r['PersonID'];?>">
        <?php echo $r['PersonID'];?>
      </th>
      <td>
        <input type="hidden" name="fname" value="<?php echo $r['fname'];?>">
        <?php echo $r['fname'];?>
      </td>
      <td>
        <input type="hidden" name="email" value="<?php echo $r['email'];?>">
        <?php echo $r['email'];?>
      </td>
      <td>
        <input type="hidden" name="nkin" value="<?php echo $r['nkin'];?>">
        <?php echo $r['nkin'];?>
      </td>
      <td>
        <input type="hidden" name="cnumber" value="<?php echo $r['cnumber'];?>">
        <?php echo $r['cnumber'];?>
      </td>
      <td>
        <input type="hidden" name="ptype" value="<?php echo $r['ptype'];?>">
        <?php echo $r['ptype'];?>
      </td>
      <td>
        <input type="hidden" name="nclaims" value="<?php echo $r['nclaims'];?>">
        <?php echo $r['nclaims'];?>
      </td>
      
      <td>
          <button type="submit" name="submit" class="btn btn-info">
              Update
            </button>
        </td>
        <td>
          <button type="submit" name="delete" class="btn btn-info">Delete</button>
        </td>
      
        </tr>   
          
        <?php
        }
      ?>
      
      
    </tbody>
  </table>

  </form>

</div>







</body>
</html>