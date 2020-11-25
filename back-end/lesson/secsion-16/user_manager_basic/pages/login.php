<html>
    <head>
        <title>hệ thống điều hướng cơ bản</title>
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1>ĐĂNG NHẬP</h1>
            <form action="" method="post" id="form-login">

                <input type="text" id="username" name="username" value="" placeholder="Username">
                <input type="password" id="password" name="password" value="" placeholder="Password">
                <input type="submit" id="btn-login" name="btn-login" value="Đăng nhập">
            </form>
            <a href="" id="lost-pass">Quên mật khẩu</a>
        </div>
    </body>
</html>

<?php
if (isset($_POST['btn-login'])) {
    /* echo "<pre>";
      print_r($_POST);
      echo "</pre>";
     * */
//    require 'data/user.php';
//    require 'lib/data.php';
//    require 'lib/users.php';

    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = 'Không được để trông username';
    } else {
        $partten = "/^[a-zA-Z0-9\_.]{6,32}$/";
        if (strlen($_POST['username']) < 6 || strlen($_POST['username']) > 32) {
            $error['username'] = 'Độ dài Username phải nằm trong khoảng 6 => 32';
        } else {
            if (!preg_match($partten, $_POST['username'])) {
                $error['username'] = 'Username cho phép sử dụng chữ cái, số, dấu gạch dưới, dấu chấm.';
            } else {
                $username = $_POST['username'];
            }
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Không được để trông password';
    } else {
        $password = $_POST['password'];
    }
    if (empty($error)) {
        if(check_login($username, $password)) {
            echo 'Đăng nhập thành công';
            
            $_SESSION['is_login'] = TRUE;
            $_SESSION['username'] = $username;
            header('Location: ?page=home');
        } else {
            echo 'Tài khoảng không tồn tại';
        }
    } else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
}
?>

