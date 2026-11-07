<x-layouts.base>
    @php
        $menu = [
            'getting-started' => [
                'title' => 'Gettings started',
                'icon' => 'sparkles',
                'items' => [
                    ['title' => 'Installation', 'link' => '/docs/install'],
                    ['title' => 'Themes', 'link' => '/docs/themes'],
                    ['title' => 'Config', 'link' => '/docs/config'],
                    ['title' => 'Contributing', 'link' => '/docs/contributing'],
                ],
            ],
        ];
    @endphp

    {{-- Desktop menu --}}
    <c-main with-nav collapsible>
        {{-- Sidebar --}}
        <c-slot:sidebar drawer="main-drawer" class="bg-base-100">
            <c-menu active-by-route exact active-class="text-primary font-bold" class="sm:mt-6 ms-2 mb-32">
                <c-menu-title title="Documentation" class="text-base-content/50 uppercase font-normal text-xs" />
                {{-- Build sections --}}
                @foreach ($menu as $section)
                    <div class="group">
                        <c-divider class="p-3" />
                        @if (($section['icon'] ?? null) || ($section['title'] ?? null))
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
            <c-slot:content class="lg:max-w-4xl pt-10!" wire:transition.navigate>
                {{ $slot }}
                {{-- Footer --}}
                <c-slot:footer>
                    <x-footer />
                </c-slot:footer>
            </c-slot:content>
        </c-slot:sidebar>
    </c-main>

    {{-- Mobile menu --}}
    <c-modal name="main-navigation" container-class="modal-bottom backdrop-blur-xs"
        class="border-t border-base-content/15 p-2">
        <c-menu active-by-route exact active-class="text-primary font-bold">
            {{-- Header --}}
            <div
                class="text-base-content/50 uppercase font-normal text-xs px-3 flex items-center flex-row justify-between">
                <span>Documentation</span>
                <c-button icon="x" class="btn-ghost btn-circle text-base-content/50 -me-2.5"
                    x-on:click="close()" />
            </div>
            <c-divider class="p-3" />
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
    {{-- Dock --}}
    <x-dock />
</x-layouts.base>
