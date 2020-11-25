<?php

if(isset($_POST['btn_order'])){
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";
     * */
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    
    if(empty($_POST['pay'])){
        echo 'Bạn chưa chọn danh mục';
    } else {
        $pay = $_POST['pay'];
        echo $pay;
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

        <h1 style="color: red;">Đặt hàng</h1>
        <form action="" method="post">
            <label for="pay">Hình thức thanh toán: </label>
            <select name="pay" id="pay">
                <option value="" >--Chọn--</option>
                <option value="cod" selected="selected">Thanh toán tại nhà</option>
                <option value="banking">Thanh toán qua thẻ Tín dụng</option>
            </select><br>
            <input type="submit" name="btn_order" value="Đặt hàng">
        </form>
    </body>
</html>
