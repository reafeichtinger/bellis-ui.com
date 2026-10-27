<div class="doc">
    <c-header title="Swap" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/swap"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Swap::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you have multiple Swap componentns on the same page make sure to set different ids.
    </c-alert>

    {{-- Default & size --}}
    <c-header title="Default & size" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="p-6 flex items-center gap-6">
        @verbatim
            <c-swap id="swap-1" wire:model="swap" />
            <c-swap id="swap-2" wire:model="swap" icon-class="h-8 w-8" />
            <c-swap id="swap-3" wire:model="swap" icon-class="h-12 w-12" />
        @endverbatim
    </x-code>

    {{-- Custom content --}}
    <c-header title="Custom content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="p-6 flex items-center gap-6">
        @verbatim
            {{-- NOTE: `true` and `false` --}}
            <c-swap id="swap-text" true="ON" false="OFF" />

            {{-- NOTE: `true-icon` and `false-icon` --}}
            <c-swap id="swap-icon" true-icon="volume-2" false-icon="volume-x" />
        @endverbatim
    </x-code>

    {{-- Animations --}}
    <c-header title="Animations" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="p-6 flex items-center gap-6">
        @verbatim
            <c-swap id="swap-fade" icon-class="h-12 w-12" />
            <c-swap id="swap-flip" class="swap-flip" icon-class="h-12 w-12" />
            <c-swap id="swap-rotate" class="swap-rotate" icon-class="h-12 w-12" />
        @endverbatim
    </x-code>

    {{-- Custom content --}}
    <c-header title="Custom content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="p-6 flex items-center gap-6">
        @verbatim
            <c-swap id="swap-custom">
                <c-slot:true class="bg-primary rounded-field p-2">
                    Custom true
                </c-slot:true>
                <c-slot:false class="bg-accent text-white p-2">
                    Custom false
                </c-slot:false>
            </c-swap>
        @endverbatim
    </x-code>

    {{-- Before & after --}}
    <c-header title="Before & after" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <p>Clicking the before or after slot also toggles the value.</p>
    <x-code language="blade" render-content render-class="p-6 flex items-center gap-6">
        @verbatim
            <c-swap id="swap-slots" class="flex gap-3">
                <c-slot:before class="text-primary">
                    BEFORE
                </c-slot:before>
                <c-slot:after class="text-accent">
                    AFTER
                </c-slot:after>
            </c-swap>
        @endverbatim
    </x-code>
</div>
