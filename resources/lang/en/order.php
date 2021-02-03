<?php

return[
    'controller'=>[
        'message'=> [
            'add'=>'Item added successfully!',
            'buy'=>'Success! your order is now being confirmed',
            'error'=>'Error: you dont have enough money in the card. Please, use another or recharge.',
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
            'billedTo'=>'Billed to: ',
            'card'=>'CREDIT CARD ending: ',
            'delete'=>'Cancel Order',
            'email'=>'Email: ',
            'initialDate'=>'Initial date: ',
            'na'=>'N/A',
            'order'=>'Order# ',
            'orderDate'=>'Order Date: ',
            'orderSummary'=>'Order Summary: ',
            'paymentMethod'=>'Payment Method: ',
            'pdf'=>'Generate PDF',
            'product'=>'PRODUCT',
            'quantity'=>'QUANTITY',
            'status'=>'Status: ',
            'subtotal'=>'SUBTOTAL',
            'taxes'=>'Taxes',
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
