<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

new class extends Component
{
    public string $user;
    public string $repo;
    public ?int $count = null;

    public function mount(string $user = 'reafeichtinger', string $repo = 'bellis-ui'): void
    {
        $cacheKey = "github_stars.$user.$repo";
        $cacheDuration = 300; // in seconds

        $this->count = Cache::remember($cacheKey, $cacheDuration, function () use ($user, $repo) {
            $response = Http::get("https://api.github.com/repos/{$user}/{$repo}");

            return $response->json()['stargazers_count'] ?? 0;
        });
    }
};
