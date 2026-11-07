<?php

namespace App\View\Components\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Mobile extends Component
{
    public function __construct(
        public array $menu = [],
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-modal name="main-navigation" container-class="modal-bottom backdrop-blur-xs"
                class="border-t-(length:--border) border-base-content/15 p-2 rounded-t-2xl bg-white dark:bg-black">
                <c-menu class="menu-lg gap-2" active-by-route exact active-class="text-primary font-bold">
                    {{-- Header --}}
                    <div
                        class="text-base-content/50 uppercase font-normal text-xs px-3 flex items-center flex-row justify-between">
                        <span>Documentation</span>
                        <c-button icon="x" class="btn-ghost btn-circle text-base-content/50 -me-2.5"
                            x-on:click="close()" />
                    </div>
                    <c-divider class="px-3" />
                    {{-- Build sections --}}
                    @foreach ($menu as $section)
                        {{-- Actions --}}
                        <c-menu-sub :icon="$section['icon'] ?? null" :title="$section['title'] ?? null">
                            {{-- Build items --}}
                            @foreach ($section['items'] as $item)
                                <x-sidebar-item :title="$item['title'] ?? null" :link="$item['link'] ?? null" />
                            @endforeach
                        </c-menu-sub>
                    @endforeach
                </c-menu>
            </c-modal>
        BLADE;
    }
}
