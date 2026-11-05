<div class="doc">
    <x-heading title="Checkbox" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/checkbox/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/checkbox/checkbox.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Checkbox::class" />

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="flex flex-col gap-4 max-w-52 mx-auto">
        @verbatim
            <c-checkbox label="Left" wire:model="value" />
            <c-checkbox label="Left" wire:model="value" description="But also has a description." />
        @endverbatim
    </x-code>

    {{-- Right --}}
    <x-heading title="Right" />
    <x-code language="blade" render-class="flex flex-col gap-4 max-w-52 mx-auto">
        @verbatim
            <c-checkbox label="Right" wire:model="value" right />
            <c-checkbox label="Right" wire:model="value" description="But also has a description." right />
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <x-heading title="Slots" />
    <x-code language="blade" render-class="flex flex-col gap-4 max-w-sm mx-auto">
        @verbatim
            <c-checkbox wire:model="value">
                <c-slot:label>
                    This is the slot, it allows for <span class="text-primary">custom HTML</span>.
                </c-slot:label>
                <c-slot:description>
                    This is the description slot, it also allows for <span class="text-accent">custom HTML</span>.
                </c-slot:description>
            </c-checkbox>
        @endverbatim
    </x-code>
</div>
