<?php
  $username=$_POST['email_address'];
  $password=$_POST['password'];

  $result=validate_credientials($username,$password);

  if ($result) {
    ?>
      <div class="container">
        <div class="jumbotron mt-3">
          <h1>Login Success</h1>
          <p class="lead">This example is a basic login.</p>
        </div>
      </div>
  <?php
  }else{
  ?>

<main class="form-signin">
  <form method="post" action="login.php">
    <img class="mb-3" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt=""  height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-danger hvr-border-fade" type="submit">Sign in</button>
  </form>
</main>

<?php
  }