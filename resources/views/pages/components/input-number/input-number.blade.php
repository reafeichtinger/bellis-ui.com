<div class="doc">
    <x-heading title="Input number" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/input/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/input-number/input-number.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\InputNumber::class" />

    <c-alert icon="badge-info" class="alert-info">
        For more information about available options check the
        <a href="/components/input" wire:navigate class="link">Input</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @verbatim
            <c-input-number label="Using number component" wire:model="value" />
            <c-input type="number" label="Using input component" wire:model="value" />
        @endverbatim
    </x-code>
</div>
