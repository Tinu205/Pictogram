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
      <section class="py-5 text-center container">
        <?php load_template("action");?>
      </section>
      <?php load_template("boxes");?>
    </main>

    <footer class="text-body-secondary py-5">
      <?php load_template("footer");?>
    </footer>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>