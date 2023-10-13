<?php
    $user = "/omeansteam";
    $branch =  "/omeansteam.github.io";
    $master = $user.$branch;
    $path = "protected/views/";
    $path_view = $master.$path;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $master.'/' :
            require $path."index.php";
            break;
        case $master.'/about' :
            require $path."about/index.php";
            break;
        case $master.'/contact' :
            require $path."contact/index.php";
            break;
        default:
            http_response_code(404);
            require $path."404/index.php";
            break;
    }
