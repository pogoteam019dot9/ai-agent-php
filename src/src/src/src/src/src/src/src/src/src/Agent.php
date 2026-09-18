<?php

declare(strict_types=1);

namespace AiAgent;

final class Agent
{
    /**
     * @param callable(string): string $handler
     */
    public function __construct(private $handler)
    {
    }

    public function run(string $input): string
    {
        $input = trim($input);

        if ($input === '') {
            throw new \InvalidArgumentException('Input cannot be empty.');
        }

        return (string) ($this->handler)($input);
    }
}
