<div class="doc">
    <x-heading title="Badge" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/badge/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/badge/badge.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Badge::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade" render-class="space-x-2">
        @verbatim
            <c-badge label="Content" />
            <c-badge>
                Slot <strong>content</strong>
            </c-badge>
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <x-heading title="Colors" />
    <x-code language="blade" render-class="space-x-2">
        @verbatim
            <c-badge label="Neutral" class="badge-neutral" />
            <c-badge label="Primary" class="badge-primary" />
            <c-badge label="Secondary" class="badge-secondary" />
            <c-badge label="Accent" class="badge-accent" />
            <c-badge label="Info" class="badge-info" />
            <c-badge label="Success" class="badge-success" />
            <c-badge label="Warning" class="badge-warning" />
            <c-badge label="Error" class="badge-error" />

            <c-divider class="my-3" label="Soft colors" />

            <c-badge label="Neutral" class="badge-neutral badge-soft" />
            <c-badge label="Primary" class="badge-primary badge-soft" />
            <c-badge label="Secondary" class="badge-secondary badge-soft" />
            <c-badge label="Accent" class="badge-accent badge-soft" />
            <c-badge label="Info" class="badge-info badge-soft" />
            <c-badge label="Success" class="badge-success badge-soft" />
            <c-badge label="Warning" class="badge-warning badge-soft" />
            <c-badge label="Error" class="badge-error badge-soft" />
        @endverbatim
    </x-code>

    {{-- Icons --}}
    <x-heading title="Icons" />
    <x-code language="blade" render-class="space-x-2">
        @verbatim
            <c-badge label="Completed" icon="check" class="badge-success" />
            <c-badge label="In progress" icon-right="clock" class="badge-info" />
            <c-badge label="Error" icon="ban" icon-right="ban" icon-class="h-4 w-4 text-error" />
        @endverbatim
    </x-code>

    {{-- Combined --}}
    <x-heading title="Combined" />
    <x-code language="blade" render-class="space-x-2">
        @verbatim
            <c-button>
                Inbox
                <c-badge label="+99" class="badge-neutral badge-sm" />
            </c-button>

            <c-button class="indicator">
                Inbox
                <c-badge label="7" class="badge-secondary badge-sm indicator-item" />
            </c-button>
        @endverbatim
    </x-code>
</div>
