<?php

require __DIR__ . '/vendor/autoload.php';

Requests::register_autoloader();

$request = Requests::post('http://httpbin.org/post', array(), array('mydata' => 'something'));
// Check what we received
var_dump($request);
