<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */

require(__DIR__ . "/../models/m_empoyees.php");

add_arrival();
header("Location: index.php?route=c_show_arrivals");

require(__DIR__ . "/../templates/t_show_arrivals.php");

