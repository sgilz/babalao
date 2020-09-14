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
                'label' => 'Your Account',
                'route' => 'user.showInformation'
            ],
            [
                'label' => 'Your orders',
                'route' => 'home'
            ],
            [
                'label' => 'Logout',
                'route' => 'logout'
            ]
            
        ],
        'loggedOut' => [
            [
                'label' => 'Login',
                'route' => 'login'
            ],
            [
                'label' => 'Sign Up',
                'route' => 'register'
            ]
        ],
    ]


];
