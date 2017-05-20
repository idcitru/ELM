<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */


require(__DIR__ . "/../models/m_elm.php");

if (!isset($_GET["id_mod"])) {
    header("Location: index.php?route=c_show_arrivals");
}

if (isset($_GET["id_mod"]) && isset($_GET["new_fio"])) {

    modify_some_employee();
    header("Location: /index.php");
}

$counts = get_some_counts();
$arrivals = get_some_arrival();

require(__DIR__ . "/../templates/t_modify_arrival.php");

