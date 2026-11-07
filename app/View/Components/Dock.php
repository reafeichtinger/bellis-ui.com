<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dock extends Component
{
    public function __construct(
        public bool $showMenu = true,
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-dock class="border-t border-base-content/15 bg-base-200 rounded-t-field lg:hidden"
                active-by-route active-class="after:bg-primary" wire:transition.navigate="dock">
                <c-dock-item icon="book-open-text" label="Docs" link="/docs" class="active:bg-base-300" />
                <c-dock-item icon="shapes" label="Components" link="/components" class="active:bg-base-300" />
                <c-divider vertical class="max-w-1" style="--border: 1px" />
                @if ($showMenu)
                    <c-dock-item icon="menu" label="Menu" class="active:bg-base-300" x-on:click="$dispatch('show-main-navigation')" />
                @else
                    <c-dock-item icon="hand-heart" label="Donate" class="text-primary active:bg-base-300" link="https://github.com/sponsors/reafeichtinger" external />
                @endif
            </c-dock>
        BLADE;
    }
}
