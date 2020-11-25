<?php

if(isset($_POST['btn_add'])){
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";
     * */
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    $error = array();
    if(empty($_POST['username'])){
        $error['username'] = 'Không được để trông username';
    } else {
        $partten = "/^[a-zA-Z0-9\_.]{6,32}$/";
        if(strlen($_POST['username']) < 6 || strlen($_POST['username']) > 32){
            $error['username'] = 'Độ dài Username phải nằm trong khoảng 6 => 32';
        } else {
            if (!preg_match($partten, $_POST['username'])) {
                $error['username'] = 'Username cho phép sử dụng chữ cái, số, dấu gạch dưới, dấu chấm.';
            } else {
                $username = $_POST['username'];
            }
        }
    }
     
    if(empty($_POST['password'])){
        $error['password'] = 'Không được để trông password';
    } else {
        $password = $_POST['password'];
    }
    if(empty($error)){
        echo "Username: {$username} <br>Password: {$password}";
    } else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
}
?>

<html>
    <head>
        <title>
            Chuẩn hóa dữ liệu form đăng nhập
        </title>
    </head>
    <body>

        <h1 style="color: red;">Đăng nhập</h1>
        <form action="" method="post">
            <label for="username">Username </label>
            <input type="text" name="username" id="username" value="<?php if(!empty($username)){ echo $username; } ?>">
            <p style="color: red;"><?php if(!empty($error['username'])) {echo $error['username'];} ?></p><br><br>
            <label for="password">Password </label>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" name="btn_add" value="Đăng nhập">
        </form>
    </body>
</html>
