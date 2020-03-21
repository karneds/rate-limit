<?php

declare(strict_types=1);

namespace RateLimit;

interface RateLimiter
{
    public function handle(string $identifier, Rate $rate): Status;
}
