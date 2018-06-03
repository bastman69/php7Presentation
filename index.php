<?php

require 'vendor/autoload.php';

$dispatcher = new \Demo\ExceptionDispatcher();

try {
    $dispatcher->throwAnError();
} catch (Error $e) {
    var_dump($e->getMessage());
}
