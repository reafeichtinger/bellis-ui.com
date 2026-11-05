<div class="doc">
    <x-heading title="Collapse" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/collapse/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/collapse/collapse.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Collapse::class" />

    <c-alert icon="badge-info" class="alert-info">
        You can wrap multiple collapse components by using the <a href="/docs/components/accordion" wire:navigate
            class="link">Accordion</a> component.
    </c-alert>

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade" render-class="flex flex-col gap-4 p-8">
        @verbatim
            {{-- Plain text --}}
            <c-collapse heading="Hello" content="World" />

            {{-- Slot --}}
            <c-collapse>
                <c-slot:heading>
                    Hello
                </c-slot:heading>
                <c-slot:content>
                    World
                </c-slot:content>
            </c-collapse>
        @endverbatim
    </x-code>

    {{-- wire:model --}}
    <x-heading title="wire:model" />
    <x-code language="blade" render-class="p-8">
        @verbatim
            <c-collapse wire:model="show" separator progress-indicator>
                <c-slot:heading>Hey</c-slot:heading>
                <c-slot:content>
                    <c-button label="Test" wire:click="sleep" icon-right="check" spinner />
                </c-slot:content>
            </c-collapse>
        @endverbatim
    </x-code>

    {{-- Style --}}
    <x-heading title="Style" />
    <x-code language="blade" render-class="p-8">
        @verbatim
            <c-collapse collapse-plus-minus open class="rounded-box overflow-clip">
                <c-slot:heading class="bg-accent text-accent-content">
                    How ...
                </c-slot:heading>
                <c-slot:content class="bg-accent/25 text-base-content">
                    <div class="mt-5">Are you?</div>
                </c-slot:content>
            </c-collapse>
        @endverbatim
    </x-code>

    {{-- No icon --}}
    <x-heading title="No icon" />
    <x-code language="blade" render-class="p-8">
        @verbatim
            <c-collapse no-icon separator heading="How..." content="... are you?" />
        @endverbatim
    </x-code>
</div>
