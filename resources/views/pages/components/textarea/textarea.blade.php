<div class="doc">
    <x-heading title="Textarea" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/textarea/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/textarea/textarea.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Textarea::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you need value selection instead, check out the <a href="/components/select" wire:navigate
            class="link">Select</a> component.
    </c-alert>

    {{-- Example --}}
    <x-heading title="Example" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-textarea label="Name" wire:model="value" placeholder="Your name" description="Your full name" />

            <c-textarea label="Clearable" wire:model="value" placeholder="Clearable field" clearable />

            <c-textarea label="Inline label" wire:model="value" placeholder="Hey, inline..." container-class="col-span-full"
                inline required />
        @endverbatim
    </x-code>

    {{-- State --}}
    <x-heading title="State" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-textarea label="Disabled" icon="map-pin" disabled />
            <c-textarea label="Readonly" icon="map-pin" readonly />
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <x-heading title="Colors" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-textarea label="Default" />
            <c-textarea label="Primary" class="textarea-primary" />
            <c-textarea label="Secondary" class="textarea-secondary" />
            <c-textarea label="Accent" class="textarea-accent" />
            <c-textarea label="Error" class="textarea-error" />
            <c-textarea label="Warning" class="textarea-warning" />
            <c-textarea label="Info" class="textarea-info" />
            <c-textarea label="Success" class="textarea-success" />
            <c-textarea label="Ghost" class="textarea-ghost" placeholder="I'm a ghost" />
            <c-textarea label="Background" class="bg-base-300/50" />
        @endverbatim
    </x-code>

    {{-- Info --}}
    <x-heading title="Info" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-textarea label="Info" info="Some info" />
            <c-textarea label="Info with custom icon & colors" info="Some info" info-icon="square-exclamation-point"
                info-class="bg-info!" info-trigger-class="text-info" />
        @endverbatim
    </x-code>


    {{-- Sizes --}}
    <x-heading title="Sizes" />
    <x-code language="blade" render-class="p-4 grid gap-4">
        @verbatim
            <c-textarea placeholder="XS" class="input-xs" />
            <c-textarea placeholder="SM" class="input-sm" />
            <c-textarea placeholder="MD" class="input-md" />
            <c-textarea placeholder="LG" class="input-lg" />
            <c-textarea placeholder="XL" class="input-xl" />

            <c-divider class="py-2" />

            {{-- XS --}}
            <c-textarea placeholder="XS" class="input-xs">
                <c-slot:start>
                    <div>
                        <c-button label="XS" class="btn-xs btn-neutral h-full" />
                    </div>
                </c-slot:start>
                <c-slot:end>
                    <div>
                        <c-button label="XS" class="btn-xs btn-neutral h-full" />
                    </div>
                </c-slot:end>
            </c-textarea>

            {{-- SM --}}
            <c-textarea placeholder="SM" class="input-sm">
                <c-slot:start>
                    <div>
                        <c-button label="SM" class="btn-sm btn-neutral h-full" />
                    </div>
                </c-slot:start>
                <c-slot:end>
                    <div>
                        <c-button label="SM" class="btn-sm btn-neutral h-full" />
                    </div>
                </c-slot:end>
            </c-textarea>

            {{-- MD --}}
            <c-textarea placeholder="MD" class="input-md">
                <c-slot:start>
                    <div>
                        <c-button label="MD" class="btn-md btn-neutral h-full" />
                    </div>
                </c-slot:start>
                <c-slot:end>
                    <div>
                        <c-button label="MD" class="btn-md btn-neutral h-full" />
                    </div>
                </c-slot:end>
            </c-textarea>

            {{-- LG --}}
            <c-textarea placeholder="LG" class="input-lg">
                <c-slot:start>
                    <div>
                        <c-button label="LG" class="btn-lg btn-neutral h-full" />
                    </div>
                </c-slot:start>
                <c-slot:end>
                    <div>
                        <c-button label="LG" class="btn-lg btn-neutral h-full" />
                    </div>
                </c-slot:end>
            </c-textarea>

            {{-- XL --}}
            <c-textarea placeholder="XL" class="input-xl">
                <c-slot:start>
                    <div>
                        <c-button label="XL" class="btn-xl btn-neutral h-full" />
                    </div>
                </c-slot:start>
                <c-slot:end>
                    <div>
                        <c-button label="XL" class="btn-xl btn-neutral h-full" />
                    </div>
                </c-slot:end>
            </c-textarea>
        @endverbatim
    </x-code>

    {{-- Validation --}}
    <x-heading title="Validation" />
    <x-code language="blade" render-class="p-4 grid lg:grid-cols-2 gap-4">
        @verbatim
            <c-textarea label="Default validation" wire:model="validation" />
            <c-textarea label="Default validation + description" wire:model="validation"
                placeholder="Description is only visible if no errors are present"
                description="I'm only visible if no errors are present" />
            <c-textarea label="Only first validation" wire:model="validation" validation-first />
            <c-textarea label="Omit validation" wire:model="validation" validation-omit />
            <c-textarea label="Validation for other" wire:model="validation" validation-for="validation2" />
            <c-textarea label="Validation for multiple" wire:model="validation"
                :validation-for="['validation', 'validation2']" />
            <c-textarea label="Dismissible" wire:model="validation" validation-dismissible />
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <x-heading title="Slots" />
    <x-code language="blade" render-class="p-4 grid gap-4">
        @verbatim
            {{-- Button as end --}}
            <c-textarea label="Email">
                <c-slot:end>
                    <div>
                        {{-- Add `join-item` to all start and end elements --}}
                        <c-button label="Add" icon="plus" class="join-item btn-primary h-full" />
                    </div>
                </c-slot:end>
            </c-textarea>

            {{-- All slots filled --}}
            <c-textarea label="Loaded" wire:model="value" placeholder="So customizable!" clearable>
                <c-slot:info class="w-full flex justify-end">
                    <c-button class="btn-xs btn-info btn-soft" label="Help" tooltip="So helpful!"
                        icon-right="circle-question-mark" icon-class="h-4 w-4" />
                </c-slot:info>
                <c-slot:start>
                    <div>
                        <c-button label="Start" class="join-item btn-secondary h-full" />
                    </div>
                </c-slot:start>
                <c-slot:end>
                    <div>
                        <c-button label="End" class="join-item btn-secondary h-full" />
                    </div>
                </c-slot:end>
            </c-textarea>
        @endverbatim
    </x-code>
</div>
