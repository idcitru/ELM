<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 16.02.17
 * Time: 17:13
 */

require(__DIR__ . "/../models/m_empoyees.php");

$birthdays = get_birthday();
$departments = get_all_departments();
$employees = get_all_employees();

require(__DIR__ . "/../templates/t_show_all.php");



