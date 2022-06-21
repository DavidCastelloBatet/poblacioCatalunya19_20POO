<?php
include 'objectes.php';


$dbDriver = new MySqlDriver('server','user','pas','datos');
$dbDriver->saludar();
echo  $dbDriver->getBaseDeDades();


$dbDriverPHP8 = new MySqlDriverPHP8('server','user','pas','datos');
$dbDriverPHP8->saludar();
echo  $dbDriverPHP8->getBaseDeDades();