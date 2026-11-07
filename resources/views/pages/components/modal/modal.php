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

    public string $exampleFour = 'Show modal to see something cool...';

    public function showExampleTwo(): void
    {
        $this->dispatch('show-example-two');
    }

    public function closeExampleThree(): void
    {
        $this->dispatch('close-example-three');
    }

    #[On('show-example-four')]
    public function onShowExampleFour(?string $value = null): void
    {
        $this->exampleFour = $value;
    }

    #[On('close-example-four')]
    public function oncloseExampleFour(): void
    {
        $this->reset('exampleFour');
    }

    public function acceptExampleElevent(): void
    {
        $this->success('Accepted! 🌼');
        $this->dispatch('close-example-eleven');
    }
};
