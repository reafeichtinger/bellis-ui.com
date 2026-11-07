<div class="doc">
    <x-heading title="DateTime" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/date-time/date-time.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\DateTime::class" />

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @verbatim
            <c-datetime label="My date" wire:model="myDate" />

            {{-- NOTE: `type="datetime-local"` --}}
            <c-datetime type="datetime-local" label="Date + Time" description="Hello from the description."
                wire:model="myDate" />

            {{-- NOTE: `type="time"` --}}
            <c-datetime type="time" label="Time" wire:model="myDate" icon="calendar" inline />
        @endverbatim
    </x-code>
</div>
