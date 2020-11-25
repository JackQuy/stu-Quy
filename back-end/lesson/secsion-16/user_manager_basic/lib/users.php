<?php


function check_login($username, $password){
    global $list_user;
//    echo 'ok';
//    show_array($list_user);
    foreach ($list_user as $user) {
        if($username == $user['username'] && md5($password) == $user['password']) {
            return TRUE;
        }
    }
    return FALSE;
}

function is_login(){
//    if(!empty($_SESSION['is_login'])){
//        return TRUE;
//    }
//    return FALSE;
    return !empty($_SESSION['is_login']);
    
}

function user_login(){
    global $list_user;
    if(is_login()) {
        foreach ($list_user as $user) {
            if($_SESSION['username'] == $user['username']) {
                return $user['fullname'];
            }
        }
    }
//    if(!empty($_SESSION['username'])) {
//        return $_SESSION['username'];
//    }
    return FALSE;
}
?>