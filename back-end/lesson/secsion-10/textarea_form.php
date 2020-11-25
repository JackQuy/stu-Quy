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
    
    if(empty($_POST['pest_detail'])){
        echo 'Bạn cần nhập thông tin bài viết';
    } else {
        $pest_detail = $_POST['pest_detail'];
        echo $pest_detail;
    }
}
?>

<html>
    <head>
        <title>
            Lấy dữ liệu từ textarea
        </title>
    </head>
    <body>

        <h1 style="color: red;">Thêm bài viết</h1>
        <form action="" method="post">
            <label for="cat_1">Chi tiết</label><br>
            <textarea name="pest_detail" cols="50" rows="20"></textarea><br><br>
            <input type="submit" name="btn_add" value="Thêm bài viết">
        </form>
    </body>
</html>

