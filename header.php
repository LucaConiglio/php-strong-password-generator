<?php
  include "functions.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-warning">
  <section>
  <div class="container">
    <h1 class="text-dark text-center pt-5 mt-5 pb-3">La Password generata é:</h1>
    <h2 class="text-center text-danger"><?php echo $_SESSION["password"]?></h2>
  </div>
  </section>

</body>
</html>
