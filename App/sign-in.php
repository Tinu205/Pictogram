<?php
include "libs/load.php";
?>
<!doctype html>
  <html lang="en" data-bs-theme="auto">
    <head>
      <script src="../assets/js/color-modes.js"></script>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.111.3">
      <title>Pictogram-Signup</title>

      <link href="../App/assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="templates/sign-in.css" rel="stylesheet">      
  </head>
  
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <?php
        load_template("sign_in");
      ?>  
    </main>
  </body>
</html>
