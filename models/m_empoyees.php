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
    $sql = "SELECT date, count_name, sum, description  FROM arrivals LEFT JOIN counts ON counts.id = arrivals.count_id";
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


/*
function get_type_counts()
{

    $mysqli = connect_to_base();
    $sql = "SELECT count_name, sum(sum)  FROM arrivals LEFT JOIN counts ON counts.id = arrivals.count_id GROUP BY count_name";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}
*/


