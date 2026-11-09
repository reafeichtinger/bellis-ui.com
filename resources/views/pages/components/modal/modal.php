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
    public string $confirmationType = 'neutral';
    public bool $showInitiallyOpenModal = false;

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

    #[On('show-example-confirmation')]
    public function onShowExampleConfirmation(?string $type = null): void
    {
        $this->confirmationType = $type;
    }

    #[On('close-example-confirmation')]
    public function onCloseExampleConfirmation(): void
    {
        $this->confirmationType = 'neutral';
    }

    public function confirm(): void
    {
        switch ($this->confirmationType) {
            case 'error':
                $this->error('You have confirmed the error confirmation.');
                break;
            case 'warning':
                $this->warning('You have confirmed the warning confirmation.');
                break;
            case 'info':
                $this->info('You have confirmed the info confirmation.');
                break;
            case 'success':
                $this->success('You have confirmed the success confirmation.');
                break;
        }
        $this->dispatch('close-example-confirmation');
    }

    public function getConfirmationIcon(): string
    {
        return match ($this->confirmationType) {
            'error' => 'x-circle',
            'warning' => 'triangle-exclamation-point',
            'info' => 'info',
            'success' => 'check-circle',
            default => 'loader-circle',
        };
    }
};
