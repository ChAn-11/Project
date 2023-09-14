<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Swimming & Camping</title>
 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Extreme:wght@300;700&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Pathway Extreme', sans-serif;
            font-size:10pt;
        }
        .logofont{
            font-size:12pt;
            font-weight: bold;
        }
        .productbg{
            background-color: #0099FF;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
  <div class="container-fluid bg-dark">
    <a class="navbar-brand logofont" href="#">The Global Wild</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../users/index.php">Home</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../products/index.php">Products</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../services/index.php">Services</a>
        </li>        
      </ul>
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../logout.php"><?php echo (isset ($_SESSION['email'])) ?$_SESSION['email']: ""; ?> </a>
        </li>        
      </ul>
      
    </div>
  </div>
</nav>
<br>