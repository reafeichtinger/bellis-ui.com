<div class="doc" wire:poll.5s="increaseValue">
    <x-heading title="Progress bar" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/progress/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/progress/progress.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Progress::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you need a loading state instead check out the
        <a href="/components/loading" wire:navigate class="link">Loading</a>
        component.
    </c-alert>

    {{-- Examples --}}
    <x-heading title="Examples" />
    <x-code language="blade" render-class="grid gap-6 p-6">
        @verbatim
            <c-progress :value="$this->value" max="100" />
            <c-progress :value="$this->value" max="100" class="progress-warning h-3" />
            <c-progress :value="$this->value" max="100" class="w-56 progress-error" />
            <c-progress class="progress-primary h-0.5" indeterminate />
        @endverbatim
    </x-code>

    <x-heading title="Progress radial">
        <c-slot:end class="items-end">
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/radial-progress/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\ProgressRadial::class" />

    {{-- Examples --}}
    <x-heading title="Examples" />
    <x-code language="blade" render-class="flex flex-wrap gap-6 p-6">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-progress-radial :value="$this->value" />

            {{-- NOTE: `unit="h"` --}}
            <c-progress-radial :value="$this->value" unit="h" class="text-warning" />

            {{-- NOTE: `class="text-primary font-black"` --}}
            <c-progress-radial :value="$this->value" class="text-primary font-black" />

            {{-- NOTE: `class="bg-primary text-primary-content border-4 border-primary"` --}}
            <c-progress-radial :value="$this->value" class="bg-primary text-primary-content border-4 border-primary" />

            {{-- For futher customization use `style` --}}
            <c-progress-radial :value="$this->value" class="text-success text-xs" style="--size:3rem; --thickness: 0.125rem" />

            {{-- NOTE: `hide-content` --}}
            <c-badge class="badge-info badge-soft">
                <c-progress-radial :value="$this->value" style="--size:1rem; --thickness: 0.166rem" hide-content />
                Loading...
            </c-badge>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Special hr --}}
    <x-heading title="Special hr" />

    <x-component-api :class-name="Bellis\View\Components\Bellis\Hr::class" />

    <x-code language="blade" render-class="grid gap-6 p-6">
        @verbatim
            <div class="flex gap-5">
                <c-input-number placeholder="Type ..." wire:model.live.debounce="value" />
                <c-button label="Save" wire:click="save" />
            </div>

            {{-- Always --}}
            <c-hr />

            <div>
                The above HR always triggers. The below only on target action.
            </div>

            {{-- Only on `save` action --}}
            <c-hr target="save" progress-class="text-accent" />
        @endverbatim
    </x-code>
</div>
