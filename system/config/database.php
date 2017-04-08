<?php

$config['charset'] = 'utf8';
$config['prefix'] = 'aws_';
$config['driver'] = 'PDO_MYSQL';
$config['master'] = array (
  'charset' => 'utf8',
  'host' => getenv('db_ip') ?: 'localhost',,
  'username' => getenv('db_user') ?: 'root',
  'password' => getenv('db_psw') ?: 'root',
  'dbname' => getenv('dbname') ?: 'mbrs_wd',
);
$config['slave'] = false;
