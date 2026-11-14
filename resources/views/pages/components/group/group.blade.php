<div class="doc">
    <x-heading title="Group" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/join/#join-radio-inputs-with-btn-style"
                class="btn-ghost btn-circle" tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/group/group.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Group::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you need a classic radio input, checkout the
        <a href="/components/radio" wire:navigate class="link">Radio</a>
        component.
    </c-alert>

    {{-- Full example --}}
    <x-heading title="Full example" />
    <x-code language="blade">
        @verbatim
            @php
                $poisons = [
                    ['valueKey' => 'tea', 'labelKey' => 'Tea'],
                    ['valueKey' => 'coffee', 'labelKey' => 'Coffee'],
                    ['valueKey' => 'alcohol', 'labelKey' => 'Alcohol', 'disabled' => true],
                    ['valueKey' => 'tobacco', 'labelKey' => 'Tobacco'],
                ];
            @endphp

            <c-group :options="$poisons" option-value="valueKey" option-label="labelKey" label="Pick your poison"
                description="You shouldn't actually pick poison! 🤢" wire:model.live="poison"
                class="checked:btn-primary! btn-sm" />

            <p class="mt-4">Current value: <span class="text-secondary">{{ $this->poison }}</span></p>
        @endverbatim
    </x-code>
</div>
