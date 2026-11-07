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
    <x-menu.desktop :menu="$menu">
        {{ $slot }}
    </x-menu.desktop>

    {{-- Mobile menu --}}
    <x-menu.mobile :menu="$menu" />

    {{-- Dock --}}
    <x-dock />
</x-layouts.base>
