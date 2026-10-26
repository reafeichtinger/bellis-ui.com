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
            <c-theme-toggle class="btn  btn-circle btn-ghost" />
        </c-slot:actions>
    </c-nav>

    <c-main wire:transition.navigate>
        <c-slot:content class="px-0 lg:px-0">
            {{ $slot }}
        </c-slot:content>

        <c-slot:footer>
            <c-divider class="my-6" />

            <div class="text-center text-sm text-base-content/70 pb-24">
                Made with
                <c-icon name="heart" class="text-accent w-4 h-4" />
                by Rea Feichtinger and
                <a href="https://github.com/reafeichtinger/bellis-ui" class="underline">contributors</a>.
            </div>
        </c-slot:footer>
    </c-main>
</x-layouts.base>
