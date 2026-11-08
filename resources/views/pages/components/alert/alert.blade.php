<div class="doc">
    <x-heading title="Alert" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/alert/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/alert/alert.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Alert::class" />

    {{-- Colors --}}
    <x-heading title="Title / Icon / Colors" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert icon="info" title="12 unread messages." class="alert-info" />
            <c-alert icon="circle-check" title="Your purchase has been confirmed!" class="alert-success" />
            <c-alert icon="triangle-exclamation-point" title="Warning: Invalid email address!" class="alert-warning" />
            <c-alert icon="circle-x" title="Error! Task failed successfully." class="alert-error" />
        @endverbatim
    </x-code>

    {{-- Soft style --}}
    <x-heading title="Soft style" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert icon="info" title="12 unread messages." class="alert-info alert-soft" />
            <c-alert icon="circle-check" title="Your purchase has been confirmed!" class="alert-success alert-soft" />
            <c-alert icon="triangle-exclamation-point" title="Warning: Invalid email address!"
                class="alert-warning alert-soft" />
            <c-alert icon="circle-x" title="Error! Task failed successfully." class="alert-error alert-soft" />
        @endverbatim
    </x-code>

    {{-- Outline style --}}
    <x-heading title="Outline style" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert icon="info" title="12 unread messages." class="alert-info alert-outline" />
            <c-alert icon="circle-check" title="Your purchase has been confirmed!" class="alert-success alert-outline" />
            <c-alert icon="triangle-exclamation-point" title="Warning: Invalid email address!"
                class="alert-warning alert-outline" />
            <c-alert icon="circle-x" title="Error! Task failed successfully." class="alert-error alert-outline" />
        @endverbatim
    </x-code>

    {{-- Dash style --}}
    <x-heading title="Dash style" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert icon="info" title="12 unread messages." class="alert-info alert-dash" />
            <c-alert icon="circle-check" title="Your purchase has been confirmed!" class="alert-success alert-dash" />
            <c-alert icon="triangle-exclamation-point" title="Warning: Invalid email address!"
                class="alert-warning alert-dash" />
            <c-alert icon="circle-x" title="Error! Task failed successfully." class="alert-error alert-dash" />
        @endverbatim
    </x-code>

    {{-- Subtitle --}}
    <x-heading title="Subtitle" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert title="This is the title" subtitle="This is the subtitle." />
            <c-alert icon="info" title="This is the title" subtitle="This is the subtitle." />
        @endverbatim
    </x-code>

    {{-- Default slot --}}
    <x-heading title="Default slot" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert>
                This is the <strong>default slot</strong>.
            </c-alert>
        @endverbatim
    </x-code>

    {{-- Actions slot --}}
    <x-heading title="Actions slot" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert title="We use cookies for no reason.">
                <c-slot:actions>
                    <c-button label="OK" class="btn-sm btn-neutral" />
                </c-slot:actions>
            </c-alert>

            <c-alert icon="info" title="We use cookies for no reason.">
                <c-slot:actions>
                    <c-button label="Deny" class="btn-sm btn-neutral" />
                    <c-button label="Accept" class="btn-sm btn-primary" />
                </c-slot:actions>
            </c-alert>

            <c-alert icon="info" title="We use cookies for no reason."
                subtitle="You can pass any attributes to the action slot.">
                <c-slot:actions class="flex flex-col gap-2">
                    <c-button label="Deny" class="btn-sm btn-neutral" />
                    <c-button label="Accept" class="btn-sm btn-primary" />
                </c-slot:actions>
            </c-alert>
        @endverbatim
    </x-code>

    {{-- Responsive --}}
    <x-heading title="Responsive" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert title="We use cookies for no reason." class="alert-vertical sm:alert-horizontal">
                <c-slot:actions>
                    <c-button label="OK" class="btn-sm btn-neutral" />
                </c-slot:actions>
            </c-alert>

            <c-alert icon="info" title="We use cookies for no reason." class="alert-vertical sm:alert-horizontal">
                <c-slot:actions>
                    <c-button label="Deny" class="btn-sm btn-neutral" />
                    <c-button label="Accept" class="btn-sm btn-primary" />
                </c-slot:actions>
            </c-alert>
        @endverbatim
    </x-code>

    {{-- Dismissable --}}
    <x-heading title="Dismissable" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-alert title="Dismissing once" dismissible />
            <c-alert title="Dismissing once with subtitle"
                subtitle="The dismiss button always looks like this, use a custom action if that doesn't suffice."
                dismissible />

            <c-divider />

            <c-alert title="Using wire:model.live for state" wire:model.live="showAlert" dismissible />
            @if (!$this->showAlert)
                <c-button label="Show alert again" x-on:click="$wire.showAlert = true; $wire.$refresh();" />
            @endif
        @endverbatim
    </x-code>
</div>
