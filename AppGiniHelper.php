<?php

namespace bizzworxx;

class AppGiniHelper
{
    public static function init(): void
    {
        // autoloading classes
        spl_autoload_register(function ($class) {
            // convert namespace separators to directory separators
            $class = str_replace('\\', '/', $class);
            @include_once(APP_DIR . "/vendor/{$class}.php");
        });
    }
}