<div class="doc">
    <x-heading title="Dock / Bottom Navigation Bar" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/dock/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/dock/dock.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Dock::class" />

    <x-heading title="Dock Item" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\DockItem::class" />

    <c-alert icon="badge-info" title="" class="alert-info">
        <p class="inline"><code class="text-xs">{{ '<meta name="viewport" content="viewport-fit=cover">' }}</code></p>
        is required for responsiveness in iOS.
    </c-alert>

    <c-divider class="pt-8" />

    {{-- Dock --}}
    <x-heading title="Dock" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9!">
                <c-dock-item icon="home" label="Home" />
                <c-dock-item icon="inbox" label="Inbox" active />
                <c-dock-item icon="settings" label="Settings" />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Dock extra small size --}}
    <x-heading title="Dock extra small size" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9! dock-xs">
                <c-dock-item icon="home" />
                <c-dock-item icon="inbox" active />
                <c-dock-item icon="settings" />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Dock small size --}}
    <x-heading title="Dock small size" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9! dock-sm">
                <c-dock-item icon="home" />
                <c-dock-item icon="inbox" active />
                <c-dock-item icon="settings" />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Dock medium size --}}
    <x-heading title="Dock medium size" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9! dock-md">
                <c-dock-item icon="home" label="Home" />
                <c-dock-item icon="inbox" label="Inbox" active />
                <c-dock-item icon="settings" label="Settings" />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Dock extra large size --}}
    <x-heading title="Dock extra large size" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9! dock-xl">
                <c-dock-item icon="home" label="Home" />
                <c-dock-item icon="inbox" label="Inbox" active />
                <c-dock-item icon="settings" label="Settings" />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Dock with label only --}}
    <x-heading title="Dock with label only" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9! dock-xs">
                <c-dock-item label="Home" />
                <c-dock-item label="Inbox" active />
                <c-dock-item label="Settings" />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Dock with custom colors --}}
    <x-heading title="Dock with custom colors" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            {{-- NOTE: Changing background, default text, rounded corners, border and active-class --}}
            <c-dock
                class="relative z-9! bg-base-300 text-base-content rounded-t-box border-t-(length:--border) border-primary"
                active-class="after:bg-accent">
                {{-- NOTE: Changing text color --}}
                <c-dock-item icon="home" label="Home" class="text-info/75" />

                {{-- NOTE: `after:bg-accent` for changing active indicator --}}
                <c-dock-item icon="inbox" label="Inbox" active />

                {{-- NOTE: Changing bg and text color --}}
                <c-dock-item icon="settings" label="Settings" class="bg-neutral text-neutral-content" />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Links and automatic active state --}}
    <x-heading title="Links and automatic active state">
        <x-slot:subtitle>
            You can automatically activate a dock item when current route matches the base
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
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9!" active-by-route exact>
                <c-dock-item icon="circle-letter-f" label="FAB" link="/components/fab" />
                <c-dock-item icon="dock" label="Dock" link="/components/dock" />

                {{-- NOTE: You can also have external links --}}
                <c-dock-item icon="hand-heart" label="Donate" class="text-primary"
                    link="https://github.com/sponsors/reafeichtinger" external />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Disabled and hidden items --}}
    <x-heading title="Disabled and hidden items" />
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9!">
                <c-dock-item icon="home" label="Home" disabled />
                <c-dock-item icon="inbox" label="Inbox" active />
                <c-dock-item icon="settings" label="Settings" link="/components/dock" disabled />
                <c-dock-item icon="ghost" label="Hidden" hidden />
            </c-dock>
        @endverbatim
    </x-code>

    {{-- Badges --}}
    <x-heading title="Badges" subtitle="Alignment is done via daisyUIs indicator classes.">
        <x-slot:end class="items-end">
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/indicator/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
        </x-slot:end>
    </x-heading>
    <x-code language="blade"
        render-class="relative mx-auto bg-base-200 min-h-56 max-w-xs flex items-end rounded-t-box ring-(length:--border) ring-neutral">
        @verbatim
            <c-dock class="relative z-9!">
                {{-- NOTE: Size & color --}}
                <c-dock-item icon="home" label="Home" badge="new"
                    badge-class="badge-xs badge-primary badge-soft" />

                {{-- NOTE: Placement via `indicator-start indicator-middle ms-4` --}}
                <c-dock-item icon="inbox" label="Inbox" active badge="12"
                    badge-class="badge-sm indicator-start indicator-middle ms-4" />

                {{-- NOTE: Placement via `indicator-center indicator-middle mt-4` --}}
                <c-dock-item icon="settings" label="​" badge="🔥"
                    badge-class="badge-sm badge-error badge-soft indicator-center indicator-middle mt-4" />
            </c-dock>
        @endverbatim
    </x-code>
</div>
