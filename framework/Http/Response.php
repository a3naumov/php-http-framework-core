<?php

declare(strict_types=1);

namespace Framework\Http;

final readonly class Response
{
    public function __construct(
        private ?string $content = '',
        private Status $status = Status::OK,
        private array $headers = [],
    ) {
    }

    public function send(): void
    {
        echo $this->content;
    }
}
