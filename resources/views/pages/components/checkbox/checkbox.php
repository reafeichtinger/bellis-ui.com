<?php

use Bellis\Traits\Toast;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Renderless;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    use Toast;

    public bool $value = true;
    public bool $validation = false;
    public bool $validation2 = false;

    public function mount(): void
    {
        $this->addError('validation', 'This field is required.');
        $this->addError('validation', 'This must be accepted.');
        $this->addError('validation2', 'This error is on $validation2 🤯');
    }

    #[Renderless]
    #[On('validation-dismissed')]
    public function onValidationDismissed(mixed $field = null): void
    {
        $this->success('You can listen to the `validation-dismissed` event in Livewire to actually reset the error bag!');
    }
};
