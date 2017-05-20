<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */

require(__DIR__ . "/../models/m_elm.php");

if (isset($_GET["new_date"]) && isset($_GET["new_date"])) {

    add_arrival();
    header("Location: index.php?route=c_show_arrivals");
}

$counts = get_some_counts();
require(__DIR__ . "/../templates/t_add_arrival.php");

