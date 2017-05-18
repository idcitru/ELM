<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 18.02.17
 * Time: 14:12
 */

require(__DIR__ . "/../functions/f_connect_to_base.php");


function get_funds()
{

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM funds";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_arrivals()
{

    $mysqli = connect_to_base();
    $sql = "SELECT id, date, count_name, sum, description  FROM arrivals LEFT JOIN counts ON counts.id = arrivals.count_id";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_counts()
{

    $mysqli = connect_to_base();
    $sql = "SELECT count_name, sum(sum)  FROM arrivals LEFT JOIN counts ON counts.id = arrivals.count_id GROUP BY count_name";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}


function add_arrival()
{


    $mysqli = connect_to_base();

    $mod_position = $_GET["new_position"];
    $mod_fio = $_GET["new_fio"];
    $mod_short_number = $_GET["new_short_number"];
    $mod_long_number = $_GET["new_long_number"];
    $mod_new_mobile = $_GET["new_mobile"];
    $mod_email = $_GET["email"];

    $sql = "INSERT INTO `employees` VALUES ('null', '$mod_position', '$mod_fio', '$mod_short_number', '$mod_long_number', '$mod_new_mobile', '$mod_email', 'null')";
    $mysqli->query($sql);


}


