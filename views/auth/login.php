<?php
$title = 'hompage';
includes('guestHeader');

?>

<?php include 'controllers/authController.php' ?>

<!-- login page begins here  -->

<main class="flex-center">
  <!-- login hero and logo  container-->
  <div class="left-hero">
    <!-- logo begin-->
    <div class="text-center ">
      <img src="<?= assets('images/logo.png') ?>" width="250px" alt="">
    </div>
    <!-- logo end here -->

    <!-- login hero image  -->
    <div class="text-center">
      <img src="<?= assets('images/safe-fundz.png') ?>" width="90%" alt="">
    </div>
    <!-- login hero img end here  -->
  </div>
  <!-- login hero and logo  container end here-->

  <!-- mobile logo  -->
  <form class="login-form " method="POST" action="">
    <div class="text-center d-none mobile-logo">
      <img src="<?= assets('images/logo.png') ?>" width="250px" alt="">
    </div>

    <!-- page title  -->
    <div class="">
      <h4 class="fw-bolder">LOGIN <?= APP_NAME ?></h4>

    </div>
    <div class="">
      <p> New to <?= ucwords(APP_NAME) ?> ? <a href="/register">Register</a></p>
      <!-- page error element  -->
      <?php
      include 'includes/errorelement.php';
      ?>

      <!-- email input  -->
    </div>
    <div class="">
      <label for="InputEmail">Email address</label>

      <label> <input type="email" class="" id="InputEmail" name="email" value="<?= @showValue('email') ?>"> </label>
      <small class="text-danger"> <?= getError('email') ?></small>

    </div>
    <!-- password input  -->
    <div class="">
      <label for="InputPassword">Password</label>
      <label> <input type="password" class="" id="InputPassword" name="password" value="<?= @showValue('password') ?>"> <i class="fa fa-eye d-none" id="showhidepassword"> </i> </label>
      <small class="text-danger"> <?= getError('password') ?></small>
    </div>

    <!-- submit button  -->
    <button type="submit" name="login_user" class="">Sign In</button>
    <!-- forgot password link  -->
    <div><a href="/resetpass">Forgot Password</a> </div>
  </form>
  <!-- login form ends here  -->
</main>
<!-- login page ends here  -->
<?php includes('footer') ?>