<div class="doc">
    <x-heading title="Range" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/radio" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/range/range.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Range::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you want a tab style radio select, checkout the
        <a href="/components/group" wire:navigate class="link">Group</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="p-4">
        @verbatim
            <c-range wire:model.live.debounce="value" label="Select a level" description="Greater than 10."
                validation-reserved />

            <c-hr />
            <c-badge label="Selected: {{ $this->value }}" class="badge-neutral" />
        @endverbatim
    </x-code>

    {{-- Steps, color & range --}}
    <x-heading title="Steps, color & range" />
    <x-code language="blade" render-class="p-4">
        @verbatim
            <c-range wire:model.live.debounce="value2" min="20" max="80" step="10" label="Select a level"
                hint="Greater than 30." class="range-primary range-xs" validation-reserved />

            <c-hr />
            <c-badge label="Selected: {{ $this->value2 }}" class="badge-primary" />
        @endverbatim
    </x-code>

    {{-- Indicator --}}
    <x-heading title="Indicator" />
    <x-code language="blade" render-class="grid gap-4 p-4">
        @verbatim
            <c-range wire:model.live.debounce="value2" min="20" max="80" step="10"
                label="Default indicator" hint="Greater than 30." indicator validation-reserved />

            <c-range wire:model.live.debounce="value2" min="20" max="80" step="10" label="Custom indicator"
                hint="Greater than 30." validation-reserved>
                <c-slot:indicator>
                    <c-icon name="line-dot-top-vertical" class="-mx-2" />
                </c-slot:indicator>
            </c-range>

            <c-range wire:model.live.debounce="value2" min="20" max="80" step="10"
                label="Indicator with calculated numbers" hint="Greater than 30." validation-reserved>
                {{-- NOTE: We need `@scope` so we can use the $index variable --}}
                @scope('indicator', $index)
                    {{-- NOTE: $min + ($index * $step) gives current value --}}
                    <span>{{ 20 + $index * 10 }}</span>
                @endscope
            </c-range>
        @endverbatim
    </x-code>

    {{-- Default --}}
    <x-heading title="Default"
        subtitle="Vertical does not work together with indicator and might not work well with other options." />
    <x-code language="blade" render-class="p-4">
        @verbatim
            <c-range wire:model.live.debounce="value" label="Select a level" description="Greater than 10." vertical />
        @endverbatim
    </x-code>
</div>
