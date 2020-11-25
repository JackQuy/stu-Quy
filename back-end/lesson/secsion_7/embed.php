<?php

$list_user = array(
    1 => array(
        'id' => '1',
        'fullName' => 'Phạm Quý',
        'email' => 'phquy9192@gmail.com'
    ),
    2 => array(
        'id' => '2',
        'fullName' => 'Trần Thị Soa',
        'email' => 'soatran1812@gmail.com'
    ),
    3 => array(
        'id' => '3',
        'fullName' => 'Kiều Oanh',
        'email' => 'kieuoanh1711@gmail.com'
    )
);
?>

<html>
    <head>
        <title>
            Nhúng mảng php vào html
        </title>
    </head>
    <style>
        table thead {
            text-align: center;
            font-weight: bold;
             background-color : #0080FF;
        }
        table {
            border-collapse: collapse;
        }
    </style>
    <body>
        <h1>Danh sách employee</h1>
        <table border = "1">
            <thead>
                <tr>
                    <td width = "50" align = "center">id</td>
                    <td width = "150">full Name</td>
                    <td width = "100">email</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_user as $item){
                ?>
                <tr>
                    <?php
                    foreach ($item as $value){
                    ?>
                    <td>
                        <?php
                        echo $value;
                        ?>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>

<?php
        echo max(array(3, 4, 8, 'a'));
?>