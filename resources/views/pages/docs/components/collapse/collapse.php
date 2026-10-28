<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public bool $show = true;

    public function sleep(int $seconds = 2): void
    {
        sleep($seconds);
    }
};
