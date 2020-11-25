<?php

require 'lib/datas.php';

show_array($_FILES);

//Thư mục chứa file upload
$upload_dir = 'uploads/';

//Đường dẫn của file sau khi upload
$upload_file = $upload_dir.$_FILES['file']['name'];

if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
    echo "<a href='{$upload_file}'> Download: {$_FILES['file']['tmp_name']}</a>";
} else {
    echo "Upload file ko thành công";
}
