<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | By default the theme light is activated, but you can change it by
    | specifying the dark mode. To change theme, update the global variable to `dark`
    |
    */

    'theme' => env('NOTIFY_THEME', 'dark'),

    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    |
    */

    'timeout' => 5000,

    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    | Available model: connect, drake, emotify, smiley, toast
    |
    */

    'preset-messages' => [
        // An example preset 'user updated' Connectify notification.
        'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type' => 'success',
            'model' => 'connect',
            'title' => 'User Updated',
        ],
        'alerta-agregar' => [
            'message' => '¡¡Datos guardados con éxito!!',
            'type' => 'success',
            'model' => 'toast',
            'title' => 'ACCIÓN AÑADIR',
        ],
        'alerta-editar' => [
            'message' => '¡¡Se cambiaron los datos con éxito!!',
            'type' => 'success',
            'model' => 'toast',
            'title' => 'ACCIÓN EDITAR',
        ],
        'alerta-borrar' => [
            'message' => '¡¡Datos eliminados de la tabla!!',
            'type' => 'success',
            'model' => 'toast',
            'title' => 'ACCIÓN ELIMINAR',
        ],
        'alerta-error' => [
            'message' => 'Imposible eliminar los datos porque estan siendo ocupados en otra tabla',
            'type' => 'error',
            'model' => 'toast',
            'title' => 'ERROR',
        ],
    ],

];
