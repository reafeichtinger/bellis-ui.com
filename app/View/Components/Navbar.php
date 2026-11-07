<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public function __construct(
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-navbar class="max-w-screen-2xl mx-auto bg-base-100 border-base-content/15 border-b-(length:--border)" sticky wire:transition.navigate="navbar">
                <c-slot name="start">
                    <x-brand />
                </c-slot>

                <c-slot name="center" class="flex items-center justify-center gap-1! lg:gap-2! ">
                    <c-menu class="gap-3 hidden lg:flex" horizontal active-by-route active-class="border-b-primary! rounded-b-none">
                        {{-- Docs --}}
                        <c-menu-item label="Docs" link="/docs"
                            class="btn-ghost border-y-(length:--border) border-transparent" icon="book-open-text"
                            icon-class="me-1" />
                        {{-- Components --}}
                        <c-menu-item label="Components" link="/components"
                            class="btn-ghost border-y-(length:--border) border-transparent" icon="shapes" />
                        {{-- Donation --}}
                        <c-menu-item label="Donate" link="https://github.com/sponsors/reafeichtinger" external
                            class="btn-ghost text-primary border-y-(length:--border) border-transparent" icon="hand-heart" />
                    </c-menu>
                </c-slot>

                <c-slot name="end">
                    <c-menu class="gap-3 items-center justify-end" horizontal>
                        <div class="tooltip tooltip-left" data-tip="GitHub">
                            {{-- GitHub --}}
                            <c-menu-item link="https://github.com/reafeichtinger/bellis-ui" class="rounded-full" external>
                                <livewire:components.github-stars lazy class="badge-secondary badge-soft"/>
                                <c-icon name="fab.github" class="ms-2" />
                            </c-menu-item>
                        </div>

                        <c-divider vertical />

                        {{-- Theme toggle --}}
                        <c-theme-toggle class="btn btn-circle btn-ghost" lightTheme="bellis-light" darkTheme="bellis-dark" />
                    </c-menu>
                </c-slot>
            </c-navbar>
            {{-- Alert --}}
            <div class="max-w-screen-2xl mx-auto py-2 px-6" wire:transition.navigate="alert">
                <c-alert title="This project is currently in alpha and the package has not yet been released." 
                    icon="megaphone"
                    class="alert-error alert-soft" />
            </div>
        BLADE;
    }
}
