<div class="doc">
    <x-heading title="Validation group" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/validation-group/validation-group.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\ValidationGroup::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you need single field validation instead, check out the validation section of the
        <a href="/components/input#validation" wire:navigate class="link">Input</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default"
        subtitle="By default it will include all validation errors of the default error bag on the page." />
    <x-code language="blade">
        @verbatim
            <c-validation-group />
        @endverbatim
    </x-code>

    {{-- Specific errors --}}
    <x-heading title="Specific errors" subtitle="You can specify the properties to be included." />
    <x-code language="blade">
        @verbatim
            {{-- NOTE: Single `for` string --}}
            <c-validation-group for="validation" />
            {{-- NOTE: `for` array --}}
            <c-validation-group :for="['validation2', 'validation3']" class="mt-6" />
        @endverbatim
    </x-code>

    {{-- Hidden without error --}}
    <x-heading title="Hidden without error" subtitle="When there are no errors, nothing is rendered." />
    <x-code language="blade" render-class="grid grid-cols-2 gap-2">
        @verbatim
            {{-- NOTE: `validation4` does not have an error --}}
            <c-validation-group for="validation4" class="col-span-full" />

            <c-button label="Add error" wire:click="addErrorFor('validation4')" />
            <c-button label="Reset error" wire:click="resetErrorFor('validation4')" />
        @endverbatim
    </x-code>

    {{-- With header --}}
    <x-heading title="With header" subtitle="You can also pass some options to include a header" />
    <x-code language="blade">
        @verbatim
            <c-validation-group icon="face-slightly-frowning" title="Oh no!"
                subtitle="Some inputs seem to be out of order." />
        @endverbatim
    </x-code>

    {{-- Custom style --}}
    <x-heading title="Custom style" />
    <x-code language="blade">
        @verbatim
            <c-validation-group class="alert-soft border-(length:--border) border-secondary max-w-sm mx-auto text-accent"
                icon="x-circle" icon-class="h-10 w-10 text-info" title="Snap"
                title-class="text-xl font-extrabold text-success" subtitle="This looks interesting!"
                subtitle-class="underline text-warning ms-12" />
        @endverbatim
    </x-code>
</div>
