<?php

// include 'classes/database.class.php';
class auth extends database
{
    public string $email_err;
    public string $pass_err;
    public string $page_err;

    function create($email, $password)
    {
        $user = selectAll('tbl_users', 'WHERE', 'email', $email);

        if ($user) {
            if (password_verify($password, $user->password)) {
                if ($user->isverified === '0') {
                    setError('page', 'Email not yet verified cick <a href="/verify"> verify</a> to verify your account ');
                    $_SESSION['email'] = $user->email;
                } else {
                    if ($user->acc_status == '0') {
                        setError('page', 'Your account has been blocked contact support for more info.');
                        $_SESSION['id'] = $user->id;
                    } else {
                        $_SESSION['email'] = $user->email;
                        $_SESSION['id'] = $user->id;
                        return true;
                    }
                }
            } else {
                setError('password', 'Incorrect password try again');
            }
        } else {
            setError('email', 'User account not found ');
        }
    }
    function register($name, $email, $username, $activation_code, $pin, $dob, $tel, $business_address, $password, $buiness_name, $date)
    {
        $user = selectAll('tbl_users', 'WHERE', 'email', $email);


        if ($user) {
            setError('email', 'Email is taken ');
            unset($user);
        }

        $user = selectAll('tbl_users', 'WHERE', 'username', $username);
        if ($user) {
            setError('username', 'Username is taken');
        }

        if (empty(getAllErrors())) {
            $query = "INSERT INTO tbl_users  (name,email,username,activation_code,pin,dob,tel,business_address,password,business_name,date) VALUES('$name', '$email', '$username', '$activation_code', '$pin', '$dob', '$tel', '$business_address', '$password', '$buiness_name', '$date' )";

            $db = new database;
            $db = $db->db();
            if ($db->query($query)) {
                return true;
            } else {
                setError('page', 'Regitration failed try again');
                return false;
            }
        }
    }
    function resend_verify($code, $email)
    {

        $query = "UPDATE tbl_users set activation_code = $code WHERE email = '$email'";
        $db = new database;
        $db = $db->db();
        $result = $db->query($query);

        if ($result) {
            echo "<script>alert('Activation code has been resent ')</script>";
            return true;
        } else {
            setError('code', 'unable to resend activation code');
            setError(
                'page',
                'unable to resend activation code'
            );
        }
    }  
    
    function update_verify($activation_code)
    {
        $date = date('y-m-d : h:i');

        $query = "UPDATE tbl_users set acc_status = '1', isverified = '1', verified_at = '$date'   WHERE activation_code = '$activation_code'";
        $db = new database;
        $db = $db->db();
        $result = $db->query($query);

        if ($result) {
            $_SESSION['loggedin'] = true;
            return true;
        } else {
         
            setError(
                'page',
                'unable to  verify account try again after 5 minutes'
            );
        }
    }
}
