<div class="doc">
    <c-header title="Checkbox" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/checkbox/checkbox.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Checkbox::class" />

    {{-- Default --}}
    <c-header title="Default" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex flex-col gap-4 max-w-52 mx-auto">
        @verbatim
            <c-checkbox label="Left" wire:model="value" />
            <c-checkbox label="Left" wire:model="value" description="But also has a description." />
        @endverbatim
    </x-code>

    {{-- Right --}}
    <c-header title="Right" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex flex-col gap-4 max-w-52 mx-auto">
        @verbatim
            <c-checkbox label="Right" wire:model="value" right />
            <c-checkbox label="Right" wire:model="value" description="But also has a description." right />
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <c-header title="Slots" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex flex-col gap-4 max-w-sm mx-auto">
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
