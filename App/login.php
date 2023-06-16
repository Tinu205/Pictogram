<?php
include "libs/load.php";

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <script src="assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Tinu">
  <meta name="generator" content="Hugo 0.111.3">
  <title>Photogram</title>
  
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php load_template("style");?>
</head>

<body>
  <?php load_template("body_style") ?>

  <header data-bs-theme="dark">
    <?php load_template("header");?>
  </header>

  <main>
    <?php load_template("log_in");?>
  </main>

  <footer class="text-body-secondary py-5">
    <?php load_template("footer");?>
  </footer>

  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .form-signin {
    max-width: 330px;
    padding: 15px;
    }

    .form-signin .form-floating:focus-within {
    z-index: 2;
    }

    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
    </style>
</body>
</html>
