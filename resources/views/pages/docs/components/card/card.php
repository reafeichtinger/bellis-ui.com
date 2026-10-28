<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public function save(): void
    {
        sleep(2);
    }

    public function save2(): void
    {
        sleep(2);
    }
};
