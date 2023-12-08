<?php includes('guestHeader') ?>
<?php include 'controllers/authController.php';?>

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
            <h4 class="fw-bolder">VERIFY PIN </h4>

        </div>
        <div class="">
            <?php
            include 'includes/errorelement.php';
            ?>
        </div>
        <div>
            <p class="text-success fw-bold text-lowercase"> verify pin to complete login </p>
        </div>



        <!-- pin input  -->
        <div class="">
            <label for="pin">Pin</label>
            <label> <input type="text" placeholder="Enter Pin" class="" id="pin" name="pin" value="<?= @showValue('pin') ?>"> </label>
            <small class="text-danger"> <?= getError('pin') ?></small>
        </div>

        <!-- submit button  -->
        <button type="submit" name="verify_pin" class="">Verify </button>
        <!-- forgot password link  -->
        <div>
            <a href="/login"><i class="fa fa-arrow-left"></i> back to login</a>
        </div>
    </form>
    <!-- login form ends here  -->
</main>
<?php includes('footer') ?>

<!-- login page ends here  -->