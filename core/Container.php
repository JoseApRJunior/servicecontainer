<?php

namespace core;

class Container implements ContainerInterface
{
    private array $bindings = [];

    public function __construct(
        public readonly ResolveContainer $resolveContainer
    ) {}
    public function bind(
        string $key,
        mixed $value
    ) {
        $this->bindings[$key] = $value;
    }

    public function addDefinitions(array|string $definitions)
    {
        if (is_string($definitions) && ($file = APP_PATH . DIRECTORY_SEPARATOR . $definitions) && file_exists($file)) {
            $definitions = require $file;
        }

        foreach ($definitions as $key => $value) {
            $this->bind($key, $value);
        }
    }

    public function get(string $key)
    {
        if (isset($this->bindings[$key])) {
            $bind = $this->bindings[$key];
            if ($bind instanceof \Closure) {
                return $bind();
            }
            return $this->bindings[$key];
        }
        if (class_exists($key)) {
            return $this->resolveContainer->instance($key, $this);
        }
    }
}
