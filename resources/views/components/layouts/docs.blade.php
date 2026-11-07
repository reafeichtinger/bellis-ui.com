<x-layouts.base>
    <c-main with-nav>
        {{-- Sidebar --}}
        <c-slot:sidebar drawer="main-drawer" class="bg-base-100">
            <c-menu active-by-route exact active-class="text-primary font-bold" class="sm:mt-6 ms-2">
                <c-menu-title title="Documentation" class="text-base-content/50 uppercase font-normal text-xs" />
                <c-divider class="p-4" />
                <x-sidebar-item title="Installation" link="/docs/install" />
                <x-sidebar-item title="Themes" link="/docs/themes" />
                <x-sidebar-item title="Config" link="/docs/config" />
                <x-sidebar-item title="Contributing" link="/docs/contributing" />
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

    {{-- Dock --}}
    <x-dock />
</x-layouts.base>
