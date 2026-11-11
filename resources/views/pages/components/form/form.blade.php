<div class="doc">
    <x-heading title="Form" level="h1">
        <c-slot:end>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/form/form.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Form::class" />

    <c-alert icon="badge-info" class="alert-info">
        For more information about validation options checkout the validation section in the
        <a href="/components/input#validation" wire:navigate class="link">Input</a>
        component. If you want to collect multiple validation errors and show them together you can use the
        <a href="/components/validation-group" wire:navigate class="link">ValidationGroup</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default">
        <x-slot:subtitle>
            Usually you would add
            <p class="inline text-xs"><code>wire:submit="yourSubmitMethod"</code></p>
            on the form. This works in combination with a button that has
            <p class="inline text-xs"><code>type="submit"</code></p>.
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="p-8 max-w-sm mx-auto">
        @verbatim
            <c-form wire:submit="save">
                <c-input label="Name" wire:model="name" />
                <c-input-number label="Amount" wire:model="amount" suffix="€" class="text-right" x-data
                    x-bind:class="'text-right'" />

                <c-slot:actions>
                    <c-button label="Cancel" />
                    <c-button label="Submit" class="btn-primary" type="submit" spinner="save" />
                </c-slot:actions>
            </c-form>
        @endverbatim
    </x-code>

    {{-- Divider --}}
    <x-heading title="Divider" />
    <x-code language="blade" render-class="p-8 max-w-sm mx-auto">
        @verbatim
            {{-- NOTE: `divider` --}}
            <c-form wire:submit="save" divider class="bg-base-200 p-3 rounded-box">
                <c-input label="Name" wire:model="name" />
                <c-input-number label="Amount" wire:model="amount" suffix="€" class="text-right" x-data
                    x-bind:class="'text-right'" />

                <c-slot:actions>
                    <c-button label="Cancel" class="bg-base-100" />
                    <c-button label="Submit" class="btn-primary" type="submit" spinner="save" />
                </c-slot:actions>
            </c-form>
        @endverbatim
    </x-code>

    {{-- No CSRF --}}
    <x-heading title="No CSRF">
        <x-slot:subtitle>
            By default a hidden input field for CSRF protection is included via the blade directive
            <p class="inline text-xs">
                <code>
                    @verbatim
                        @csrf
                    @endverbatim
                </code>
            </p>.
            If for some reason you don't want this, pass the
            <p class="inline text-xs whitespace-nowrap"><code>no-csrf</code></p>
            flag.
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="p-8 max-w-sm mx-auto">
        @verbatim
            {{-- NOTE: `no-csrf` --}}
            <c-form wire:submit="save" no-csrf>
                <c-input label="Name" wire:model="name" />
                <c-input-number label="Amount" wire:model="amount" suffix="€" class="text-right" x-data
                    x-bind:class="'text-right'" />

                <c-slot:actions>
                    <c-button label="Cancel" class="bg-base-100" />
                    <c-button label="Submit" class="btn-primary" type="submit" spinner="save" />
                </c-slot:actions>
            </c-form>
        @endverbatim
    </x-code>
</div>
