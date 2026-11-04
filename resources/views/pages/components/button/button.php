<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    public function testSpinner1(): void
    {
        sleep(2);
    }

    public function testSpinner2(): void
    {
        sleep(3);
    }
};
