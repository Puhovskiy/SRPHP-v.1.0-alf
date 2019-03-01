<?php
function startRouter(){
    $routes = include 'routes.php';
    if(array_key_exists($_SERVER['REQUEST_URI'], $routes) ){
        foreach ($routes as $key => $value) {
            switch ($_SERVER['REQUEST_URI']) {
                case $key:
                    print 'Loading page: '.$value[0].' status:' . $value[1];
                    break;
            }
        }
    } else print 'Error: 404!';
}

function startCms(){
    startRouter();
}
?>

