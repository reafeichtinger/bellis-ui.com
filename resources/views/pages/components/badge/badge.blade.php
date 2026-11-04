<div class="doc">
    <c-header title="Badge" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/badge/badge.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Badge::class" />

    {{-- Content --}}
    <c-header title="Content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="space-x-2">
        @verbatim
            <c-badge label="Content" />
            <c-badge>
                Slot <strong>content</strong>
            </c-badge>
        @endverbatim
    </x-code>

    {{-- Colors --}}
    <c-header title="Colors" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="space-x-2">
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
    <c-header title="Icons" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="space-x-2">
        @verbatim
            <c-badge label="Completed" icon="check" class="badge-success" />
            <c-badge label="In progress" icon-right="clock" class="badge-info" />
            <c-badge label="Error" icon="ban" icon-right="ban" icon-class="h-4 w-4 text-error" />
        @endverbatim
    </x-code>

    {{-- Combined --}}
    <c-header title="Combined" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="space-x-2">
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
