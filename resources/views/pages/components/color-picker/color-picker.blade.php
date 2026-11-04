<div class="doc">
    <c-header title="Colorpicker" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/colorpicker/colorpicker.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Colorpicker::class" />

    {{-- Default --}}
    <c-header title="Default" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @verbatim
            <c-colorpicker wire:model="color1" label="Pick a color" description="A nice color" />
            <c-colorpicker wire:model="color3" label="Suffix" suffix="Hex code" />
            <c-colorpicker wire:model="color2" label="Icon" icon="swatch-book" />
            <c-colorpicker wire:model="color2" label="Icon" icon-right="swatch-book" />
            <c-colorpicker wire:model="color4" label="Color" placeholder="Inline example" inline />
        @endverbatim
    </x-code>
</div>
