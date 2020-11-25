

<?php
require 'inc/header.php';
?>
    
<?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        $path = "pages/{$page}.php";
        if(file_exists($path)) {
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

