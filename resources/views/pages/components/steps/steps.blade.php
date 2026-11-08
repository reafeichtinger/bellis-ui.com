<div class="doc">
    <x-heading title="Steps" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/steps/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/steps/steps.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Steps::class" />

    {{-- Step API --}}
    <x-heading title="Step" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\Step::class" />

    <c-alert icon="badge-info" class="alert-info">
        For vertical steps check out the
        <a href="/components/timeline" wire:navigate class="link">Timeline</a>
        component.
    </c-alert>

    {{-- General --}}
    <x-heading title="General" />
    <x-code language="blade">
        @verbatim
            <c-steps wire:model="step" class="border-y border-base-content/10 my-5 py-5">
                <c-step step="1" label="Register">
                    The content of the register step.
                </c-step>
                <c-step step="2" label="Payment">
                    The content of the payment step.
                </c-step>
                <c-step step="3" label="Product shipped" class="bg-warning/15 rounded-field">
                    The content of the prodct shipped step.
                </c-step>
            </c-steps>

            {{-- You could use wire:click instead --}}
            <c-button label="Previous" x-on:click="if ($wire.step > 1) $wire.step--" icon="chevron-left" />
            <c-button label="Next" x-on:click="if ($wire.step < 3) $wire.step++" icon-right="chevron-right" />
        @endverbatim
    </x-code>

    {{-- Appearance --}}
    <x-heading title="Appearance" />
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            <c-steps wire:model="step" step-class="step-primary">
                {{-- Number content --}}
                <c-step step="1" label="A" />
                {{-- Icon content --}}
                <c-step step="2" label="B" icon="user" />
                {{-- String content --}}
                <c-step step="3" label="C" data-content="✓" />
            </c-steps>

            <c-steps wire:model="step" stepper-class="w-full p-4 bg-base-200 rounded-field" step-class="step-accent">
                <c-step step="1" label="A" />
                <c-step step="2" label="B" />
                <c-step step="3" label="C" />
            </c-steps>

            <c-steps wire:model="step">
                <c-step step="1" />
                <c-step step="2" />
                <c-step step="3" />
            </c-steps>

            <c-divider />

            <div>
                <c-button label="Previous" x-on:click="if ($wire.step > 1) $wire.step--" icon="chevron-left" />
                <c-button label="Next" x-on:click="if ($wire.step < 3) $wire.step++" icon-right="chevron-right" />
            </div>
        @endverbatim
    </x-code>
</div>
