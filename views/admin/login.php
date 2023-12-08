<?php include "controllers/authController.php"; ?>
<main class="flex-center">
    <div class="col-6">
        <img src="<?= APP_URL ?>assets/images/login-img.jpeg" width="100%" height="" alt="">
    </div>

    <form class="login-form col-6" method="POST" action="" autocomplete="off">
        <h4>ADMIN LOGIN <?= APP_NAME ?></h4>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" value="<?= @showValue('email') ?>" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="" class="form-text d-block text-danger"><?= @getError('email') ?></small>
            <small id="emailHelp" class="form-text text-muted d-block ">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="Password">Password</label>

            <input type="password" class="form-control" name="password" value="<?= @showValue('password') ?>" id="Password" placeholder="Password"> <i class="fa fa-eye col-1"></i>

            <small id="" class="form-text  d-block text-danger"><?= @getError('password') ?></small>

        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="login_admin" class="btn btn-primary px-5 py-2">Submit</button>
    </form>
</main>