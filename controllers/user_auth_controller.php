<?php
//  echo password_hash('GOODGOD11',PASSWORD_DEFAULT);
if (isset($_POST['login_user'])) {
    $validator = new Validator;
    $email = $validator->validateEmail($_POST['email']);
    setError('email', $validator->email_err);
    $password = $validator->validatePassword($_POST['password']);
    // echo password_hash($password,PASSWORD_DEFAULT);
    setError('password', $validator->password_err);
    $user = new auth();
    if (empty(getAllErrors())) {
        $result = $user->create($email, $password);
        if ($result) {
            header("location:/pin");
        }
    } else {
        setError('page', 'Invalid credential');
    }

}

if (isset($_POST['register_user'])) {
    $validator = new Validator;
    $name = $validator->validateText($_POST['name']);
    setError('name', $validator->text_err);
    unset($validator->text_err);

    $validator = new Validator;
    $username = $validator->validateText($_POST['username']);
    setError('username', $validator->text_err);
    unset($validator->text_err);
    $validator = new Validator;

    $tel = $validator->Validateint($_POST['tel']);
    setError('tel', $validator->num_err);
    unset($validator->num_err);

    $validator = new Validator;

    $email = $validator->validateEmail($_POST['email']);
    setError('email', $validator->email_err);
    unset($validator->email_err);
    $validator = new Validator;

    $dob = $validator->validateText($_POST['dob']);
    setError('dob', $validator->text_err);
    unset($validator->num_err);
    $validator = new Validator;

    $business_name = $validator->validateText($_POST['business_name']);
    setError('business_name', $validator->text_err);
    unset($validator->text_err);
    $validator = new Validator;

    $business_address = $validator->validateText($_POST['business_address']);
    setError('business_address', $validator->text_err);
    unset($validator->text_err);
    $validator = new Validator;

    $pin = $validator->Validateint($_POST['pin']);
    setError('pin', $validator->num_err);
    unset($validator->num_err);
    $validator = new Validator;

    $confirm_pin = $validator->Validateint($_POST['confirm_pin']);
    $validator = new Validator;

    $password = $validator->validatePassword($_POST['password']);
    setError('password', $validator->password_err);
    unset($validator->password_err);
    $validator = new Validator;

    $password_confirm = $validator->validatePassword($_POST['password_confirm']);
    setError('password_confirm', $validator->password_err);

    $date = date('y-m-d : h:i');


    $haystack = rand(9, 999999999999999);
    $haystack = str_shuffle($haystack);
    $activation_code = substr($haystack, 1, 6);

    if (empty(getAllErrors())) {
        if ($password == $password_confirm) {
            $password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            setError('password', 'Password does not match confirm password');
        }
        if ($pin === $confirm_pin) {
        } else {
            setError('pin', 'Pin does not match confirm pin');
        }

        if (empty(getAllErrors())) {

            $user = new auth();
            $result =  $user->register($name, $email, $username, $activation_code, $pin, $dob, $tel, $business_address, $password, $business_name, $date);
            if ($result) {
                
                $_SESSION['REGSUCES'] = true;
                $_SESSION['email'] = $email;

                header("location:/verify");
            } else {
                setError('page', 'Invalid credential');
            }
        }
    } else {
        setError('page', 'Invalid credentials');
    }
}


if (isset($_POST['verify'])) {
    $validator = new validator;
    $email = $_SESSION['email'];
    $activation_code = $validator->Validateint($_POST['code']);
    $user = selectAll('tbl_users', 'WHERE', 'email', $email);

    if ($activation_code === $user->activation_code) {
        $auth = new auth();
        $result = $auth->update_verify($activation_code);
        if ($result) {

            $_SESSION['email'] = $user->email;
            $_SESSION['id'] = $user->id;
            header("location:/dashboard");
        }
    } else {
        setError('code', 'Invalid activation code');
        setError('page', 'Invalid activation code');
    }
}


if (isset($_POST['resend_verify'])) {
    $validator = new validator;
    $email = $_SESSION['email'];
    $haystack = rand(9, 999999999999999);
    $haystack = str_shuffle($haystack);
    $activation_code = substr($haystack, 1, 6);
    $auth = new  auth();
    $result = $auth->resend_verify($activation_code, $email);
}

if (isset($_POST['verify_pin'])) {
    $validator = new validator;
    $pin = $validator->Validateint($_POST['pin']);
    setError('pin', $validator->num_err);
    $email = $_SESSION['email'];

    if (empty(getAllErrors())) {
        $user = selectAll('tbl_users', 'WHERE', 'email', $email);
        if ($user->pin === $pin) {
            $_SESSION['email'] = $user->email;
            $_SESSION['id'] = $user->id;
            $_SESSION['loggedin'] = true;

            header("location:/dashboard");
        } else {
            setError('pin', 'Incorrect pin try again');
        }
    } else {
        setError('page', 'Invalid credential');
    }
}
if (isset($_SESSION['logout'])) {
    echo "<script>alert('Logged out successfully ')</script>";
    unset($_SESSION['logout']);

}
