<?php

use Core\RequestFactory;

function main(): void
{
    require_once __DIR__ . '/vendor/mvc_core/mvc/src/Kernel.php';
    $request = RequestFactory::MakeRequestFromGlobals();
}
