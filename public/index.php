<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 14.02.17
 * Time: 16:14
 */


$default_route = "c_show_all";
$valid_routes = ["c_show_all", "c_show_founds", "c_show_arrivals", "c_show_counts", "c_add_arrival"];

$route = (empty($_GET['route'])) ? $default_route : $_GET['route'];

if(in_array($route, $valid_routes)) {

    require(__DIR__ . "/../controllers/$route.php");

}
else {
    echo "wrong";
}

