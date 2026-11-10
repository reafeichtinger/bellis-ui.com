<div class="doc">
    <x-heading title="Input color" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/input-color/input-color.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\InputColor::class" />

    <c-alert icon="badge-info" class="alert-info">
        For more information about available options check the
        <a href="/components/input" wire:navigate class="link">Input</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @verbatim
            <c-input-color wire:model="color1" label="Pick a color" description="A nice color" />
            <c-input-color wire:model="color3" label="Suffix" suffix="Hex code" />
            <c-input-color wire:model="color2" label="Icon" icon="swatch-book" />
            <c-input-color wire:model="color2" label="End" icon-end="swatch-book" end />
            <c-input-color wire:model="color4" label="Color" placeholder="Inline example" inline />
        @endverbatim
    </x-code>
</div>
