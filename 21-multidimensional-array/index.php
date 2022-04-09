<?php

    $data = [
        [
            'name' => 'Jose',
            'email' => 'jose@gmail.com',
            'phone' => '9971667839',
            'address' => [
                'country' => 'México',
                'city' => 'Guadalajara',
            ]
        ],
        [
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'phone' => '9971667839',
        ],
        [
            'name' => 'pedro',
            'email' => 'pedro@gmail.com',
            'phone' => '9971667839',
        ],
    ];

    foreach($data as $item) {
        echo $item['name'].'<br>';
        echo $item['email'].'<br>';
        echo $item['phone'].'<br>';

        echo '<hr>';
    }
?>