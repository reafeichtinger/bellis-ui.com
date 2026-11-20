<x-layouts.base>
    {{-- blade-formatter-disable --}}
    @php
        $menu = [
            'getting-started' => [
                'title' => 'Gettings started',
                'icon' => 'sparkles',
                'items' => [
                    ['label' => 'Installation', 'link' => '/docs/install'],
                    ['label' => 'Themes', 'link' => '/docs/themes', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Config', 'link' => '/docs/config', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Contributing', 'link' => '/docs/contributing', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                ],
            ],
        ];
    @endphp
    {{-- blade-formatter-enable --}}

    {{-- Desktop menu --}}
    <x-menu.desktop title="Documentation" :menu="$menu">
        {{ $slot }}
    </x-menu.desktop>

    {{-- Mobile menu --}}
    <x-menu.mobile title="Documentation" :menu="$menu" />

    {{-- Dock --}}
    <x-dock />
</x-layouts.base>
