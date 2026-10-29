<div class="doc">
    <c-header title="Steps" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/steps/steps.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Steps::class" />

    <c-header title="Step" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-component-api :class-name="Bellis\View\Components\Bellis\Step::class" />

    {{-- General --}}
    <c-header title="General" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
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
    <c-header title="General" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="grid gap-4">
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
