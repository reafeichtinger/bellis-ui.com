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
            <div class="flex flex-col max-w-screen-2xl mx-auto">
                <div class="flex flex-col-reverse px-4 sm:px-8 lg:px-2 lg:flex lg:flex-row gap-10 xl:gap-16 w-full min-h-screen">
                    <c-resizable end id="resizable-sidebar" persist class="max-h-screen sticky top-24 pb-32 min-w-24 w-64 max-w-96">
                        {{-- Sidebar --}}
                        <c-menu active-by-route exact active-class="text-primary font-bold" class="hidden lg:block w-full">
                            <c-menu-title :title="$title" class="text-base-content/50 uppercase font-normal text-xs" />
                            {{-- Sections --}}
                            @foreach ($menu as $section)
                                <div class="group">
                                    <c-divider class="p-3" />
                                    @if ($section['icon'] ?? (null || $section['title'] ?? null))
                                        <c-menu-title :icon="$section['icon'] ?? null" :title="$section['title'] ?? null"
                                            class="text-base-content/50 uppercase font-normal text-xs truncate"
                                            icon-class="transition-transform group-hover:-rotate-10 scale-95 group-hover:scale-105" />
                                    @endif
                                    {{-- Items --}}
                                    @foreach ($section['items'] as $item)
                                        <x-sidebar-item :label="$item['label'] ?? null" :link="$item['link'] ?? null" :badge="$item['badge'] ?? null" :badge-class="$item['badgeClass'] ?? null" />
                                    @endforeach
                                </div>
                            @endforeach
                        </c-menu>
                    </c-resizable>
                    {{-- Content --}}
                    <div wire:transition.navigate="content" class="flex-1">{{ $slot }}</div>
                    {{-- TOC --}}
                    <c-resizable start persist id="resizable-toc" class="min-w-32 w-56 max-w-96 ps-4" wire:transition.navigate="toc" content-class="relative">
                        <div class="sticky top-24 group list-none">
                            <c-menu-title icon="table-of-contents" title="On this page"
                                class="text-base-content/50 uppercase font-normal text-xs -ms-4"
                                icon-class="transition-transform group-hover:-rotate-10 scale-95 group-hover:scale-105" />
                            <c-toc class="text-sm border-s border-base-content/25" ignore="[id^='toc-example']" />
                        </div>
                    </c-resizable>
                </div>
                {{-- Footer --}}
                <x-footer />
            </div>
        BLADE;
    }
}
