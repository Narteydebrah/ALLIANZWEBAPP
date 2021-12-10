<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>"ALLIANZ INSURANCE"</title>
    <script type="text/javascript" src="allscript.js"></script>

<style>





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
                <a class="nav-link" href="gallery.php">Gallery</a>
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
<br>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Allianz Insurance Portal</h1>
        <img src=" https://www.allianz-gh.com/content/dam/onemarketing/system/allianz-logo.svg" class="img-thumbnail" alt="..." width="150" height="150" style="height:fit-content;">
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="controllers/signup_controller.php">
          <div class="form-floating mb-3">
            <input type="fname" class="form-control" id="floatingInput" placeholder="george" name="fname">
            <label for="floatingInput">First name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div id="message" class="error-message container">
                <p id="letter" class="letter">Please enter a letter</p>
                <p id="number" class="number">Please enter a number</p>
                <p id="length" class="length">Please ensure are at least 8 characters long</p>
                <p id="capital" class="capital">Please ensure there is a capital letter</p>
            </div>
           <div class="form-floating mb-3">
            <input type="personID" class="form-control" id="floatingInput" name="GhanaID" placeholder="0129393">
            <label for="floatingInput">Person ID</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="CheckPassword(document.form1.text1)">Sign up</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
    


</body>
</html>