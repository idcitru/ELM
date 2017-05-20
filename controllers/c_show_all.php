<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */

require(__DIR__ . "/../models/m_elm.php");

$counts = get_counts();
$sum = 0;
foreach ($counts as $count) {

    $sum+= $count[1];
}


require(__DIR__ . "/../templates/t_show_all.php");



