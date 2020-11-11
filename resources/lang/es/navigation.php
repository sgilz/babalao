<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Home Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default messages used by
    | the master view.
    |
    */

    'brand' => 'Babalao',
    'dropdown' => [
        'loggedIn' => [
            [
                'label' => 'Tu cuenta',
                'route' => 'user.showInformation'
            ],
            [
                'label' => 'Tus ordenes',
                'route' => 'order.list'
            ],
            [
                'label' => 'Salir',
                'route' => 'logout'
            ]
            
        ],
        'loggedOut' => [
            [
                'label' => 'Ingresar',
                'route' => 'login'
            ],
            [
                'label' => 'Crear una cuenta',
                'route' => 'register'
            ]
        ],
    ],
    'search' => 'Buscar...'
];
