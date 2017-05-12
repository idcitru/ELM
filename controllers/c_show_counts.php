<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */

require(__DIR__ . "/../models/m_empoyees.php");

$counts = get_counts();


require(__DIR__ . "/../templates/t_show_counts.php");

