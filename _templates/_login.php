<main class="form-signin w-100 m-auto">
  <form method="post" action="test.php">
    <img class="mb-4" src="/Pictogram/assets/images/pfp.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please login</h1>

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