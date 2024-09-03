<?php
  $login_stat = false;
  if(isset($_POST['username']) && isset($_POST['password'])){
    $no_error = user::login($_POST['username'],$_POST['password']);
    $login_stat = true;
  }

?>

<?php
if($login_stat){
  if($no_error){
    ?>
      <main class="container">
        <div class="bg-light p-5 rounded mt-3">
            <h1>Login Success</h1>
            <p class="lead">Now you can enjoy your time <a href="index.php">here</a></p>

        </div>
      </main>

  <?php
  }else{
    ?>
    <main class="container">
          <div class="bg-light p-5 rounded mt-3">
              <h1>Login Failed</h1>
              <p class="lead">Something went wrong, <?php print($error) ?>
              </p>
          </div>
        </main>
  <?php
  }
}else{
  printf("Nothing");
?>
  <main class="form-signin w-100 m-auto">
    <form method="post" action="login.php">
      <img class="mb-4" src="/Pictogram/assets/images/pfp.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please login</h1>

      <div class="form-floating">
        <input name = "username" type="text" class="form-control" id="floatingInputUsername" placeholder="username">
        <label for="floatingInputUsername">Username</label>
      </div>
<!--       <div class="form-floating">
        <input name = "mail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div> -->
      <div class="form-floating">
        <input name = "password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login in</button>
    </form>
  </main>
<?php
}
?>