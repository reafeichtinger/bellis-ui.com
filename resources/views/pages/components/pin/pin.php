<?php

use Bellis\Traits\Toast;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    use Toast;

    public ?string $value = null;
    public ?string $events = null;

    #[On('pin-complete')]
    public function onPinComplete(mixed $value, string $field): void
    {
        if ($field === 'events') {
            $this->info('You can listen to the completed event in Livewire or via AlpineJS. Value: ' . $value, timeout: 10000);
        }
    }
};
