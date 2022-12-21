<?php 
session_start();
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
  <section>
    <div class="container bg-warning">
      <div class="row">
        <div class="col-6 m-auto py-3 ">
          <h1 class="text-info py-5">PHP Strong Password Generator</h1>
          <form class="d-flex justify-content-center gap-3" action="" method="GET">
            <input type="number" name="number" value="<?php echo $_GET["number"] ?? ''  ?>">
            <button class="btn btn-dark">invia</button>
          </form>

          <?php if( isset($password)) {
            include "header.php";
          }   ?>
        </div>
      </div>
    </div>
  </section>

</body>
</html>