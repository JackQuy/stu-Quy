<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function show_data($data){
    if(is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

?>

