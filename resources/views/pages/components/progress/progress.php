<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    public float $value = 0;

    public function mount(): void
    {
        $this->value = rand(0, 50);
    }

    public function increaseValue(): void
    {
        $add = rand(5, 10);
        $this->value += $add;
        if ($this->value > 100) {
            $this->value = $this->value % 100;
        }
    }

    public function save(): void
    {
        sleep(1);
    }
};
