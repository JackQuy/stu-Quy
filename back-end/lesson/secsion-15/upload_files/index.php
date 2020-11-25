<html>
    <head>
        <title>
            Upload gile lên server
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
            
            <form enctype="multipart/form-data" method="post" action="upload.php">
                
                <input type="file" name="file" id="file">
                <br><br>
                <input type="submit" value="Upload file" name="btn_add">
            </form>
        </div>
    </body>
</html>


