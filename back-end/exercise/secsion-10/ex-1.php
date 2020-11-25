<?php
if(isset($_POST["submit"])) {
    
    $info_user = array(
        "username" => "JackQuy",
        "password" => "123@"
    );
    $error = array();
    if(empty($_POST["username"])) {
        $error["username"] = "Bạn cần nhập username";
    } else {
        if($_POST["username"] == $info_user["username"]) {
            $username = $_POST["username"];
        } else {
            $error["username"] = "Username không đúng, bạn cần nhập lại";
        }
    }
    
    if(empty($_POST["password"])) {
        $error["password"] = "Bạn cần nhập password";
    } else {
        if($_POST["password"] == $info_user["password"]) {
            $password = $_POST["password"];
        } else {
            $error["password"] = "Password không đúng, bạn cần nhập lại";
        }
    }
    
    if(empty($error)) {
//        $redirect_to = $_POST["redirect_to"];
//        header("location:{$redirect_to}");
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    } 
}
?>

<html>
    <head>
        <title>ex-1</title>
    </head>
    
    <body>
        <h1>Đăng Nhập</h1>
        <form method="post">
            Username: <input type="text" name="username" value="<?php if(!empty($username)) echo $username; ?>" /><br>
            <p style="color: red;"><?php if(!empty($error["username"])) echo $error["username"]; ?></p>
            Password: <input type="password" name="password" /><br>
            <p style="color: red;"><?php if(!empty($error["password"])) echo $error["password"]; ?></p>
            <input type="hidden" name="redirect_to" value="ex-1.php" />
            <input type="submit" name="submit" value="Đăng nhập" />
        </form>
    </body>
</html>

