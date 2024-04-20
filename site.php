<?php
$connection = new mysqli($hostname = "localhost", $username = "root", $password = "mysql", $database = "mysite");
if ($connection -> connect_error) exit("ошибка");
$query ="INSERT INTO `data`(`name`, `age`, `login`) VALUES ('val','13','valu')";
?>