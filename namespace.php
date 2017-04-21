<?php
require_once('index.php');

$obj = new \Home\User('Alexey', '654321', 'alexey33@email.com', 'Dallas');
echo $obj->getInfo();

#создание псевдонима для namespace
use newClass\Home as Home;
?>