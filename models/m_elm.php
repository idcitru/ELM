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
    $sql = "SELECT arrivals.id, date, count_name, sum, description  FROM arrivals LEFT JOIN counts ON counts.id = arrivals.count_id;";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_some_arrival()
{

    $mysqli = connect_to_base();
    $sql = "SELECT arrivals.id, date, count_name, sum, description  FROM arrivals LEFT JOIN counts ON counts.id = arrivals.count_id WHERE arrivals.id = $_GET[id_mod]";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function delete_some_arrival()
{

    $del = (int)$_GET["id_del"];
    $mysqli = connect_to_base();
    $sql = "Delete from arrivals WHERE id = $del";
    $mysqli->query($sql);

}


function get_counts()
{

    $mysqli = connect_to_base();
    $sql = "SELECT count_name, sum(sum) FROM counts left join arrivals ON arrivals.count_id = counts.id  Where id_user = 1 GROUP BY count_name ;";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function add_arrival()
{

    $mysqli = connect_to_base();

    $new_date = $_GET["new_date"];
    $new_count_id = $_GET["new_count_id"];
    $new_user_id = 1;
    $new_sum = $_GET["new_sum"];
    $new_describe = $_GET["new_describe"];


    $sql = "INSERT INTO `arrivals` VALUES ('null', '$new_date', '$new_count_id', '$new_user_id', '$new_sum', '$new_describe')";
    $mysqli->query($sql);
}

function get_some_counts()
{

    $mysqli = connect_to_base();
    $sql = "SELECT id, count_name FROM counts WHERE id_user = 1";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}


