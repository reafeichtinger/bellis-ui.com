<?php

namespace App\View\Components\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Desktop extends Component
{
    public function __construct(
        public ?string $title = null,
        public array $menu = [],
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-main with-nav collapsible>
                {{-- Sidebar --}}
                <x-slot name="sidebar" drawer="main-drawer" class="bg-base-100">
                    <c-menu active-by-route exact active-class="text-primary font-bold" class="sm:mt-6 ms-2 mb-32">
                        <c-menu-title :title="$title" class="text-base-content/50 uppercase font-normal text-xs" />
                        {{-- Build sections --}}
                        @foreach ($menu as $section)
                            <div class="group">
                                <c-divider class="p-3" />
                                @if ($section['icon'] ?? (null || $section['title'] ?? null))
                                    <c-menu-title :icon="$section['icon'] ?? null" :title="$section['title'] ?? null"
                                        class="text-base-content/50 uppercase font-normal text-xs"
                                        icon-class="transition-transform group-hover:-rotate-10 scale-95 group-hover:scale-105" />
                                @endif
                                {{-- Build items --}}
                                @foreach ($section['items'] as $item)
                                    <x-sidebar-item :title="$item['title'] ?? null" :link="$item['link'] ?? null" />
                                @endforeach
                            </div>
                        @endforeach
                    </c-menu>
                    {{-- Content --}}
                    <x-slot name="content" class="lg:max-w-4xl" wire:transition.navigate="content">
                        {{ $slot }}
                        {{-- Footer --}}
                        <x-slot name="footer">
                            <x-footer />
                        </x-slot>
                    </x-slot>
                </x-slot>
            </c-main>
        BLADE;
    }
}
