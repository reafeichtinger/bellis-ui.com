<x-layouts.base>
    {{-- blade-formatter-disable --}}
    @php
        $menu = [
            'actions' => [
                'title' => 'Actions',
                'icon' => 'mouse-pointer-click',
                'items' => [
                    ['label' => 'Button', 'link' => '/components/button'],
                    ['label' => 'Dropdown', 'link' => '/components/dropdown'],
                    ['label' => 'Modal', 'link' => '/components/modal'],
                    ['label' => 'FAB / Speed Dial', 'link' => '/components/fab'],
                    ['label' => 'Swap', 'link' => '/components/swap'],
                    ['label' => 'Theme Toggle', 'link' => '/components/theme-toggle'],
                ],
            ],
            'data-display' => [
                'title' => 'Data display',
                'icon' => 'app-window',
                'items' => [
                    ['label' => 'Accordion', 'link' => '/components/accordion'],
                    ['label' => 'Avatar', 'link' => '/components/avatar'],
                    ['label' => 'Badge', 'link' => '/components/badge'],
                    ['label' => 'Card', 'link' => '/components/card'],
                    ['label' => 'Carousel', 'link' => '/components/carousel'],
                    ['label' => 'Collapse', 'link' => '/components/collapse'],
                    ['label' => 'Icon', 'link' => '/components/icon'],
                    ['label' => 'Kbd', 'link' => '/components/kbd'],
                    ['label' => 'List Item', 'link' => '/components/list-item'],
                    ['label' => 'Statistic', 'link' => '/components/statistic'],
                    ['label' => 'Steps', 'link' => '/components/steps'],
                    ['label' => 'Table', 'link' => '/components/table', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Timeline', 'link' => '/components/timeline'],
                ],
            ],
            'data-input' => [
                'title' => 'Data input',
                'icon' => 'pencil-line',
                'items' => [
                    ['label' => 'Checkbox', 'link' => '/components/checkbox'],
                    ['label' => 'Choices', 'link' => '/components/choices', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Form', 'link' => '/components/form'],
                    ['label' => 'Group', 'link' => '/components/group'],
                    ['label' => 'Image library', 'link' => '/components/image-library', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Input color', 'link' => '/components/input-color'],
                    ['label' => 'Input date', 'link' => '/components/input-date'],
                    ['label' => 'Input datetime', 'link' => '/components/input-datetime'],
                    ['label' => 'Input email', 'link' => '/components/input-email'],
                    ['label' => 'Input file', 'link' => '/components/input-file'],
                    ['label' => 'Input number', 'link' => '/components/input-number'],
                    ['label' => 'Input password', 'link' => '/components/input-password'],
                    ['label' => 'Input phone', 'link' => '/components/input-tel'],
                    ['label' => 'Input search', 'link' => '/components/input-search'],
                    ['label' => 'Input time', 'link' => '/components/input-time'],
                    ['label' => 'Input url', 'link' => '/components/input-url'],
                    ['label' => 'Input', 'link' => '/components/input'],
                    ['label' => 'Pin', 'link' => '/components/pin'],
                    ['label' => 'Radio', 'link' => '/components/radio'],
                    ['label' => 'Range slider', 'link' => '/components/range'],
                    ['label' => 'Rating', 'link' => '/components/rating'],
                    ['label' => 'Select', 'link' => '/components/select'],
                    ['label' => 'Tags', 'link' => '/components/tags', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Textarea', 'link' => '/components/textarea'],
                    ['label' => 'Toggle', 'link' => '/components/toggle'],
                ],
            ],
            'feedback' => [
                'title' => 'Feedback',
                'icon' => 'message-circle-more',
                'items' => [
                    ['label' => 'Alert', 'link' => '/components/alert'],
                    ['label' => 'Loading', 'link' => '/components/loading'],
                    ['label' => 'Popover', 'link' => '/components/popover'],
                    ['label' => 'Progress', 'link' => '/components/progress'],
                    ['label' => 'Toast', 'link' => '/components/toast'],
                    ['label' => 'Validation group', 'link' => '/components/validation-group'],
                ],
            ],
            'layout' => [
                'title' => 'Navigation & Layout',
                'icon' => 'cable',
                'items' => [
                    ['label' => 'Breadcrumbs', 'link' => '/components/breadcrumbs'],
                    ['label' => 'Drawer', 'link' => '/components/drawer'],
                    ['label' => 'Dock / Bottom Navigation', 'link' => '/components/dock'],
                    ['label' => 'Header', 'link' => '/components/header'],
                    ['label' => 'Layouts', 'link' => '/components/layout', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Menu', 'link' => '/components/menu'],
                    ['label' => 'Sidebar', 'link' => '/components/sidebar', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Tabs', 'link' => '/components/tabs'],
                    ['label' => 'TOC (Table of contents)', 'link' => '/components/toc'],
                ],
            ],
            'third-party' => [
                'title' => 'Third-party',
                'icon' => 'puzzle',
                'items' => [
                    ['label' => 'Calendar', 'link' => '/components/calendar', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Chart', 'link' => '/components/chart', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Code', 'link' => '/components/code', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Date Picker', 'link' => '/components/date-picker', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Diff', 'link' => '/components/diff', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Image Gallery', 'link' => '/components/image-gallery', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Markdown Editor', 'link' => '/components/markdown-editor', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Rich Text Editor', 'link' => '/components/rich-text-editor', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Signature', 'link' => '/components/signature', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
                    ['label' => 'Spotlight', 'link' => '/components/spotlight', 'badge' => 'wip', 'badgeClass' => 'badge-info badge-soft'],
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
