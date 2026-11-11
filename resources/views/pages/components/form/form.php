<?php

use Bellis\Traits\Toast;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    use Toast;

    #[Rule('required|between:2,64')]
    public ?string $name = null;

    #[Rule('required|integer|between:1,999')]
    public ?string $amount = null;

    public function save(): void
    {
        $this->validate();
        $this->success('Form submitted successfully!');
    }
};
