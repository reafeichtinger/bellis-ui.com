<div class="doc">
    <x-heading title="Input" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/input/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/input/input.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Input::class" />

    {{-- Overview --}}
    <x-heading title="Overview" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-input label="Name" wire:model="value" placeholder="Your name" icon="user"
                description="Your full name" />

            <c-input label="Right icon" wire:model="value" icon-end="map-pin" />

            <c-input label="Clearable" wire:model="value" placeholder="Clearable field" clearable />

            <c-input label="Prefix & Suffix" wire:model="value" prefix="www" suffix=".com" />

            <c-input label="Inline label" wire:model="value" placeholder="Hey, inline..." container-class="col-span-full"
                inline required />
        @endverbatim
    </x-code>

    {{-- State --}}
    <x-heading title="State" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-input label="Disabled" icon="map-pin" disabled />
            <c-input label="Readonly" icon="map-pin" readonly />
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <x-heading title="Colors" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-input label="Default" />
            <c-input label="Primary" class="input-primary" />
            <c-input label="Secondary" class="input-secondary" />
            <c-input label="Accent" class="input-accent" />
            <c-input label="Error" class="input-error" />
            <c-input label="Warning" class="input-warning" />
            <c-input label="Info" class="input-info" />
            <c-input label="Success" class="input-success" />
            <c-input label="Ghost" class="input-ghost" placeholder="I'm a ghost" />
            <c-input label="Background" class="bg-base-300/50" />
        @endverbatim
    </x-code>

    {{-- Info --}}
    <x-heading title="Info" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-input label="Info" info="Some info" />
            <c-input label="Info with custom icon & colors" info="Some info" info-icon="square-exclamation-point"
                info-class="bg-info!" info-trigger-class="text-info" />
        @endverbatim
    </x-code>

    {{-- Sizes --}}
    <x-heading title="Sizes" />
    <x-code language="blade" render-class="p-4 grid gap-4">
        @verbatim
            <c-input placeholder="XS" class="input-xs" />
            <c-input placeholder="SM" class="input-sm" />
            <c-input placeholder="MD" class="input-md" />
            <c-input placeholder="LG" class="input-lg" />
            <c-input placeholder="XL" class="input-xl" />

            <c-divider class="py-2" />

            {{-- XS --}}
            <c-input placeholder="XS" class="input-xs">
                <c-slot:start>
                    <c-button label="XS" class="btn-xs btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="XS" class="btn-xs btn-neutral" />
                </c-slot:end>
            </c-input>

            {{-- SM --}}
            <c-input placeholder="SM" class="input-sm">
                <c-slot:start>
                    <c-button label="SM" class="btn-sm btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="SM" class="btn-sm btn-neutral" />
                </c-slot:end>
            </c-input>

            {{-- MD --}}
            <c-input placeholder="MD" class="input-md">
                <c-slot:start>
                    <c-button label="MD" class="btn-md btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="MD" class="btn-md btn-neutral" />
                </c-slot:end>
            </c-input>

            {{-- LG --}}
            <c-input placeholder="LG" class="input-lg">
                <c-slot:start>
                    <c-button label="LG" class="btn-lg btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="LG" class="btn-lg btn-neutral" />
                </c-slot:end>
            </c-input>

            {{-- XL --}}
            <c-input placeholder="XL" class="input-xl">
                <c-slot:start>
                    <c-button label="XL" class="btn-xl btn-neutral" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="XL" class="btn-xl btn-neutral" />
                </c-slot:end>
            </c-input>
        @endverbatim
    </x-code>

    {{-- Validation --}}
    <x-heading title="Validation" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-input label="Default validation" wire:model="validation" />
            <c-input label="Default validation + description" wire:model="validation"
                placeholder="Description is only visible if no errors are present"
                description="I'm only visible if no errors are present" />
            <c-input label="Only first validation" wire:model="validation" validation-first />
            <c-input label="Omit validation" wire:model="validation" validation-omit />
            <c-input label="Validation for other" wire:model="validation" validation-for="validation2" />
            <c-input label="Validation for multiple" wire:model="validation"
                :validation-for="['validation', 'validation2']" />
            <c-input label="Dismissible" wire:model="validation" validation-dismissible />
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <x-heading title="Slots" />
    <x-code language="blade" render-class="p-4 grid gap-4">
        @verbatim
            {{-- Select as start --}}
            <c-input label="Phone number">
                <c-slot:start>
                    {{-- Add `join-item` to all start and end elements --}}
                    <c-select icon="phone"
                        :options="[
                            ['id' => '43', 'name' => '+43'],
                            ['id' => '49', 'name' => '+49'],
                        ]"
                        class="join-item bg-base-200 me-6 pe-1" />
                </c-slot:start>
            </c-input>

            {{-- Button as end --}}
            <c-input label="Email">
                <c-slot:end>
                    {{-- Add `join-item` to all start and end elements --}}
                    <c-button label="Add" icon="plus" class="join-item btn-primary" />
                </c-slot:end>
            </c-input>

            {{-- All slots filled --}}
            <c-input label="Loaded" prefix="Prefix" icon="arrow-left-to-line" icon-end="arrow-right-to-line"
                suffix="Suffix" wire:model="value" clearable>
                <c-slot:info class="w-full flex justify-end">
                    <c-button class="btn-xs btn-info btn-soft" label="Help" tooltip="So helpful!"
                        icon-right="circle-question-mark" />
                </c-slot:info>
                <c-slot:start>
                    <c-button label="Start" class="join-item btn-secondary" />
                </c-slot:start>
                <c-slot:end>
                    <c-button label="End" class="join-item btn-secondary" />
                </c-slot:end>
            </c-input>
        @endverbatim
    </x-code>
</div>
