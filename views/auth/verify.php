<?php includes('guestHeader') ?>

<?php include 'controllers/authController.php';
?>

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
            <h4 class="fw-bolder">VERIFY ACCOUNT </h4>

        </div>
        <div class="">
            <?php
            include 'includes/errorelement.php';
            ?>
        </div>
        <div>
            <p class="text-success fw-bold text-lowercase"> An activation code has been sent to your email it should arrive within 60 seconds if you don't get it after 5 minutes click the resend button below</p>
        </div>



        <!-- code input  -->
        <div class="">
            <label for="code">Activation code</label>
            <label> <input type="text" placeholder="Enter Activation code" class="" id="code" name="code" value="<?= @showValue('code') ?>"> </label>
            <small class="text-danger"> <?= getError('code') ?></small>
        </div>

        <!-- submit button  -->
        <button type="submit" name="verify" class="">Verify </button>
        <!-- forgot password link  -->
        <div>
            <form action="" method="POST">
                <input type="submit" value="Resend  activation code" class="btn text-primary" name="resend_verify">
            </form>
        </div>
    </form>
    <!-- login form ends here  -->
</main>
<?php includes('footer') ?>

<!-- login page ends here  -->