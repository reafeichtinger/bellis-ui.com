<div class="doc">
    <x-heading title="Menu" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/menu/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/menu/menu.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Menu::class" />

    {{-- Menu title --}}
    <x-heading title="Menu title" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\MenuTitle::class" />

    {{-- Submenu --}}
    <x-heading title="Submenu" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\MenuSub::class" />

    {{-- Menu item --}}
    <x-heading title="Menu item" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\MenuItem::class" />

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu class="border border-base-content/10 w-64!">
                <c-menu-item title="Home" icon="home" />
                <c-menu-item title="Messages" icon="mail" />
                <c-menu-item title="My settings" icon="zap" />
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Color & badges --}}
    <x-heading title="Color & badges" />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu class="border border-base-content/10 w-64! gap-3">
                <c-menu-item title="Home" icon="home" class="text-secondary" icon-class="text-secondary" />
                <c-menu-item title="Messages" icon="mail" badge="1" badge-class="badge-soft badge-error" />
                <c-menu-item title="My settings" icon="zap" badge="new" badge-class="float-right" />
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Icon only & tooltip --}}
    <x-heading title="Icon only & tooltip" />
    <x-code language="blade" render-class="flex flex-col items-center gap-4">
        @verbatim
            <c-menu class="border border-base-content/10 w-fit!">
                <c-menu-item icon="home" tooltip="Home" />
                <c-menu-item icon="mail" tooltip="Messages" class="tooltip-left!" />
                <c-menu-item icon="zap" tooltip="Events" />
            </c-menu>

            <c-menu class="border border-base-content/10 w-fit! overflow-visible!" horizontal>
                <c-menu-item icon="home" tooltip="Home" />
                <c-menu-item icon="mail" tooltip="Messages" class="tooltip-top!" />
                <c-menu-item icon="zap" tooltip="Events" />
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Links --}}
    <x-heading title="Links" />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu class="border border-base-content/10 w-64!">
                {{-- Default --}}
                <c-menu-item title="Internal link" icon="arrow-down" link="/components/sidebar" />

                {{-- Notice `external` --}}
                <c-menu-item title="External link" icon="redo" link="https://feichtinger.dev" external />

                {{-- Notice `no-wire-navigate` --}}
                <c-menu-item title="Internal without wire:navigate" icon="power" link="/components/menu"
                    no-wire-navigate />
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Divider, submenu & force open --}}
    <x-heading title="Divider, submenu & force open" />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu class="border border-base-content/10 w-64! gap-2">
                <c-menu-sub title="Home" icon="home">
                    <c-menu-item title="Users" icon="user" />
                    <c-menu-item title="Folders" icon="folder" />
                </c-menu-sub>

                <c-divider />

                {{-- Force with `open` --}}
                <c-menu-sub title="Settings" icon="settings" open>
                    <c-menu-item title="Wifi" icon="wifi" />
                    <c-menu-item title="Archives" icon="archive" />
                </c-menu-sub>
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Disabled, hidden & manual active state --}}
    <x-heading title="Disabled, hidden & manual active state" />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu class="border border-base-content/10 w-64!">
                <c-menu-item title="Users" icon="user" active />
                <c-menu-item title="Messages" icon="mail" />
                <c-menu-item title="Folders" icon="folder" hidden />
                <c-menu-item title="Events" icon="zap" disabled />

                <c-menu-sub title="Settings" icon="settings" disabled>
                    <c-menu-item title="Wifi" icon="wifi" />
                    <c-menu-item title="Archives" icon="archive" />
                </c-menu-sub>
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Automatic active state --}}
    <x-heading title="Automatic active state">

        <x-slot:subtitle>
            You can automatically activate a menu item when current route matches the base
            <p class="inline text-xs"><code>$link</code></p>
            and its nested route variations by using the
            <p class="inline text-xs"><code>active-by-route</code></p>
            attribute.

            <p class="mt-4">
                For example,
                <code class="text-xs">link="/users"</code>
                will activate same menu item when you deep navigate for these routes:
            </p>

            <ul class="block list-disc ms-6">
                <li><strong>/users</strong></li>
                <li><strong>/users/</strong>23</li>
                <li><strong>/users/</strong>23/edit</li>
                <li><strong>/users/</strong>23/create</li>
                <li><strong>/users/</strong>?q=bellis</li>
                <li><strong>/users/</strong>[anything]</li>
            </ul>

            <p class="mt-4">
                If for some reason you need to use "conflicting" routes use the attribute
                <code class="text-xs">exact</code>
                to handle it properly. Although it is not recommended to have this kind of route on the main menu, you
                have this option.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            {{-- NOTE: `active-by-route` --}}
            <c-menu active-by-route class="border border-base-content/10 w-64!">
                {{-- It is active because you are right now browsing this url --}}
                <c-menu-item title="Active by route" link="/components/menu" />

                <c-menu-item title="Not active" link="/components/button" />
            </c-menu>
        @endverbatim
    </x-code>
    <p class="text-sm text-base-content/65">
        If you use Laravel named routes, combine with the
        <code class="text-xs">route</code>
        param that matches the named route.
    </p>
    <x-code-only language="blade">
        @verbatim
            <c-menu active-by-route>
                <c-menu-sub title="Users">
                    <c-menu-item title="User list" route="users.index" />
                    <c-menu-item title="User details" route="users.update" :route-params="['user' => $userId]" />
                </c-menu-sub>
            </c-menu>
        @endverbatim
    </x-code-only>

    {{-- Custom style --}}
    <x-heading title="Custom style" subtitle="This is the style used on the bellis-ui website." />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu active-by-route exact active-class="text-primary font-bold" class="w-64!">
                <div class="group">
                    {{-- Title --}}
                    <c-menu-title icon="cable" title="Navigation & Layout"
                        class="text-base-content/50 uppercase font-normal text-xs"
                        icon-class="transition-transform group-hover:-rotate-10 scale-95 group-hover:scale-105" />

                    {{-- Items --}}
                    <c-menu-item title="Breadcrumbs" link="/components/breadcrumbs" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />

                    <c-menu-item title="Drawer" link="/components/drawer" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />

                    <c-menu-item title="Dock" link="/components/dock" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />

                    <c-menu-item title="Header" link="/components/header" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />

                    <c-menu-item title="Layout" link="/components/layout" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />

                    <c-menu-item title="Menu" link="/components/menu" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />

                    <c-menu-item title="Sidebar" link="/components/sidebar" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />

                    <c-menu-item title="Tabs" link="/components/tabs" active-icon="dot"
                        active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2" />
                </div>
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Horizontal --}}
    <x-heading title="Horizontal" />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu class="border border-base-content/10 w-fit!" horizontal>
                <c-menu-item title="Home" icon="home" />
                <c-menu-item title="Messages" icon="mail" />
                <c-menu-item title="My settings" icon="zap" />
            </c-menu>
        @endverbatim
    </x-code>

    {{-- Slot --}}
    <x-heading title="Slot" />
    <x-code language="blade" render-class="flex justify-center">
        @verbatim
            <c-menu class="border border-base-content/10 w-64!">
                <c-menu-item>
                    Custom <strong>HTML</strong> content
                </c-menu-item>
            </c-menu>
        @endverbatim
    </x-code>
</div>
