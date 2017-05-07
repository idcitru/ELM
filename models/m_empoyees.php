<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 18.02.17
 * Time: 14:12
 */

require(__DIR__ . "/../functions/f_connect_to_base.php");

function get_all_employees()
{

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM employees";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_all_employees_admin()
{

    $mysqli = connect_to_base();
    $sql = "SELECT employees.id, position, fio, short_number, long_number, mobile, email, name  FROM employees LEFT JOIN department ON department.id = employees.department_id";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_all_departments()
{

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM department";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_some_employee()
{

    $mysqli = connect_to_base();
    $some_employee = htmlspecialchars($_GET["name_of_employee"]);
    $sql = "SELECT * FROM employees WHERE fio LIKE '%$some_employee%'";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function get_some_employee_id()
{

    $mysqli = connect_to_base();
    $id_mod = (int)$_GET["id_mod"];
    $sql = "SELECT * FROM employees WHERE id LIKE '$id_mod'";
    $result = $mysqli->query($sql);
    return $result->fetch_all();

}

function modify_some_employee()
{

    $mysqli = connect_to_base();

    $id_mod = (int)$_GET["id_mod"];
    $mod_position = $_GET["new_position"];
    $mod_fio = $_GET["new_fio"];
    $mod_short_number = $_GET["new_short_number"];
    $mod_long_number = $_GET["new_long_number"];
    $mod_new_mobile = $_GET["new_mobile"];
    $mod_email = $_GET["email"];

    $sql = "UPDATE employees set `POSITION` = '$mod_position', fio = '$mod_fio', short_number = '$mod_short_number', long_number = '$mod_long_number', mobile = '$mod_new_mobile', email = '$mod_email' where id = $id_mod";
    $mysqli->query($sql);
}

function add_new_employee()
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

function delete_product()
{

    $del = (int)$_GET["id_del"];
    $mysqli = connect_to_base();
    $sql = "Delete from employees WHERE id = $del";
    $mysqli->query($sql);

}

function convert_string($stringin)
{

    return mb_convert_case(strtolower($stringin), MB_CASE_TITLE, "UTF-8");

}

function get_birthday()
{
    $thismonths = date("d.m");

    $mysqli = connect_to_base();
    $sql = "SELECT * FROM employees WHERE birthday LIKE '%$thismonths.%'";
    $result = $mysqli->query($sql);
    return $result->fetch_all();


}


