<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */

require(__DIR__ . "/../models/m_elm.php");

delete_some_arrival($_GET["id_del"]);
$arrivals = get_arrivals();

require(__DIR__ . "/../templates/t_show_arrivals.php");

