<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public int $step = 2;

    public function prev(): void
    {
        $this->step = $this->step <= 0 ? $this->step - 1 : $this->step;
    }

    public function next(): void
    {
        $this->step = $this->step >= 3 ? $this->step + 1 : $this->step;
    }
};
