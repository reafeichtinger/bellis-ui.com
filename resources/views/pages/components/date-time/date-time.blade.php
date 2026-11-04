<div class="doc">
    <c-header title="DateTime" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/date-time/date-time.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\DateTime::class" />

    {{-- Default --}}
    <c-header title="Default" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @verbatim
            <c-datetime label="My date" wire:model="myDate" />

            {{-- NOTE: `type="datetime-local"` --}}
            <c-datetime type="datetime-local" label="Date + Time" description="Hello from the description." wire:model="myDate" />

            {{-- NOTE: `type="time"` --}}
            <c-datetime type="time" label="Time" wire:model="myDate" icon="calendar" inline />
        @endverbatim
    </x-code>
</div>
