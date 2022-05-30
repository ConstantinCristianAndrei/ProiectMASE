<?php

$serverName = "servermase.database.windows.net";
$connectionOptions = [
	"Database"=>"dbMASE",
	"Uid"=>"adminmase",
	"PWD"=>"Parola1!"
];
$con = sqlsrv_connect($serverName, $connectionOptions);
if($con == false)
	die(print_r(sqlsrv_errors(), true));
else echo 'Conectare reusita!';
