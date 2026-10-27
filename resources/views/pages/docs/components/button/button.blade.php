<div class="flex flex-col space-y-6">
    <c-header title="Button" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/button"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-code language="blade" render-content>
        @verbatim
            {{-- Label --}}
            <c-button label="With label" />

            {{-- Slot --}}
            <c-button>With slot</c-button>
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <c-header title="Colors" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-button label="Neutral" class="btn-neutral" />
            <c-button label="Primary" class="btn-primary" />
            <c-button label="Secondary" class="btn-secondary" />
            <c-button label="Accent" class="btn-accent" />
            <c-button label="Info" class="btn-info" />
            <c-button label="Success" class="btn-success" />
            <c-button label="Warning" class="btn-warning" />
            <c-button label="Error" class="btn-error" />

            <c-divider class="my-2" label="Soft colors" />

            <c-button label="Neutral" class="btn-neutral btn-soft" />
            <c-button label="Primary" class="btn-primary btn-soft" />
            <c-button label="Secondary" class="btn-secondary btn-soft" />
            <c-button label="Accent" class="btn-accent btn-soft" />
            <c-button label="Info" class="btn-info btn-soft" />
            <c-button label="Success" class="btn-success btn-soft" />
            <c-button label="Warning" class="btn-warning btn-soft" />
            <c-button label="Error" class="btn-error btn-soft" />
        @endverbatim
    </x-code>

    {{-- Shapes --}}
    <c-header title="Shapes" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-button icon="user" class="btn-circle" />
            <c-button icon="user" class="btn-circle btn-outline" />
            <c-button icon="user" class="btn-circle btn-ghost" />
            <c-button icon="user" class="btn-square" />
        @endverbatim
    </x-code>
</div>
