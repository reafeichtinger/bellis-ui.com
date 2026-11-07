<x-layouts.base>
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
                    ['title' => 'Card / Speed Dial', 'link' => '/components/card'],
                    ['title' => 'Carousel', 'link' => '/components/carousel'],
                    ['title' => 'Collapse', 'link' => '/components/collapse'],
                    ['title' => 'Icon', 'link' => '/components/icon'],
                    ['title' => 'Kbd', 'link' => '/components/kbd'],
                    ['title' => 'List Item', 'link' => '/components/list-item'],
                    ['title' => 'Statistic', 'link' => '/components/statistic'],
                    ['title' => 'Steps', 'link' => '/components/steps'],
                    ['title' => 'Table', 'link' => '/components/table'],
                    ['title' => 'Timeline', 'link' => '/components/timeline'],
                ],
            ],
            'data-input' => [
                'title' => 'Data input',
                'icon' => 'pencil-line',
                'items' => [
                    ['title' => 'Checkbox', 'link' => '/components/checkbox'],
                    ['title' => 'Choices', 'link' => '/components/choices'],
                    ['title' => 'Color picker', 'link' => '/components/color-picker'],
                    ['title' => 'Card / Speed Dial', 'link' => '/components/card'],
                    ['title' => 'Date time', 'link' => '/components/date-time'],
                    ['title' => 'File upload', 'link' => '/components/file-upload'],
                    ['title' => 'Form', 'link' => '/components/form'],
                    ['title' => 'Group', 'link' => '/components/group'],
                    ['title' => 'Image library', 'link' => '/components/image-library'],
                    ['title' => 'Input', 'link' => '/components/input'],
                    ['title' => 'Pin', 'link' => '/components/pin'],
                    ['title' => 'Radio', 'link' => '/components/radio'],
                    ['title' => 'Range slider', 'link' => '/components/range-slider'],
                    ['title' => 'Rating', 'link' => '/components/rating'],
                    ['title' => 'Select', 'link' => '/components/select'],
                    ['title' => 'Tags', 'link' => '/components/tags'],
                    ['title' => 'Textarea', 'link' => '/components/textarea'],
                    ['title' => 'Toggle', 'link' => '/components/toggle'],
                ],
            ],
            'feedback' => [
                'title' => 'Feedback',
                'icon' => 'message-circle-more',
                'items' => [
                    ['title' => 'Alert', 'link' => '/components/alert'],
                    ['title' => 'Popover', 'link' => '/components/popover'],
                    ['title' => 'Progress', 'link' => '/components/progress'],
                    ['title' => 'Toast', 'link' => '/components/toast'],
                ],
            ],
            'layout' => [
                'title' => 'Navigation & Layout',
                'icon' => 'cable',
                'items' => [
                    ['title' => 'Breadcrumbs', 'link' => '/components/breadcrumbs'],
                    ['title' => 'Drawer', 'link' => '/components/drawer'],
                    ['title' => 'Dock / Bottom Navigation', 'link' => '/components/dock'],
                    ['title' => 'Header', 'link' => '/components/header'],
                    ['title' => 'Layout', 'link' => '/components/layout'],
                    ['title' => 'Menu', 'link' => '/components/menu'],
                    ['title' => 'Sidebar', 'link' => '/components/sidebar'],
                    ['title' => 'Tabs', 'link' => '/components/tabs'],
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

    {{-- Desktop menu --}}
    <c-main with-nav collapsible>
        {{-- Sidebar --}}
        <c-slot:sidebar drawer="main-drawer" class="bg-base-100">
            <c-menu active-by-route exact active-class="text-primary font-bold" class="sm:mt-6 ms-2 mb-32">
                <c-menu-title title="Components" class="text-base-content/50 uppercase font-normal text-xs" />
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
    <c-modal name="main-navigation" container-class="modal-bottom">
        <c-menu active-by-route exact active-class="text-primary font-bold">
            {{-- Header --}}
            <div
                class="text-base-content/50 uppercase font-normal text-xs px-3 flex items-center flex-row justify-between">
                <span>Components</span>
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
