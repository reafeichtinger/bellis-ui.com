<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    public ?string $selectedTab = 'tricks-tab';
    public ?string $xsmall = 'xsmall2-tab';
    public ?string $small = 'small2-tab';
    public ?string $medium = 'medium2-tab';
    public ?string $large = 'large2-tab';
    public ?string $xlarge = 'xlarge2-tab';
};
