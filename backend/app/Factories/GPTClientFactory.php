<?php

declare(strict_types=1);

namespace App\Factories;

use OpenAI;
use OpenAI\Client;

class GPTClientFactory
{
    public static function make(): Client
    {
        return OpenAi::client(config('services.gpt.key'));
    }
}
