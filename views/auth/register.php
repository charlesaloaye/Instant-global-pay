<?php includes('guestHeader') ?>
<?php include 'controllers/authController.php' ?>


<!-- register page begins here  -->

<main class="flex-center">
    <!-- register hero and logo  container-->
    <div class="left-hero">
        <!-- logo begin-->
        <div class="text-center ">
            <img src="<?= assets('images/logo.png') ?>" width="250px" alt="">
        </div>
        <!-- logo end here -->

        <!-- register hero image  -->
        <div class="text-center">
            <img src="<?= assets('images/safe-fundz.png') ?>" width="90%" alt="">
        </div>
        <!-- register hero img end here  -->
    </div>
    <!-- register hero and logo  container end here-->

    <!-- register form begin  -->
    <form class="register-form " method="POST" action="">
        <!-- mobile logo  -->

        <div class="text-center d-none mobile-logo">
            <img src="<?= assets('images/logo.png') ?>" width="250px" alt="">
        </div>

        <!-- page title  -->
        <div class="">
            <h4 class="fw-bolder text-uppercase">Register <?= APP_NAME ?></h4>

        </div>
        <div class="">
            <p> Already registered ? <a href="/login">Login</a></p>

        </div>
        <div class="">
            <?php
            include 'includes/errorelement.php';
            ?>
        </div>
        <!-- Full name input  -->
        <div class="">
            <div class="">
                <label for="name">Full Name</label>
                <label> <input type="text" class="" id="name" name="name" value="<?= @showValue('name') ?>"> </label>
                <small class="text-danger"> <?= getError('name') ?></small>
            </div>
            <!-- username input  -->
            <div class="">
                <label for="username">Username </label>
                <label> <input type="text" class="" id="username" name="username" value="<?= @showValue('username') ?>"> </label>
                <small class="text-danger"> <?= getError('username') ?></small>
            </div>

        </div>

        <!-- Email input  -->
        <div class="">
            <div style="width:90%">
                <label for="name">Email</label>
                <label class=""> <input type="email" class="" id="email" name="email" value="<?= @showValue('email') ?>"> </label>
                <small class="text-danger"> <?= getError('email') ?></small>
            </div>


        </div>
        <!-- tel no input  -->
        <div class="">
            <div class="">
                <label for="tel">Tel no</label>
                <label> <input type="text" class="" id="tel" name="tel" value="<?= @showValue('tel') ?>"> </label>
                <small class="text-danger"> <?= getError('tel') ?></small>
            </div>
            <!-- dob input  -->
            <div class="">
                <label for="dob">D.O.B yyyy/mm/dd</label>
                <label> <input type="text" class="" id="dob" name="dob" value="<?= @showValue('dob') ?>"> </label>
                <small class="text-danger"> <?= getError('dob') ?></small>
            </div>

        </div>
        <!-- business name input  -->
        <div class="">
            <div class="">
                <label for="business_name">Business Name</label>
                <label> <input type="text" class="" id="business_name" name="business_name" value="<?= @showValue('business_name') ?>"> </label>
                <small class="text-danger"> <?= getError('business_name') ?></small>
            </div>
            <!-- business address input  -->
            <div class="">
                <label for="business_address">Business Address</label>
                <label> <input type="text" class="" id="business_address" name="business_address" value="<?= @showValue('business_address') ?>"> </label>
                <small class="text-danger"> <?= getError('business_address') ?></small>
            </div>

        </div>
        <!-- pin input  -->
        <div class="">
            <div class="">
                <label for="pin">Pin</label>
                <label> <input type="number" class="" id="pin" name="pin" value="<?= @showValue('pin') ?>"> </label>
                <small class="text-danger"> <?= getError('pin') ?></small>
            </div>
            <!-- confirm Pin input  -->
            <div class="">
                <label for="confirm_pin">Confirm pin</label>
                <label> <input type="number" class="" id="confirm_pin" name="confirm_pin" value="<?= @showValue('confirm_pin') ?>"> </label>
                <small class="text-danger"> <?= getError('confirm_pin') ?></small>
            </div>

        </div>
        <!-- password input  -->
        <div class="">
            <div class="">
                <label for="password">Password</label>
                <label> <input type="password" class="" id="password" name="password" value="<?= @showValue('password') ?>"> </label>
                <small class="text-danger"> <?= getError('password') ?></small>
            </div>
            <!-- passsword confirmation input  -->
            <div class="">
                <label for="password_confirm">Confirm Password</label>
                <label> <input type="password" class="" id="password_confirm" name="password_confirm" value="<?= @showValue('password_confirm') ?>"> </label>
                <small class="text-danger"> <?= getError('password_confirm') ?></small>
            </div>

        </div>

        <!-- submit button  -->
        <div class="">

            <button type="submit" name="register_user" class="">Sign up</button>

        </div>


    </form>
    <!-- register form ends here  -->
</main>
<?php includes('footer') ?>

<!-- register page ends here  -->