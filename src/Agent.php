<?php

declare(strict_types=1);

namespace AiAgent;

final class Agent
{
    public function respond(string $input): string
    {
        return trim($input);
    }
}
