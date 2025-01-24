<?php

declare(strict_types=1);

namespace App\Services;

use App\Factories\GPTClientFactory;
use OpenAI\Client;

class GPTService
{
    private Client $client;

    public function __construct()
    {
        $this->client = GPTClientFactory::make();
    }

    public function ask(string $content): string
    {
        $result = $this->client->chat()->create([
            'model' => config('services.gpt.model'),

            'messages' => [
                [
                    'role' => 'user',
                    'content' => $content,
                ],
            ],
        ]);

        return $result->choices[0]->message->content;
    }
}
