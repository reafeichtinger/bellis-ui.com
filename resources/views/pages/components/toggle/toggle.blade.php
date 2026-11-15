<div class="doc">
    <x-heading title="Toggle" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/toggle/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/toggle/toggle.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Toggle::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you want a classic checkbox check out the
        <a href="/components/checkbox" wire:navigate class="link">Checkbox</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="flex flex-col items-center gap-6 max-w-sm mx-auto">
        @verbatim
            <c-toggle wire:model="value" />
        @endverbatim
    </x-code>

    {{-- Title & description --}}
    <x-heading title="Title & description" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-64 mx-auto">
        @verbatim
            <c-toggle label="Left" wire:model="value" />
            <c-toggle label="Left" wire:model="value" description="But also has a description." />
            <c-toggle label="This is a toggle with a pretty long label" wire:model="value"
                description="But also has a pretty long description if you ask me. It still renders beautifully though!" />
        @endverbatim
    </x-code>

    {{-- Flip --}}
    <x-heading title="Flip" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-64 mx-auto">
        @verbatim
            <c-toggle label="Flip" wire:model="value" flip />
            <c-toggle label="Flip" wire:model="value" description="But also has a description." flip />
            <c-toggle label="This is a toggle with a pretty long label" wire:model="value"
                description="But also has a pretty long description if you ask me. It still renders beautifully though!"
                flip />
        @endverbatim
    </x-code>

    {{-- Vertical --}}
    <x-heading title="Vertical" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-sm mx-auto">
        @verbatim
            <c-toggle label="Vertical" wire:model="value" description="But also has a description." vertical />

            <c-divider />

            <c-toggle label="Vertical + flip" wire:model="value" description="But also has a description." vertical flip />
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <x-heading title="Colors"
        subtitle="By default the class toggle-primary is applied. This is omitted if any 'toggle-' class is provided." />
    <x-code language="blade" render-class="grid grid-cols-2 gap-6 max-w-sm mx-auto">
        @verbatim
            <c-toggle label="Default" wire:model="value" class="toggle-default" />
            <c-toggle label="Primary" wire:model="value" />
            <c-toggle label="Secondary" wire:model="value" class="toggle-secondary" />
            <c-toggle label="Accent" wire:model="value" class="toggle-accent" />
            <c-toggle label="Error" wire:model="value" class="toggle-error" />
            <c-toggle label="Warning" wire:model="value" class="toggle-warning" />
            <c-toggle label="Info" wire:model="value" class="toggle-info" />
            <c-toggle label="Success" wire:model="value" class="toggle-success" />
            <c-toggle label="Custom" wire:model="value"
                class="border-indigo-600 bg-indigo-500 checked:border-sky-500 checked:bg-sky-400 checked:text-sky-800" />
        @endverbatim
    </x-code>

    {{-- Sizes --}}
    <x-heading title="Sizes" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-sm mx-auto">
        @verbatim
            <c-toggle label="XS" wire:model="value" class="toggle-xs" />
            <c-toggle label="SM" wire:model="value" class="toggle-sm" />
            <c-toggle label="MD" wire:model="value" class="toggle-md" />
            <c-toggle label="LG" wire:model="value" class="toggle-lg" />
            <c-toggle label="XL" wire:model="value" class="toggle-xl" />
        @endverbatim
    </x-code>

    {{-- Icons --}}
    <x-heading title="Icons"
        subtitle="You can use the toggle-icon component if you want to show icons inside the toggle thumb. it is not possible to apply 'toggle-*' colors with this though." />
    <x-code language="blade" render-class="flex flex-col items-center gap-6 max-w-sm mx-auto">
        @verbatim
            <c-toggle-icon wire:model="value" icon="x" icon-checked="check" />
        @endverbatim
    </x-code>

    {{-- Slots & customization --}}
    <x-heading title="Slots & customization" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-sm mx-auto">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-toggle 
                {{-- NOTE: `label-class` --}}
                label="Label" label-class="text-lg font-black" 
                {{-- NOTE: `description-class` --}}
                description="Description" description-class="text-secondary/75 text-xs font-black" 
                {{-- NOTE: `container-class` --}}
                container-class="w-fit px-6 py-3 bg-base-200 rounded-box"
                vertical
            />

            <c-toggle>
                <c-slot:label>
                    This is the slot, it allows for <span class="text-primary">custom HTML</span>.
                </c-slot:label>
                <c-slot:description>
                    <span> This is the description slot, it also allows for
                        <span class="text-accent">custom HTML</span>.
                    </span>
                </c-slot:description>
            </c-toggle>
            @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Validation --}}
    <x-heading title="Validation" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-6">
        @verbatim
            <c-toggle label="Default validation" wire:model="validation" />
            <c-toggle label="Default validation + description" wire:model="validation"
                placeholder="Description is only visible if no errors are present"
                description="I'm also visible if errors are present" />
            <c-toggle label="Only first validation" wire:model="validation" validation-first />
            <c-toggle label="Omit validation" wire:model="validation" validation-omit />
            <c-toggle label="Validation for other" wire:model="validation" validation-for="validation2" />
            <c-toggle label="Validation for multiple" wire:model="validation"
                :validation-for="['validation', 'validation2']" />
            <c-toggle label="Dismissible" wire:model="validation" validation-dismissible />
        @endverbatim
    </x-code>
</div>
