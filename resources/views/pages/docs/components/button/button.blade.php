<div class="doc">
    <c-header title="Button" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/button/button.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Button::class" />

    {{-- Content --}}
    <c-header title="Content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
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

            <c-divider class="my-3" label="Soft colors" />

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

    {{-- Icons & Shapes --}}
    <c-header title="Icons & Shapes" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-button label="Icon left" icon="user" />
            <c-button label="Icon right" icon-right="user" />
            <c-button label="Icons" icon="user" icon-right="user" icon-class="text-accent" />
            <c-button icon="user" tooltip="Icon only" />

            <c-divider class="my-3" label="Shapes" />

            <c-button icon="user" class="btn-circle" />
            <c-button icon="user" class="btn-circle btn-outline" />
            <c-button icon="user" class="btn-circle btn-ghost" />
            <c-button icon="user" class="btn-square" />
        @endverbatim
    </x-code>

    {{-- Badges --}}
    <c-header title="Badges" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-button label="Hello" badge="12" />
            <c-button label="There" badge="8" badge-class="badge-warning" />
            <c-button label="There" badge="new" badge-class="badge-accent" />
        @endverbatim
    </x-code>

    {{-- Spinner (Loading state) --}}
    <c-header title="Spinner (Loading state)" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-form wire:submit="testSpinner2">
                <c-input placeholder="Name" />

                <c-slot:actions>
                    <c-button label="Self target" icon="circle-dashed-check" wire:click="testSpinner1" spinner />
                    <c-button label="No target" />
                    <c-button label="Custom target" type="submit" class="btn-primary" icon-right="check"
                        spinner="testSpinner2" />
                </c-slot:actions>
            </c-form>
        @endverbatim
    </x-code>

    {{-- Links --}}
    <c-header title="Link" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            {{--  Uses `wire:navigate` by default --}}
            <c-button label="Go to installation" link="/docs/install" class="btn-ghost underline" />

            {{--  NOTE: `no-wire-navigate` --}}
            <c-button label="Landing page" link="/" no-wire-navigate class="btn-ghost" />

            {{--  NOTE: `external` for external links  --}}
            <c-button label="External website" link="https://feichtinger.dev" external />
        @endverbatim
    </x-code>

    {{-- Tooltips --}}
    <c-header title="Tooltips" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-button label="Top" tooltip="Top" />
            <c-button label="Right" tooltip-right="Right" />
            <c-button label="Bottom" tooltip-bottom="Bottom" />
            <c-button label="Left" tooltip-left="Left" />
        @endverbatim
    </x-code>

    {{-- Responsive --}}
    <c-header title="Responsive" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-button label="There" icon="home" badge="12" responsive />
            <c-button label="There" icon="check" responsive />
        @endverbatim
    </x-code>
</div>
