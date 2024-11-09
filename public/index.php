<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$request = \Framework\Http\Request::createFromGlobals();

$response = (new \Framework\Http\Kernel())->handle(request: $request);

$response->send();