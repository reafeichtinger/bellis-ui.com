<?php

use Bellis\Traits\Toast;
use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.components')]
class extends Component
{
    use Toast;

    public function default(): void
    {
        $this->success('We are done, check it out');
    }

    public function quick(): void
    {
        $this->error(
            'It will last just 1 second ...',
            timeout: 1000,
            position: 'toast-bottom toast-start',
        );
    }

    public function withRedirect(): void
    {
        $this->warning(
            'It is working with redirect',
            'You were redirected to another url ...',
            redirectTo: '/components/form',
        );
    }

    public function progress(): void
    {
        $this->info(
            'Custom progress class',
            progressClass: 'progress-error',
        );
    }

    public function customStyle()
    {
        $this->toast(
            title: 'Wishlist <u>updated</u>!',
            type: 'custom',
            description: 'You will <strong>love it 😍</strong>',
            position: 'toast-top toast-end',
            icon: 'heart',
            css: 'bg-pink-500 text-base-100',
            progressClass: '-mt-4 text-pink-300',
        );
    }
};
