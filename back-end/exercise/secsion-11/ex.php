<?php
if (isset($_POST["register"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<html>

<head>
    <title>Form register</title>
</head>
<style type="text/css"> 
table, th, td {  
    border: 1px solid black;
    border-collapse: collapse;
   
}
th {
    width: 100px;
}
</style>
<body>
    <h1 style="color: red;">Form Register</h1>
    <form action="" method="POST" autocomplete="on" id="form1">
        <label for="fullname">Fullname</label>
        <input type="text" name="fullname" value="" id="fullname" autofocus maxlength="8" required /><br><br>
        <label for="username">username</label>
        <input type="text" name="username" value="" id="username" form="form1" disabled /><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" value="" id="password" /><br><br>
        <label for="phonenumber">Phone number</label>
        <input type="number" name="phonenumber" value="" id="phonenumber" /><br><br>
        <input type="email" name="email" /><br><br>
        Color: <input type="color" name="favcolor" /><br><br>
        Birthday:
        <input type="date" name="bday"><br><br>
        Birthday (date and time):
        <input type="datetime-local" name="bdaytime"><br><br>
        Select a file: <input type="file" name="myFile" multiple><br><br>
        Telephone:
        <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="XXX-XX-XXX"><br><br>
        Select a week:
        <input type="week" name="week_year"><br><br>
        <input type="rand" name="number" value="" >
        <input type="submit" name="register" value="Register" />
    </form>

    <hr style="margin: 50px;">
    <p>The list items <abbr title=" will be marked">What is this?</abbr> with numbers by default</p><br><br>
    <hr style="margin: 50px;">
    <img src="https://ibcoffice.com.vn/Uploads/News/22112016/News/201122155230-van-phong-rieng-IBC.jpg" usemap="#tutorials"
    style="margin-left: 50px; width: 50%; height: auto;" />
    <map name="tutorials">
        <area shape="rect" coords="250,120,310,180" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F618822805029639159%2F&psig=AOvVaw3-086EcX_x8TcW5xgpG80u&ust=1605842570427000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIivnPTTje0CFQAAAAAdAAAAABAD" >
    </map>
    <hr style="margin: 50px;">
    <table style="margin-bottom: 100px;">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th colspan="2">Gioi tinh</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Phạm Quý</td>
                <td>phquyy9192@gmail.com</td>
                <td rowspan="3">
                    Nam
                    <!-- <tr><td>nu</td></tr> -->
                </td>
                <td>q</td>
            </tr>
            <tr>
                <td>2</td>
                <td>title</td>
                <td>title</td>
                
                <td>ư</td>
            </tr>
            <tr>
                <td>3</td>
                <td></td>
                <td></td>
                
                <td>dsfs</td>
            </tr>
            
        </tbody>
    </table>
</body>

</html>