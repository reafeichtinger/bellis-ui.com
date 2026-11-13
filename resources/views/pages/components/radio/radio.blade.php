<div class="doc">
    <x-heading title="Radio" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/radio" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/radio/radio.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Radio::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you want a tab style radio select, checkout the
        <a href="/components/group" wire:navigate class="link">Group</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="grid lg:grid-cols-2 gap-4 lg:px-24 pb-4">
        @verbatim
            @php
                $poisons = [
                    ['valueKey' => 'tea', 'labelKey' => 'Tea'],
                    ['valueKey' => 'coffee', 'labelKey' => 'Coffee'],
                    ['valueKey' => 'alcohol', 'labelKey' => 'Alcohol', 'disabled' => true],
                    ['valueKey' => 'tobacco', 'labelKey' => 'Tobacco'],
                ];
            @endphp

            <c-radio :options="$poisons" option-value="valueKey" option-label="labelKey" label="Pick your poison"
                wire:model="poison1" />

            <div>
                <c-radio :options="$poisons" option-value="valueKey" option-label="labelKey" label="Pick your poison"
                    wire:model.live="poison2" inline />
                <p class="mt-4">Current value: <span class="text-secondary">{{ $this->poison2 }}</span></p>
            </div>

        @endverbatim
    </x-code>
</div>
