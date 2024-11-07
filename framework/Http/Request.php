<?php

declare(strict_types=1);

namespace Framework\Http;

final readonly class Request
{
    public function __construct(
        public array $getParams,
        public array $postParams,
        public array $cookies,
        public array $files,
        public array $server,
    ) {
    }

    public static function createFromGlobals(): static
    {
        return new static(
            getParams: $_GET,
            postParams: $_POST,
            cookies: $_COOKIE,
            files: $_FILES,
            server: $_SERVER,
        );
    }
}
