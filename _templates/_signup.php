<?php
  $signup_stat = false;
  if(isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['password'])){
    $no_error = sign_up($_POST['username'],$_POST['mail'],$_POST['password']);
    $signup_stat = true;
  }
?>
<?php
  if($signup_stat){
    if($no_error){
      ?>
      <main class="container">
        <div class="bg-light p-5 rounded mt-3">
            <h1>Signup Success</h1>
            <p class="lead">Now you can login from <a href="login.php">here</a>.</p>

        </div>
      </main>
      <?php 
      } else {
      ?>
        <main class="container">
          <div class="bg-light p-5 rounded mt-3">
              <h1>Signup Fail</h1>
              <p class="lead">Something went wrong, <?=$error?>
              </p>
          </div>
        </main>
      <?php
    } ?>
<?php } else {
  print("nothing ")
  ?>

<main class="form-signin w-100 m-auto">
  <form method="post" action="signup.php">
    <img class="mb-4" src="/Pictogram/assets/images/pfp.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name = "username" type="text" class="form-control" id="floatingInputUsername" placeholder="username">
      <label for="floatingInputUsername">Username</label>
    </div>
    <div class="form-floating">
      <input name = "mail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name = "password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>
  
<?php
}
?>