<?php
return [
    'name' => [
        'required' => 'Укажите ФИО',
        'regex'    => 'Неправильный формат ФИО',
        'max'      => 'Максимальная длина ФИО :max символов',
    ],

    'phone' => [
        'required' => 'Укажите номер телефона',
        'regex'    => 'Неправильный формат телефона',
    ],

    'email' => [
        'required' => 'Укажите Email',
        'filter'   => 'Неправильный формат Email',
        'unique'   => 'Этот Email занят',
    ],

    'address' => [
        'required' => 'Укажите адрес',
        'max'      => 'Максимальная длина адреса :max символов',
    ],

    'delivery_service' => [
        'required' => 'Укажите способ доставки',
        'in'       => 'Укажите способ доставки',
    ],

    'payment_method' => [
        'required' => 'Укажите способ оплаты',
        'in'       => 'Укажите способ оплаты',
    ],
];