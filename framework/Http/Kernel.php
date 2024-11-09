<?php

declare(strict_types=1);

namespace Framework\Http;

final readonly class Kernel
{
    public function handle(Request $request): Response
    {
        $content = 'Hello, world';

        return new Response(content: $content);
    }
}
