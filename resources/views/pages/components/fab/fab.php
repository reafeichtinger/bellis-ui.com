<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    public function sleep(int $seconds = 2): void
    {
        sleep($seconds);
    }

    public function mainAction(): void
    {
        sleep(5);
    }
};
