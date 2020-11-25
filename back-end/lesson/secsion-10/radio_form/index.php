<?php
if(isset($_POST['btn_reg'])){
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";
     * */
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    
    if(empty($_POST['gender'])){
        echo 'Bạn chưa chọn giới tính';
    } else {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}
?>

<html>
    <head>
        <title>
            Truyền dữ liệu từ Radio Button
        </title>
    </head>
    <body>

        <h1 bgcolor = "#FF9966">Đăng Ký</h1>
        <form action="index.php" method="post">
            <input type="radio" name="gender" checked="" value="male"><label for="male">Nam</label><br><br>
            <input type="radio" name="gender" value="female"><label for="female">Nữ</label><br><br>
            <input type="submit" name="btn_reg" value="Register">
        </form>
    </body>
</html>
