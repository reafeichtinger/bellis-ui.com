<div class="doc">
    <x-heading title="Select" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/select/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/select/select.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Select::class" />

    {{-- Overview --}}
    <x-heading title="Overview" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-select label="Poison" placeholder="Pick a poison..." icon="beer"
                description="You shouldn't actually pick poison! 🤢" wire:model="value" :options="$this->poisons" />

            <c-select label="Right icon" wire:model="value" :options="$this->poisons" icon-end="map-pin"
                class="[&::picker(select)]:max-h-26" />

            <c-select label="Clearable" wire:model="value" :options="$this->poisons" placeholder="Clearable field"
                clearable />

            <c-select label="Prefix & Suffix" wire:model="value" :options="$this->poisons" prefix="www" suffix=".com" />

            <c-select label="Inline label" wire:model="value" :options="$this->poisons" placeholder="Hey, inline..."
                container-class="col-span-full pt-4" inline required />
        @endverbatim
    </x-code>

    {{-- State --}}
    <x-heading title="State" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-select label="Disabled" icon="map-pin" wire:model="poison" :options="$this->poisons" disabled />
            <c-select label="Readonly" icon="map-pin" wire:model="poison" :options="$this->poisons" readonly />
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <x-heading title="Colors" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-select label="Default" :options="$this->poisons" />
            <c-select label="Primary" class="input-primary" :options="$this->poisons" />
            <c-select label="Secondary" class="input-secondary" :options="$this->poisons" />
            <c-select label="Accent" class="input-accent" :options="$this->poisons" />
            <c-select label="Error" class="input-error" :options="$this->poisons" />
            <c-select label="Warning" class="input-warning" :options="$this->poisons" />
            <c-select label="Info" class="input-info" :options="$this->poisons" />
            <c-select label="Success" class="input-success" :options="$this->poisons" />
            <c-select label="Ghost" class="input-ghost" placeholder="I'm a ghost" :options="$this->poisons" />
            <c-select label="Background" class="bg-base-300" :options="$this->poisons" />
        @endverbatim
    </x-code>

    {{-- Info --}}
    <x-heading title="Info" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-select label="Info" info="Some info" :options="$this->poisons" />
            <c-select label="Info with custom icon & colors" info="Some info" info-icon="square-exclamation-point"
                info-class="bg-info!" info-trigger-class="text-info" :options="$this->poisons" />
        @endverbatim
    </x-code>

    {{-- Sizes --}}
    <x-heading title="Sizes" />
    <x-code language="blade" render-class="p-4 grid gap-4">
        @verbatim
            <c-select placeholder="XS" class="select-xs" :options="$this->poisons" />
            <c-select placeholder="SM" class="select-sm" :options="$this->poisons" />
            <c-select placeholder="MD" class="select-md" :options="$this->poisons" />
            <c-select placeholder="LG" class="select-lg" :options="$this->poisons" />
            <c-select placeholder="XL" class="select-xl" :options="$this->poisons" />

            <c-divider class="py-2" />

            {{-- XS --}}
            <c-select placeholder="XS" class="select-xs" :options="$this->poisons">
                <c-slot:start>
                    <c-button label="XS" class="btn-xs btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="XS" class="btn-xs btn-neutral" />
                </c-slot:end>
            </c-select>

            {{-- SM --}}
            <c-select placeholder="SM" class="select-sm" :options="$this->poisons">
                <c-slot:start>
                    <c-button label="SM" class="btn-sm btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="SM" class="btn-sm btn-neutral" />
                </c-slot:end>
            </c-select>

            {{-- MD --}}
            <c-select placeholder="MD" class="select-md" :options="$this->poisons">
                <c-slot:start>
                    <c-button label="MD" class="btn-md btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="MD" class="btn-md btn-neutral" />
                </c-slot:end>
            </c-select>

            {{-- LG --}}
            <c-select placeholder="LG" class="select-lg" :options="$this->poisons">
                <c-slot:start>
                    <c-button label="LG" class="btn-lg btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="LG" class="btn-lg btn-neutral" />
                </c-slot:end>
            </c-select>

            {{-- XL --}}
            <c-select placeholder="XL" class="select-xl" :options="$this->poisons">
                <c-slot:start>
                    <c-button label="XL" class="btn-xl btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="XL" class="btn-xl btn-neutral" />
                </c-slot:end>
            </c-select>
        @endverbatim
    </x-code>

    {{-- Validation --}}
    <x-heading title="Validation" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-select label="Default validation" wire:model="validation" :options="$this->poisons" />
            <c-select label="Default validation + description" wire:model="validation"
                placeholder="Description is only visible if no errors are present"
                description="I'm only visible if no errors are present" :options="$this->poisons" />
            <c-select label="Only first validation" wire:model="validation" validation-first :options="$this->poisons" />
            <c-select label="Omit validation" wire:model="validation" validation-omit :options="$this->poisons" />
            <c-select label="Validation for other" wire:model="validation" validation-for="validation2"
                :options="$this->poisons" />
            <c-select label="Validation for multiple" wire:model="validation"
                :validation-for="['validation', 'validation2']" :options="$this->poisons" />
            <c-select label="Dismissible" wire:model="validation" validation-dismissible :options="$this->poisons" />
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <x-heading title="Slots" />
    <x-code language="blade" render-class="p-4 grid gap-4">
        @verbatim
            {{-- Select as start --}}
            <c-select label="Phone number" :options="$this->poisons">
                <c-slot:start>
                    {{-- Add `join-item` to all start and end elements --}}
                    <c-button label="Add" icon="plus" class="join-item btn-primary" />
                </c-slot:start>
            </c-select>

            {{-- Button as end --}}
            <c-select label="Email" :options="$this->poisons">
                <c-slot:end>
                    {{-- Add `join-item` to all start and end elements --}}
                    <c-button label="Add" icon="plus" class="join-item btn-primary" />
                </c-slot:end>
            </c-select>

            {{-- All slots filled --}}
            <c-select label="Loaded" prefix="Prefix" icon="arrow-left-to-line" icon-end="arrow-right-to-line"
                suffix="Suffix" wire:model="value" clearable :options="$this->poisons">
                <c-slot:info class="w-full flex justify-end">
                    <c-button class="btn-xs btn-info btn-soft" label="Help" tooltip="So helpful!"
                        icon-right="circle-question-mark" icon-class="h-4 w-4" />
                </c-slot:info>
                <c-slot:start>
                    <c-button label="Start" class="join-item btn-secondary" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="End" class="join-item btn-secondary" />
                </c-slot:end>
            </c-select>
        @endverbatim
    </x-code>
</div>
