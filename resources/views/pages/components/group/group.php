<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    public string $poison = 'tea';
};
