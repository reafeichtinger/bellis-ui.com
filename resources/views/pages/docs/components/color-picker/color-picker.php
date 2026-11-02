<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public ?string $color1 = null;
    public ?string $color2 = '#ff0000';
    public ?string $color3 = '#852873';
    public ?string $color4 = null;
};
