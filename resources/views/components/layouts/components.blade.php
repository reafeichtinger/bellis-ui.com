<x-layouts.base>
    <c-main with-nav wire:transition.navigate>
        {{-- Sidebar --}}
        <c-slot:sidebar drawer="main-drawer" class="bg-base-100">
            <c-menu active-by-route exact active-class="text-primary" class="sm:mt-6 ms-2 mb-32">
                <c-menu-title title="Components" class="text-base-content/50 uppercase font-normal text-xs" />
                <c-divider class="p-4" />
                {{-- Actions --}}
                <c-menu-title icon="mouse-pointer-click" title="Actions"
                    class="text-base-content/50 uppercase font-normal text-xs" />
                <x-sidebar-item title="Button" link="/components/button" />
                <x-sidebar-item title="Dropdown" link="/components/dropdown" />
                <x-sidebar-item title="Modal" link="/components/modal" />
                <x-sidebar-item title="Swap" link="/components/swap" />
                <x-sidebar-item title="Theme Toggle" link="/components/theme-toggle" />
                <c-divider class="p-4" />
                {{-- Data display --}}
                <c-menu-title icon="app-window" title="Data display"
                    class="text-base-content/50 uppercase font-normal text-xs" />
                <x-sidebar-item title="Accordion" link="/components/accordion" />
                <x-sidebar-item title="Avatar" link="/components/avatar" />
                <x-sidebar-item title="Badge" link="/components/badge" />
                <x-sidebar-item title="Card" link="/components/card" />
                <x-sidebar-item title="Carousel" link="/components/carousel" />
                <x-sidebar-item title="Collapse" link="/components/collapse" />
                <x-sidebar-item title="Icon" link="/components/icon" />
                <x-sidebar-item title="Kbd" link="/components/kbd" />
                <x-sidebar-item title="List Item" link="/components/list-item" />
                <x-sidebar-item title="Statistic" link="/components/statistic" />
                <x-sidebar-item title="Steps" link="/components/steps" />
                <x-sidebar-item title="Table" link="/components/table" />
                <x-sidebar-item title="Timeline" link="/components/timeline" />
                <c-divider class="p-4" />
                {{-- Data input --}}
                <c-menu-title icon="pencil-line" title="Data input"
                    class="text-base-content/50 uppercase font-normal text-xs" />
                <x-sidebar-item title="Checkbox" link="/components/checkbox" />
                <x-sidebar-item title="Choices" link="/components/choices" />
                <x-sidebar-item title="Color picker" link="/components/color-picker" />
                <x-sidebar-item title="Date time" link="/components/date-time" />
                <x-sidebar-item title="File upload" link="/components/file-upload" />
                <x-sidebar-item title="Form" link="/components/form" />
                <x-sidebar-item title="Group" link="/components/group" />
                <x-sidebar-item title="Image library" link="/components/image-library" />
                <x-sidebar-item title="Input" link="/components/input" />
                <x-sidebar-item title="Pin" link="/components/pin" />
                <x-sidebar-item title="Radio" link="/components/radio" />
                <x-sidebar-item title="Range slider" link="/components/range-slider" />
                <x-sidebar-item title="Rating" link="/components/rating" />
                <x-sidebar-item title="Select" link="/components/select" />
                <x-sidebar-item title="Tags" link="/components/tags" />
                <x-sidebar-item title="Textarea" link="/components/textarea" />
                <x-sidebar-item title="Toggle" link="/components/toggle" />
                <c-divider class="p-4" />
                {{-- Feedback --}}
                <c-menu-title icon="message-circle-more" title="Feedback"
                    class="text-base-content/50 uppercase font-normal text-xs" />
                <x-sidebar-item title="Alert" link="/components/alert" />
                <x-sidebar-item title="Popover" link="/components/popover" />
                <x-sidebar-item title="Progress" link="/components/progress" />
                <x-sidebar-item title="Toast" link="/components/toast" />
                <c-divider class="p-4" />
                {{-- Navigation & Layout --}}
                <c-menu-title icon="cable" title="Navigation & Layout"
                    class="text-base-content/50 uppercase font-normal text-xs" />
                <x-sidebar-item title="Breadcrumbs" link="/components/breadcrumbs" />
                <x-sidebar-item title="Drawer" link="/components/drawer" />
                <x-sidebar-item title="Header" link="/components/header" />
                <x-sidebar-item title="Layout" link="/components/layout" />
                <x-sidebar-item title="Menu" link="/components/menu" />
                <x-sidebar-item title="Sidebar" link="/components/sidebar" />
                <x-sidebar-item title="Tabs" link="/components/tabs" />
                <c-divider class="p-4" />
                {{-- Third-party --}}
                <c-menu-title icon="puzzle" title="Third-party"
                    class="text-base-content/50 uppercase font-normal text-xs" />
                <x-sidebar-item title="Calendar" link="/components/calendar" />
                <x-sidebar-item title="Chart" link="/components/chart" />
                <x-sidebar-item title="Code" link="/components/code" />
                <x-sidebar-item title="Date Picker" link="/components/date-picker" />
                <x-sidebar-item title="Diff" link="/components/diff" />
                <x-sidebar-item title="Image Gallery" link="/components/image-gallery" />
                <x-sidebar-item title="Markdown Editor" link="/components/markdown-editor" />
                <x-sidebar-item title="Rich Text Editor" link="/components/rich-text-editor" />
                <x-sidebar-item title="Signature" link="/components/signature" />
                <x-sidebar-item title="Spotlight" link="/components/spotlight" />
            </c-menu>
            {{-- Content --}}
            <c-slot:content class="lg:max-w-4xl pt-10!">
                {{ $slot }}
                {{-- Footer --}}
                <c-slot:footer>
                    <x-footer />
                </c-slot:footer>
            </c-slot:content>
        </c-slot:sidebar>
    </c-main>
</x-layouts.base>
