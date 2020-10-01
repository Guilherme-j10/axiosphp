<?php

    require_once 'vendor/autoload.php';

    use src/Axios;

    $axios = new Axios();

    $axios->fetch('https://jsonplaceholder.typicode.com/posts?userId=1', [
        "method" => "POST",
        "body" => [
            "title" => "ola mundo",
            "message" => "......"
        ]
    ]);