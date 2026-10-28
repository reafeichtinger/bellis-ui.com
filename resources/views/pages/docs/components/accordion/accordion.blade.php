<div class="doc">
    <c-header title="Accordion" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/accordion/accordion.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Accordion::class" />

    <c-alert icon="badge-info" class="alert-info">
        This component basically just groups the <a href="/docs/components/collapse" wire:navigate
            class="link">Collapse</a> component, preventing more than one collapse from being open at the same time.
    </c-alert>

    {{-- Default --}}
    <c-header title="Default" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-accordion wire:model="default">
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

    {{-- No join --}}
    <c-header title="No join" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
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
