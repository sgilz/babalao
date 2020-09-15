<?php

return[
    'title'=>'Registered Orders',
    'creationTitle'=>'New Order',
    'details'=>'Details',
    'messages'=>[
        'saveSuccess'=>'Order created successfully!'
    ],

    'views'=>['details'=>
                ['initialDate'=>'Initial date: ',
                'state'=>'State: ',
                'total'=>'Total: ',
                'delete'=>'Delete',
                'back'=>'Back'],
            'create'=>
                ['pending'=>'PENDING',
                'confirmed'=>'CONFIRMED',
                'preparing'=>'PREPARING_ORDER',
                'dispatched'=>'DISPATCHED',
                'delivered'=>'DELIVERED',
                'state'=>'State',
                'date'=>'Date',
                'submit'=>'Submit',
                'total'=>'Total'],
            'index'=>
                ['new'=>'NEW ORDER',
                'list'=>'LIST PRODUCTS'],
            'list'=>
                ['title'=>'Registered Orders']
    ]
];
