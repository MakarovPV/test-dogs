<?php

require_once __DIR__ . '/vendor/autoload.php';

$class = new ('Classes\\Animals\\' . ucfirst($argv[1]))();
$method = $argv[2];

echo $class->$method();