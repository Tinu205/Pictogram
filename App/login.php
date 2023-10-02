<?php
include "libs/load.php";

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php load_template("head")?>
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
