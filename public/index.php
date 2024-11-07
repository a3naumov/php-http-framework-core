<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$request = \Framework\Http\Request::createFromGlobals();

$response = new \Framework\Http\Response(content: '<h1>Hello World</h1>');

$response->send();