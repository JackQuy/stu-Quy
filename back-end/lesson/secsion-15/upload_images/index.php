<html>
    <head>
        <title>
            Upload images lên server
        </title>
        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body>
        <style>
            #content{
                width: 960px;
                margin: 0px auto;
            }
        </style>
        <div id="content">
            <h1>Upload file</h1>

            <form enctype="multipart/form-data" method="post" action="">

                <input type="file" name="file" id="file">
                <br><br>
                <input type="submit" value="Upload file" name="btn_add">
            </form>

        </div>
    </body>
</html>

<?php
require 'lib/datas.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);

    //Xử lý upload đúng file ảnh
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');

    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    echo $type;
    $error = array();
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = 'Chỉ được upload file có đuôi png, jpg, gif, jpeg';
    } else {
        $file_size = $_FILES['file']['size'];
        if ($file_size >= 29000000) {
            $error['size'] = 'Chỉ được upload file bé hơn 20 MB';
        }

//Thư mục chứa file upload
        $upload_dir = 'uploads/';

//Đường dẫn của file sau khi upload
        $upload_file = $upload_dir . $_FILES['file']['name'];
        if (file_exists($upload_file)) {
            $error['file_exit'] = "file đã tồn tại";
        }
    }

    if (empty($error)) {
        echo 'file đạt chuản';
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<img src = '$upload_file'/><br>";
            echo "<a href='$upload_file'> Download: {$_FILES['file']['name']}</a>";
        } else {
            echo "Upload file ko thành công";
        }
    } else {
        show_array($error);
    }
}
?>


