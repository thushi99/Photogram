<?php

$signup=false;

if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email_address'];
  $phone=$_POST['phone'];
  $error=signup($username,$password,$email,$phone);
  $signup=true;
}
?>

<?
  if ($signup) 
  {
      if(!$error) 
      {
        ?>
          <main class="container">
            <div class="bg-light p-5 rounded mt-3">
              <h1>Signup Success</h1>
              <p class="lead">Please <a href="/login.php">Login</a> Here</p>
            </div>
          </main>
        <?
      } 
      else
      {
        ?>
        <main class="container">
          <div class="bg-light p-5 rounded mt-3">
            <h1>Signup Failed</h1>
            <p class="lead">Something went wrong, <?=$error?></p>
          </div>
        </main>
        <?
      }
  }
  else
  {
    ?>
      <main class="form-signup">
        <form method="post" action="signup.php">
          <img class="mb-3" src="https://git.selfmade.ninja/uploads/-/system/appearance/logo/1/Logo_Dark.png" alt=""  height="57">
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

          <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInputUsername" placeholder="Username">
            <label for="floatingInputUsername">User Name</label>
          </div>
          <div class="form-floating">
            <input name="phone" type="text" class="form-control" id="floatingInputPhone" placeholder="Phone">
            <label for="floatingInputPhone">Phone</label>
          </div>
          <div class="form-floating">
            <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-danger hvr-border-fade" type="submit">Sign in</button>
        </form>
      </main>

  <?}