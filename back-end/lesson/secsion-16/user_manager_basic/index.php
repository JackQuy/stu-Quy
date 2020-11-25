

<?php
session_start();
ob_start();

require 'data/user.php';
require 'lib/data.php';
require 'lib/users.php';
require 'inc/header.php';

//if(!empty($_SESSION)){
//    show_array($_SESSION);
//}
?>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $path = "pages/{$page}.php";
    if (file_exists($path)) {
        require $path;
    }
} else {
    echo "<div id='content'>
            <h1>Trang chủ</h1>
            </div>";
}

//    header("Location: {$page}.php");
?>
<?php

require 'inc/footer.php';
?>

