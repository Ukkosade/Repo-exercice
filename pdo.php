<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 31/10/2018
 * Time: 15:46

 *
 */


$pdo = new PDO($dsn, $user, $password, [
	PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
	PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
	PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
