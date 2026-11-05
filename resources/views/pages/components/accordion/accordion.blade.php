<div class="doc">
    <x-heading title="Accordion" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/accordion/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/accordion/accordion.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Accordion::class" />

    <c-alert icon="badge-info" class="alert-info">
        This component basically just groups the <a href="/docs/components/collapse" wire:navigate
            class="link">Collapse</a> component, preventing more than one collapse from being open at the same time.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade">
        @verbatim
            <c-accordion wire:model.live="default">
                <c-collapse name="default1">
                    <c-slot:heading>Group 1</c-slot:heading>
                    <c-slot:content>Hello 1</c-slot:content>
                </c-collapse>
                <c-collapse name="default2">
                    <c-slot:heading>Group 2</c-slot:heading>
                    <c-slot:content>Hello 2</c-slot:content>
                </c-collapse>
                <c-collapse name="default3">
                    <c-slot:heading>Group 3</c-slot:heading>
                    <c-slot:content>Hello 3</c-slot:content>
                </c-collapse>
            </c-accordion>
        @endverbatim
    </x-code>

    <p>
        Current value: <span class="text-secondary">{{ $this->default ?? 'null' }}</span>
    </p>

    {{-- No join --}}
    <x-heading title="No join" />
    <x-code language="blade">
        @verbatim
            <c-accordion wire:model="noJoin" no-join class="flex flex-col gap-4">
                <c-collapse name="noJoin1">
                    <c-slot:heading>Group 1</c-slot:heading>
                    <c-slot:content>Hello 1</c-slot:content>
                </c-collapse>
                <c-collapse name="noJoin2">
                    <c-slot:heading>Group 2</c-slot:heading>
                    <c-slot:content>Hello 2</c-slot:content>
                </c-collapse>
                <c-collapse name="noJoin3">
                    <c-slot:heading>Group 3</c-slot:heading>
                    <c-slot:content>Hello 3</c-slot:content>
                </c-collapse>
            </c-accordion>
        @endverbatim
    </x-code>
</div>
