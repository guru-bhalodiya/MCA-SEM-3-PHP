<!doctype html>
<html lang="en">
  <head>
  <style>
    .container {
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .main{
      width: 100%;
      height: 100vh;
      text-align: center;
      background-color: lightblue;
    }
  </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <?php include "../header.php"; ?>

  </head>
  <body>
    <div class="container">
      <div>
        <?php include "sidebar.php";?>
      </div>
      <div class="main">
        <h1>Main content</h1>
      </div>
      
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
  <?php include "../footer.php";?>

</html>