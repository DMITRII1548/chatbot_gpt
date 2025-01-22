<?php

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
