<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    public ?string $validation = null;
    public ?string $validation2 = null;
    public ?string $validation3 = null;

    public function mount(): void
    {
        $this->addError('validation', 'Name is required.');
        $this->addError('validation', 'Name must be at least 12 characters long.');
        $this->addError('validation2', 'This error is on $validation2 🤯');
        $this->addError('validation3', '$validation3 seems weird');
    }

    public function addErrorFor(string $property): void
    {
        $this->addError($property, 'This field is required');
    }

    public function resetErrorFor(string $property): void
    {
        $this->resetErrorBag($property);
    }
};
