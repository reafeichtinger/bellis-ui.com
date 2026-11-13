<x-layouts.base>
    {{-- blade-formatter-disable --}}
    @php
        $menu = [
            'actions' => [
                'title' => 'Actions',
                'icon' => 'mouse-pointer-click',
                'items' => [
                    ['title' => 'Button', 'link' => '/components/button'],
                    ['title' => 'Dropdown', 'link' => '/components/dropdown'],
                    ['title' => 'Modal', 'link' => '/components/modal'],
                    ['title' => 'FAB / Speed Dial', 'link' => '/components/fab'],
                    ['title' => 'Swap', 'link' => '/components/swap'],
                    ['title' => 'Theme Toggle', 'link' => '/components/theme-toggle'],
                ],
            ],
            'data-display' => [
                'title' => 'Data display',
                'icon' => 'app-window',
                'items' => [
                    ['title' => 'Accordion', 'link' => '/components/accordion'],
                    ['title' => 'Avatar', 'link' => '/components/avatar'],
                    ['title' => 'Badge', 'link' => '/components/badge'],
                    ['title' => 'Card', 'link' => '/components/card'],
                    ['title' => 'Carousel', 'link' => '/components/carousel'],
                    ['title' => 'Collapse', 'link' => '/components/collapse'],
                    ['title' => 'Icon', 'link' => '/components/icon'],
                    ['title' => 'Kbd', 'link' => '/components/kbd'],
                    ['title' => 'List Item', 'link' => '/components/list-item'],
                    ['title' => 'Statistic', 'link' => '/components/statistic'],
                    ['title' => 'Steps', 'link' => '/components/steps'],
                    ['title' => 'Table', 'link' => '/components/table', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Timeline', 'link' => '/components/timeline'],
                ],
            ],
            'data-input' => [
                'title' => 'Data input',
                'icon' => 'pencil-line',
                'items' => [
                    ['title' => 'Checkbox', 'link' => '/components/checkbox'],
                    ['title' => 'Choices', 'link' => '/components/choices', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Form', 'link' => '/components/form'],
                    ['title' => 'Group', 'link' => '/components/group'],
                    ['title' => 'Image library', 'link' => '/components/image-library', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Input color', 'link' => '/components/input-color'],
                    ['title' => 'Input date', 'link' => '/components/input-date'],
                    ['title' => 'Input datetime', 'link' => '/components/input-datetime'],
                    ['title' => 'Input email', 'link' => '/components/input-email'],
                    ['title' => 'Input file', 'link' => '/components/input-file'],
                    ['title' => 'Input number', 'link' => '/components/input-number'],
                    ['title' => 'Input password', 'link' => '/components/input-password'],
                    ['title' => 'Input phone', 'link' => '/components/input-tel'],
                    ['title' => 'Input search', 'link' => '/components/input-search'],
                    ['title' => 'Input time', 'link' => '/components/input-time'],
                    ['title' => 'Input url', 'link' => '/components/input-url'],
                    ['title' => 'Input', 'link' => '/components/input'],
                    ['title' => 'Pin', 'link' => '/components/pin'],
                    ['title' => 'Radio', 'link' => '/components/radio'],
                    ['title' => 'Range slider', 'link' => '/components/range', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Rating', 'link' => '/components/rating', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Select', 'link' => '/components/select', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Tags', 'link' => '/components/tags', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Textarea', 'link' => '/components/textarea', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Toggle', 'link' => '/components/toggle', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                ],
            ],
            'feedback' => [
                'title' => 'Feedback',
                'icon' => 'message-circle-more',
                'items' => [
                    ['title' => 'Alert', 'link' => '/components/alert'],
                    ['title' => 'Popover', 'link' => '/components/popover', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Progress', 'link' => '/components/progress', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Toast', 'link' => '/components/toast', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Validation group', 'link' => '/components/validation-group'],
                ],
            ],
            'layout' => [
                'title' => 'Navigation & Layout',
                'icon' => 'cable',
                'items' => [
                    ['title' => 'Breadcrumbs', 'link' => '/components/breadcrumbs', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Drawer', 'link' => '/components/drawer', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Dock / Bottom Navigation', 'link' => '/components/dock'],
                    ['title' => 'Header', 'link' => '/components/header'],
                    ['title' => 'Layout', 'link' => '/components/layout', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Menu', 'link' => '/components/menu', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Sidebar', 'link' => '/components/sidebar', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['title' => 'Tabs', 'link' => '/components/tabs', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                ],
            ],
            'third-party' => [
                'title' => 'Third-party',
                'icon' => 'puzzle',
                'items' => [
                    ['title' => 'Calendar', 'link' => '/components/calendar'],
                    ['title' => 'Chart', 'link' => '/components/chart'],
                    ['title' => 'Code', 'link' => '/components/code'],
                    ['title' => 'Date Picker', 'link' => '/components/date-picker'],
                    ['title' => 'Diff', 'link' => '/components/diff'],
                    ['title' => 'Image Gallery', 'link' => '/components/image-gallery'],
                    ['title' => 'Markdown Editor', 'link' => '/components/markdown-editor'],
                    ['title' => 'Rich Text Editor', 'link' => '/components/rich-text-editor'],
                    ['title' => 'Signature', 'link' => '/components/signature'],
                    ['title' => 'Spotlight', 'link' => '/components/spotlight'],
                ],
            ],
        ];
    @endphp
    {{-- blade-formatter-enable --}}

    {{-- Desktop menu --}}
    <x-menu.desktop title="Components" :menu="$menu">
        {{ $slot }}
    </x-menu.desktop>

    {{-- Mobile menu --}}
    <x-menu.mobile title="Components" :menu="$menu" />

    {{-- Dock --}}
    <x-dock />
</x-layouts.base>
