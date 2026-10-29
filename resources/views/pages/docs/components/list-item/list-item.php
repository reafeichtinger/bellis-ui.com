<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public array $users = [
        [
            'name' => 'Rea Feichtinger',
            'short_name' => 'Rea',
            'username' => '@reafeichtinger',
            'avatar' => 'https://testingbot.com/free-online-tools/random-avatar/300',
            'alt_avatar' => 'https://testingbot.com/free-online-tools/random-avatar/200',
            'address' => [
                'city' => 'London',
            ],
        ],
        ['name' => 'Jon Doe', 'username' => '@jondoe', 'avatar' => 'https://testingbot.com/free-online-tools/random-avatar/301'],
        ['name' => 'Marsha P. Johnson', 'username' => '@marshapjohnson', 'avatar' => 'https://testingbot.com/free-online-tools/random-avatar/302'],
    ];

    public function sleep(int $seconds = 2): void
    {
        sleep($seconds);
    }
};
