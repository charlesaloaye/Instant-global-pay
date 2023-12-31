<?php include 'includes/header.php'; ?>
<main class="flex-center w-h-100">

    <div class="">
        <div class="text-center">
            <img src="<?= assets('images/logo.png') ?>" width="300px" alt="">
        </div>
        <h1 class="col-11  text-center  p-3 mb-5 bg-white rounded" style="text-shadow: 2px 3px black; font-size:3rem; font-weight:bolder;">

            WELCOME TO <?= APP_NAME ?>

        </h1>

        <div class="flex-center">
            <a href="/login" class="btn btn-success px-5 py-3">Login</a>
            <a href="/register" class="btn btn-warning px-5 py-3">Register</a>
        </div>

    </div>

</main>
<?php includes('footer'); ?>