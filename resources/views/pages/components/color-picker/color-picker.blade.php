<div class="doc">
    <x-heading title="Colorpicker" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/colorpicker/colorpicker.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Colorpicker::class" />

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @verbatim
            <c-colorpicker wire:model="color1" label="Pick a color" description="A nice color" />
            <c-colorpicker wire:model="color3" label="Suffix" suffix="Hex code" />
            <c-colorpicker wire:model="color2" label="Icon" icon="swatch-book" />
            <c-colorpicker wire:model="color2" label="Icon" icon-right="swatch-book" />
            <c-colorpicker wire:model="color4" label="Color" placeholder="Inline example" inline />
        @endverbatim
    </x-code>
</div>
