<?php

namespace Core\Router;

use Attribute;


#[Attribute]
class Route
{

    public function __construct(
        public string $path,
        public $methods = array(),
        public $name = null
    ) {
    }
}