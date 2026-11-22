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

    #[On('rezisable-updated')]
    public function onResizableUpdated(?string $id = null, ?string $width = null, ?string $height = null): void
    {
        if ($id === 'resize-event-test') {
            $this->success("'$id' was resized to width '$width', height '$height'");
        }
    }
};
