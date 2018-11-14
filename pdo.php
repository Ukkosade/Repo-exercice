<?php
/**
 * fichier de config pdo
 *
 */


$pdo = new PDO($dsn, $user, $password, [
	PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
	PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
	PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
