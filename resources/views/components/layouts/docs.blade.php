<x-layouts.base>
    <c-nav sticky>
        <c-slot:brand>
            <a href="/" wire:navigate class="flex flex-row items-center">
                <c-icon name="flower" class="h-8 w-8 text-primary" />
                <span class="ms-2 font-bold text-2xl underline decoration-primary">{{ config('app.name') }}</span>
            </a>
        </c-slot:brand>
        <c-slot:actions class="flex gap-1! lg:gap-4!">
            {{-- Socials --}}
            <c-button icon="fab.discord" link="https://discord.gg/c2Dv8T2X2s"
                class=" btn-ghost btn-circle me-2 hidden sm:inline-flex" external />
            <c-button icon="fab.x-twitter" link="https://x.com/reafeichtinger"
                class=" btn-ghost btn-circle me-2 hidden sm:inline-flex" external />
            <c-button icon="fab.github" link="https://github.com/reafeichtinger/bellis-ui"
                class=" btn-ghost btn-circle me-2" external />

            <c-divider vertical />

            {{-- Links --}}
            <span class="hidden lg:inline-flex gap-4">
                <c-button label="Documentation" link="/docs/installation" class="btn-ghost " />
                <c-button label="Sponsor" link="https://github.com/sponsors/reafeichtinger" external
                    class="btn-ghost  text-primary" />
            </span>

            <c-divider vertical />

            {{-- Theme toggle --}}
            <c-theme-toggle class="btn btn-circle btn-ghost" lightTheme="bellis-light" darkTheme="bellis-dark" />
        </c-slot:actions>
    </c-nav>

    <c-main with-nav wire:transition.navigate>
        <c-slot:sidebar drawer="main-drawer" class="bg-base-100">
            <c-menu activate-by-route active-bg-color="font-black text-primary" class="sm:mt-6">
                {{-- Get started --}}
                <c-menu-sub title="Get started" icon="sparkles" class="font-bold" open>
                    <c-menu-item title="Installation" link="/docs/install" />
                    <c-menu-item title="Themes" link="/docs/themes" />
                    <c-menu-item title="Config" link="/docs/config" />
                    <c-menu-item title="Contributing" link="/docs/contributing" />
                </c-menu-sub>

                <c-divider class="my-3 px-4" label="Components" />

                {{-- Actions --}}
                <c-menu-sub title="Actions" icon="mouse-pointer-click" class="font-bold">
                    <c-menu-item title="Button" link="/docs/components/button" />
                    <c-menu-item title="Dropdown" link="/docs/components/dropdown" />
                    <c-menu-item title="Modal" link="/docs/components/modal" />
                    <c-menu-item title="Swap" link="/docs/components/swap" />
                    <c-menu-item title="Theme Toggle" link="/docs/components/theme-toggle" />
                </c-menu-sub>

                {{-- Data display --}}
                <c-menu-sub title="Data display" icon="app-window" class="font-bold">
                    <c-menu-item title="Accordion" link="/docs/components/accordion" />
                    <c-menu-item title="Avatar" link="/docs/components/avatar" />
                    <c-menu-item title="Badge" link="/docs/components/badge" />
                    <c-menu-item title="Card" link="/docs/components/card" />
                    <c-menu-item title="Carousel" link="/docs/components/carousel" />
                    <c-menu-item title="Collapse" link="/docs/components/collapse" />
                    <c-menu-item title="Icon" link="/docs/components/icon" />
                    <c-menu-item title="Kbd" link="/docs/components/kbd" />
                    <c-menu-item title="List Item" link="/docs/components/list-item" />
                    <c-menu-item title="Statistic" link="/docs/components/statistic" />
                    <c-menu-item title="Steps" link="/docs/components/steps" />
                    <c-menu-item title="Table" link="/docs/components/table" />
                    <c-menu-item title="Timeline" link="/docs/components/timeline" />
                </c-menu-sub>

                {{-- Data input --}}
                <c-menu-sub title="Data input" icon="pencil-line">
                    <c-menu-item title="Checkbox" link="/docs/components/checkbox" />
                    <c-menu-item title="Choices" link="/docs/components/choices" />
                    <c-menu-item title="Color picker" link="/docs/components/color-picker" />
                    <c-menu-item title="Date time" link="/docs/components/date-time" />
                    <c-menu-item title="File upload" link="/docs/components/file-upload" />
                    <c-menu-item title="Form" link="/docs/components/form" />
                    <c-menu-item title="Group" link="/docs/components/group" />
                    <c-menu-item title="Image library" link="/docs/components/image-library" />
                    <c-menu-item title="Input" link="/docs/components/input" />
                    <c-menu-item title="Pin" link="/docs/components/pin" />
                    <c-menu-item title="Radio" link="/docs/components/radio" />
                    <c-menu-item title="Range slider" link="/docs/components/range-slider" />
                    <c-menu-item title="Rating" link="/docs/components/rating" />
                    <c-menu-item title="Select" link="/docs/components/select" />
                    <c-menu-item title="Tags" link="/docs/components/tags" />
                    <c-menu-item title="Textarea" link="/docs/components/textarea" />
                    <c-menu-item title="Toggle" link="/docs/components/toggle" />
                </c-menu-sub>

                <c-menu-sub title="Feedback" icon="message-circle-more">
                    <c-menu-item title="Alert" link="/docs/components/alert" />
                    <c-menu-item title="Popover" link="/docs/components/popover" />
                    <c-menu-item title="Progress" link="/docs/components/progress" />
                    <c-menu-item title="Toast" link="/docs/components/toast" />
                </c-menu-sub>

                <c-menu-sub title="Navigation & Layout" icon="cable" class="font-bold">
                    <c-menu-item title="Breadcrumbs" link="/docs/components/breadcrumbs" />
                    <c-menu-item title="Drawer" link="/docs/components/drawer" />
                    <c-menu-item title="Header" link="/docs/components/header" />
                    <c-menu-item title="Layout" link="/docs/components/layout" />
                    <c-menu-item title="Menu" link="/docs/components/menu" />
                    <c-menu-item title="Sidebar" link="/docs/components/sidebar" />
                    <c-menu-item title="Tabs" link="/docs/components/tabs" />
                </c-menu-sub>

                <c-menu-sub title="Third-party" icon="puzzle">
                    <c-menu-item title="Calendar" link="/docs/components/calendar" />
                    <c-menu-item title="Chart" link="/docs/components/chart" />
                    <c-menu-item title="Code" link="/docs/components/code" />
                    <c-menu-item title="Date Picker" link="/docs/components/date-picker" />
                    <c-menu-item title="Diff" link="/docs/components/diff" />
                    <c-menu-item title="Image Gallery" link="/docs/components/image-gallery" />
                    <c-menu-item title="Markdown Editor" link="/docs/components/markdown-editor" />
                    <c-menu-item title="Rich Text Editor" link="/docs/components/rich-text-editor" />
                    <c-menu-item title="Signature" link="/docs/components/signature" />
                    <c-menu-item title="Spotlight" link="/docs/components/spotlight" />
                </c-menu-sub>
            </c-menu>

            <c-slot:content class="lg:max-w-4xl pt-10!">
                {{ $slot }}

                <c-slot:footer>
                    <c-divider class="my-6" />

                    <div class="text-center text-sm text-base-content/70 pb-24">
                        Made with
                        <c-icon name="heart" class="text-accent w-4 h-4" />
                        by Rea Feichtinger and
                        <a href="https://github.com/reafeichtinger/bellis-ui" class="underline">contributors</a>.
                    </div>
                </c-slot:footer>
            </c-slot:content>
        </c-slot:sidebar>
</x-layouts.base>
