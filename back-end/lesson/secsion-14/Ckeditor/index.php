<html>
    <head>
        <title>
            Tích hợp soạn văn bản
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
            <h1>Tích hợp Ckeditor vào website</h1>
            
            <form method="post">
                <textarea class="ckeditor" name="post_content"></textarea>
                <br>
                <input type="submit" value="Thêm dữ liệu" name="btn_add">
            </form>
        </div>
    </body>
</html>

<?php
if(isset($_POST['btn_add'])) {
    echo $_POST['post_content'];
}
?>
