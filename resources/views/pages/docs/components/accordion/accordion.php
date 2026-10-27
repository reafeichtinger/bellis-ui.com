<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public string $default = 'default1';
    public string $noJoin = 'noJoin1';
};
