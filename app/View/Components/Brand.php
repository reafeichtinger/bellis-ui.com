<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Brand extends Component
{
    public function __construct(
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <a href="/" wire:navigate {{ $attributes->class(['flex flex-row items-center group']) }}> 
                {{-- Logo --}} 
                <img src="{{ asset('/svg/bellisui.svg') }}" class="object-contain w-11 h-11 -my-1 transition-transform duration-800 group-hover:-rotate-180" /> 
                {{-- App name --}} 
                <span class="ms-2 me-2 sm:me-6 font-semibold text-2xl text-stone-800 dark:text-stone-300">{{ config('app.name') }}</span> 
            </a>
        BLADE;
    }
}
