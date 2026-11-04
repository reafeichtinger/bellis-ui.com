<div>
    <c-main wire:transition.navigate>
        <c-slot:content class="px-0 lg:px-0">
            <div>
                {{-- Hero --}}
                <div class="max-w-340 mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-8">

                    {{-- Announcement Banner --}}
                    <div class="flex justify-center">
                        <c-button icon="fab.github" link="https://github.com/reafeichtinger/bellis-ui"
                            class="btn-ghost border border-base-content/75 text-base-content/75" external>
                            Check us on GitHub
                            <livewire:components.github-stars lazy class="badge-neutral!" />
                        </c-button>
                    </div>

                    {{-- Title --}}
                    <div class="max-w-3xl text-center mx-auto">
                        <h1 class="block font-medium text-4xl! sm:text-5xl! md:text-6xl! lg:text-7xl!">
                            The addition that you have been waiting for
                        </h1>
                    </div>

                    {{-- Subtitle --}}
                    <div class="max-w-3xl text-center mx-auto">
                        <p class="text-lg text-base-content/75">
                            bellisUI is an extension for the TALL-Stack. It features beautiful and powerful components
                            as well
                            as a load of helpers that make developing complex applications a breeze.
                        </p>
                    </div>

                    {{-- Buttons --}}
                    <div
                        class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3 items-center justify-center">
                        <c-button link="/components" label="Explore components" icon="" class="btn-default" />
                        <div class="aura aura-gold aura-sm group">
                            <c-button link="/docs" label="Get started" icon-right="arrow-big-right-dash"
                                class="btn-primary" icon-class="transition group-hover:translate-x-1" />
                        </div>
                    </div>

                    {{-- Technologies --}}
                    <div class="flex flex-wrap gap-5 justify-center items-center my-10">
                        <a href="https://laravel.com/" class="tooltip tooltip-bottom" data-tip="Laravel">
                            <img src="/svg/laravel.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
                        </a>
                        <a href="https://livewire.laravel.com/" class="tooltip tooltip-bottom" data-tip="Livewire">
                            <img src="/svg/livewire.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
                        </a>
                        <a href="https://alpinejs.dev/" class="tooltip tooltip-bottom" data-tip="AlpineJS">
                            <img src="/svg/alpinejs.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
                        </a>
                        <a href="https://tailwindcss.com/" class="tooltip tooltip-bottom" data-tip="TailwindCSS">
                            <img src="/svg/tailwindcss.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
                        </a>
                        <a href="https://daisyui.com/" class="tooltip tooltip-bottom" data-tip="DaisyUI">
                            <img src="/svg/daisyui.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
                        </a>
                    </div>
                </div>

                {{-- TODO: Showcase components --}}
            </div>
        </c-slot:content>

        <c-slot:footer>
            <x-footer />
        </c-slot:footer>
    </c-main>
</div>
