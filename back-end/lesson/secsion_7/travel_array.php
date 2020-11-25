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
    )
);

foreach ($list_user as $item) {
    foreach ($item as $value) {
        echo $value."<br>";
    }
    echo "<br>===================<br>";
}

