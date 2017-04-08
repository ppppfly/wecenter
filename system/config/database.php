<?php

$config['charset'] = 'utf8';
$config['prefix'] = 'aws_';
$config['driver'] = 'PDO_MYSQL';
$config['master'] = array (
  'charset' => 'utf8',
  'host' => getenv('DB_HOST') ?: 'localhost',,
  'username' => getenv('DB_USER') ?: 'root',
  'password' => getenv('DB_PWD') ?: 'root',
  'dbname' => getenv('DB_NAME') ?: 'mbrs_wd',
);
$config['slave'] = false;
