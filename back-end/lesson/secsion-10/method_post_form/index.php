 <?php
    function show_array($list) {
        if (is_array($list)) {
            echo "<pre>";
            print_r($list);
            echo "<pre>";
        }
    }
    
    #show_array($_SERVER);
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $info_user = array(
            'username' => 'admin',
            'password' => 'admin!@#'
        );
        $error = array();
        if(isset($_POST['btn_login'])){
            if(empty($_POST['username'])){
                $error['username'] = "Không được để trống tên đăng nhập";
            } else {
                $username = $_POST["username"];
            }
        }
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        #echo "Username của bạn là: ".$username."<br>";
        #echo "Password của bạn là: ".$password;
        if(empty($error)) {
            if ($username == $info_user['username'] && $password == $info_user['password']) {
                $redirect_to = $_POST['redirect_to'];
                header("location:{$redirect_to}");
            } else {
                $error['login'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
            }
        }
        
        if (!empty($error)){
            show_array($error);
        }
        
    }
?> 

<html>
    <head>
        <title>
            Truyền dữ liệu form phương thức POST
        </title>
    </head>
    <body>
        <a href="?mod=red&id=123">Sản Phẩm</a>
        <h1 color = "red">Đăng Nhập</h1>
        <form action="login.php" method="post">
            Name: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="hidden" name="redirect_to" value="login.php">
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>

