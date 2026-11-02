<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public function sleep(int $seconds): void
    {
        sleep($seconds);
    }

    public function customTarget(): void
    {
        sleep(5);
    }
};
