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
    
    if(empty($_POST['cat'])){
        echo 'Bạn chưa chọn danh mục';
    } else {
        foreach ($_POST['cat'] as $item){
            echo $item."<br>";
        }
    }
}
?>

<html>
    <head>
        <title>
            Lấy dữ liệu từ List checkbox form
        </title>
    </head>
    <body>

        <h1 style="color: red;">Chọn danh mục</h1>
        <form action="" method="post">
            <input type="checkbox" name="cat[]" value="1" id="cat_1"><label for="cat_1">Thể thao</label><br><br>
            <input type="checkbox" name="cat[]" value="2" id="cat_2"><label for="cat_2">Xã hội</label><br><br>
            <input type="submit" name="btn_add" value="Thêm bài viết">
        </form>
    </body>
</html>

