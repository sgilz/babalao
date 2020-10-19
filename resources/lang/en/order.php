<?php

return[
    'controller'=>[
        'message'=> [
            'add'=>'Item added successfully!',
            'buy'=>'Success! your order is now being confirmed'
        ]
    ],
    'creationTitle'=>'New Order',
    'details'=>'Details',
    'messages'=>[
        'saveSuccess'=>'Order created successfully!'
    ],
    'title'=>'Registered Orders',
    'views'=>[
        'create'=> [
            'confirmed'=>'CONFIRMED',
            'date'=>'Date',
            'delivered'=>'DELIVERED',
            'dispatched'=>'DISPATCHED',
            'pending'=>'PENDING',
            'preparing'=>'PREPARING_ORDER',
            'status'=>'Status',
            'submit'=>'Submit',
            'total'=>'Total'
            ],
        'details'=> [
            'back'=>'Back',
            'delete'=>'Cancel Order',
            'initialDate'=>'Initial date: ',
            'status'=>'Status: ',
            'total'=>'Total: ',
        ],
        'index'=> [
            'list'=>'LIST PRODUCTS',
            'new'=>'NEW ORDER',
        ],
        'list'=> [
            'title'=>'My Orders',
            'order#'=>'Order number: ',
            'total'=>'Total: ',
            'date'=>'Bought at ',
            'details'=> 'Details',
            'review'=>'Do a review',
        ],
    ],
];
