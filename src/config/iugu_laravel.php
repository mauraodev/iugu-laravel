<?php

/*
|--------------------------------------------------------------------------
| File which returns array of constants containing IuguLaravel configs. 
|--------------------------------------------------------------------------
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Iugu API key
    |--------------------------------------------------------------------------
    |
    | Specify the key used to authenticate on Iugu API
    |
    */

    'production' => [
        'IUGU_API_KEY' => '<YOUR_IUGU_API_KEY>',
        'IUGU_ACCOUNT_ID' => '<YOUR_IUGU_ACCOUNT_ID>',
    ],

    'test' => [
        'IUGU_API_KEY' => '<YOUR_IUGU_API_KEY>',
        'IUGU_ACCOUNT_ID' => '<YOUR_IUGU_ACCOUNT_ID>',
    ],
];
