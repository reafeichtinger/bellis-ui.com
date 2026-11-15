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
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/checkbox/checkbox.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Checkbox::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you want a switch style checkbox check out the
        <a href="/components/toggle" wire:navigate class="link">Toggle</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="flex flex-col items-center gap-6 max-w-64 mx-auto">
        @verbatim
            <c-checkbox wire:model="value" />
        @endverbatim
    </x-code>

    {{-- Title & description --}}
    <x-heading title="Title & description" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-64 mx-auto">
        @verbatim
            <c-checkbox label="Left" wire:model="value" />
            <c-checkbox label="Left" wire:model="value" description="But also has a description." />
            <c-checkbox label="This is a checkbox with a pretty long label" wire:model="value"
                description="But also has a pretty long description if you ask me. It still renders beautifully though!" />
        @endverbatim
    </x-code>

    {{-- Flip --}}
    <x-heading title="Flip" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-64 mx-auto">
        @verbatim
            <c-checkbox label="Flip" wire:model="value" flip />
            <c-checkbox label="Flip" wire:model="value" description="But also has a description." flip />
            <c-checkbox label="This is a checkbox with a pretty long label" wire:model="value"
                description="But also has a pretty long description if you ask me. It still renders beautifully though!"
                flip />
        @endverbatim
    </x-code>

    {{-- Vertical --}}
    <x-heading title="Vertical" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-64 mx-auto">
        @verbatim
            <c-checkbox label="Vertical" wire:model="value" description="But also has a description." vertical />

            <c-divider />

            <c-checkbox label="Vertical + flip" wire:model="value" description="But also has a description." vertical
                flip />
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <x-heading title="Colors"
        subtitle="By default the class checked:checkbox-primary is applied. This is omitted if any 'checkbox-' class is provided." />
    <x-code language="blade" render-class="grid grid-cols-2 gap-6 max-w-sm mx-auto">
        @verbatim
            <c-checkbox label="Default" wire:model="value" class="checkbox-default" />
            <c-checkbox label="Primary" wire:model="value" class="checkbox-primary" />
            <c-checkbox label="Secondary" wire:model="value" class="checkbox-secondary" />
            <c-checkbox label="Accent" wire:model="value" class="checkbox-accent" />
            <c-checkbox label="Error" wire:model="value" class="checkbox-error" />
            <c-checkbox label="Warning" wire:model="value" class="checkbox-warning" />
            <c-checkbox label="Info" wire:model="value" class="checkbox-info" />
            <c-checkbox label="Success" wire:model="value" class="checkbox-success" />
            <c-checkbox label="Custom" wire:model="value"
                class="border-indigo-600 bg-indigo-500 checked:border-sky-500 checked:bg-sky-400 checked:text-sky-800" />
        @endverbatim
    </x-code>

    {{-- Slots & customization --}}
    <x-heading title="Slots & customization" />
    <x-code language="blade" render-class="flex flex-col gap-6 max-w-sm mx-auto">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-checkbox 
                {{-- NOTE: `label-class` --}}
                label="Label" label-class="text-lg font-black" 
                {{-- NOTE: `description-class` --}}
                description="Description" description-class="text-secondary/75 text-xs font-black" 
                {{-- NOTE: `container-class` --}}
                container-class="w-fit px-6 py-3 bg-base-200 rounded-box"
                vertical
            />

            <c-checkbox>
                <c-slot:label>
                    This is the slot, it allows for <span class="text-primary">custom HTML</span>.
                </c-slot:label>
                <c-slot:description>
                    <span> This is the description slot, it also allows for
                        <span class="text-accent">custom HTML</span>.
                    </span>
                </c-slot:description>
            </c-checkbox>
            @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Validation --}}
    <x-heading title="Validation" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-6">
        @verbatim
            <c-checkbox label="Default validation" wire:model="validation" />
            <c-checkbox label="Default validation + description" wire:model="validation"
                placeholder="Description is only visible if no errors are present"
                description="I'm also visible if errors are present" />
            <c-checkbox label="Only first validation" wire:model="validation" validation-first />
            <c-checkbox label="Omit validation" wire:model="validation" validation-omit />
            <c-checkbox label="Validation for other" wire:model="validation" validation-for="validation2" />
            <c-checkbox label="Validation for multiple" wire:model="validation"
                :validation-for="['validation', 'validation2']" />
            <c-checkbox label="Dismissible" wire:model="validation" validation-dismissible />
        @endverbatim
    </x-code>
</div>
