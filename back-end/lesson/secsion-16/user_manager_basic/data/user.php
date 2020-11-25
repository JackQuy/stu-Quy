<?php

/*Thông tin User:
 * Họ và tên => fullname
 * Tên đăng nhập => username
 * Mật khẩu => password
 * Email
 * Id
 */

$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phạm Quý',
        'username' => 'JackQuy',
        'password' => md5('kieuoanh!@#'),
        'email' => 'phquy9192@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Kiều Oanh',
        'username' => 'OanhKute',
        'password' => md5('kieuoanh!@#'),
        'email' => 'oanh1009@gmail.com'
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Trần Thị Soa',
        'username' => 'SoaTran',
        'password' => md5('soa!@#'),
        'email' => 'trsoa18812@gmail.com'
    )
);
?>