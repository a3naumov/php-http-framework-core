<?php

declare(strict_types=1);

namespace Framework\Http;

readonly final class Request
{
    public static function createFromGlobals(): static
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }
}
