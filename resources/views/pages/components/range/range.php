<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    #[Rule('required|gt:10')]
    public int $value = 0;

    #[Rule('required|gt:30')]
    public int $value2 = 30;
};
