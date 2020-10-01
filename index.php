<?php

    require_once "vendor/autoload.php";

    use src\Axios;

    $axios = new Axios();

    echo $axios->fetch('https://jsonplaceholder.typicode.com/posts?userId=1',  [
        "method" => "GET"
    ]);