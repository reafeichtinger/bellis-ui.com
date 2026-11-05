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
            <c-navbar class="max-w-screen-2xl mx-auto bg-base-100 border-base-content/15 border-b-(length:--border)" sticky>
                <c-slot name="start">
                    <a href="/" wire:navigate class="flex flex-row items-center group">
                        {{-- Logo --}}
                        <img src="{{ asset('/svg/bellisui.svg') }}"
                            class="object-contain w-11 h-11 -my-1 transition-transform duration-800 group-hover:-rotate-180" />
                        {{-- App name --}}
                        <span class="ms-2 me-6 font-semibold text-2xl text-stone-800 dark:text-stone-300">
                            {{ config('app.name') }}
                        </span>
                    </a>
                </c-slot name="start">

                <c-slot name="center" class="flex items-center justify-center gap-1! lg:gap-2! ">
                    <c-menu class="gap-3" horizontal active-by-route active-class="border-primary! rounded-b-none">
                        {{-- Docs --}}
                        <c-menu-item label="Docs" link="/docs"
                            class="btn-ghost border-b-(length:--border) border-transparent" icon="book-open-text"
                            icon-class="me-1" />
                        {{-- Components --}}
                        <c-menu-item label="Components" link="/components"
                            class="btn-ghost border-b-(length:--border) border-transparent" icon="shapes" />
                        {{-- Donation --}}
                        <c-menu-item label="Donate" link="https://github.com/sponsors/reafeichtinger" external
                            class="btn-ghost text-primary" icon="hand-heart" />
                    </c-menu>
                </c-slot name="center">

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
                </c-slot name="end">
            </c-navbar>
            
            <div class="max-w-screen-2xl mx-auto py-2 px-6">
                <c-alert title="This project is currently in alpha. Daily breaking changes are to be expected. You have been warned." 
                    icon="megaphone"
                    class="alert-error alert-soft" />
            </div>
        BLADE;
    }
}
