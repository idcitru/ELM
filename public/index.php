<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 14.02.17
 * Time: 16:14
 */


/*
$default_route = "c_show_all";
$valid_routes = ["c_show_all"];

$route = (empty($_GET['route'])) ? $default_route : $_GET['route'];

if(in_array($route, $valid_routes)) {

    require(__DIR__ . "/../controllers/$route.php");

}
else {
    echo "wrong";
}


*/

$greatefile = fopen("/tmp/testfile.txt.", 'w') or die("Создать файл не удалось");
$text = <<<_END
     Строка 1
     Строка 2
     Строка 3
_END;
fwrite($greatefile, $text) or die("Сбой при записи файла");
fclose($greatefile);
echo "Файл успешно записан.";