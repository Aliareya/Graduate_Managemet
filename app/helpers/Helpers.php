<?php


function getenvdata(){
    return [
        "App_name" => env("APP_NAME"),
        "App_lang" => env('APP_LOCALE'),
        "App_vesion" => env('APP_VERSION'),
        "App_env" => env('APP_ENV'),
        "APP_URL" => env('APP_URL'),

    ];

}

?>