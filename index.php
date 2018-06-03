<?php


require 'vendor/autoload.php';

use Demo\Demo;

$demo = new Demo();

$demo->setIntField(5);

var_dump($demo->getIntField());
