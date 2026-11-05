<div class="doc">
    <x-heading title="Swap" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/swap/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/swap/swap.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Swap::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you have multiple Swap componentns on the same page make sure to set different ids.
    </c-alert>

    {{-- Default & size --}}
    <x-heading title="Default & size" />
    <x-code language="blade" render-class="p-6 flex items-center gap-6">
        @verbatim
            <c-swap id="swap-1" wire:model="swap" />
            <c-swap id="swap-2" wire:model="swap" icon-class="h-8 w-8" />
            <c-swap id="swap-3" wire:model="swap" icon-class="h-12 w-12" />
        @endverbatim
    </x-code>

    {{-- Custom content --}}
    <x-heading title="Custom content" />
    <x-code language="blade" render-class="p-6 flex items-center gap-6">
        @verbatim
            {{-- NOTE: `true` and `false` --}}
            <c-swap id="swap-text" true="ON" false="OFF" />

            {{-- NOTE: `true-icon` and `false-icon` --}}
            <c-swap id="swap-icon" true-icon="volume-2" false-icon="volume-x" />
        @endverbatim
    </x-code>

    {{-- Animations --}}
    <x-heading title="Animations" />
    <x-code language="blade" render-class="p-6 flex items-center gap-6">
        @verbatim
            <c-swap id="swap-fade" icon-class="h-12 w-12" />
            <c-swap id="swap-flip" class="swap-flip" icon-class="h-12 w-12" />
            <c-swap id="swap-rotate" class="swap-rotate" icon-class="h-12 w-12" />
        @endverbatim
    </x-code>

    {{-- Custom content --}}
    <x-heading title="Custom content" />
    <x-code language="blade" render-class="p-6 flex items-center gap-6">
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
    <x-heading title="Before & after" />
    <p>Clicking the before or after slot also toggles the value.</p>
    <x-code language="blade" render-class="p-6 flex items-center gap-6">
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
