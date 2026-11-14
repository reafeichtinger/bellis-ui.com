<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    public ?int $rating = null;
    public ?int $rating1 = 1;
    public ?int $rating2 = 2;
    public ?int $rating3 = 3;
    public ?int $rating4 = 4;
};
