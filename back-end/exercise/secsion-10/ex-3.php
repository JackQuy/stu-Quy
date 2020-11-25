<?php
    if(isset($_GET["mod"])) {
        $mod = $_GET["mod"];
        $act = $_GET["act"];
//        echo $mod."<br>".$act;
        echo "<b style='color: red'>Mod:</b> {$mod} <br> <b>Action:</b> {$act}";
    }
?>

<html>
    <head>
        <title>ex-3</title>
    </head>
    
    <body>
        <h1>Lấy link</h1>
        <a href="?mod=product&act=main">Sản Phẩm</a>
    </body>
</html>

