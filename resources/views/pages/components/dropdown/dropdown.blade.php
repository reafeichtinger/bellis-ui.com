<div class="doc">
    <x-heading title="Dropdown" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/dropdown/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/dropdown/dropdown.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Dropdown::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you need value selection instead, check out the <a href="/docs/components/select" wire:navigate
            class="link">Select</a> component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade">
        @verbatim
            <c-dropdown>
                <c-menu-item title="Archive" icon="archive" />
                <c-menu-item title="Remove" icon="trash" />
                <c-menu-item title="Restore" icon="arrow-right" />
            </c-dropdown>
        @endverbatim
    </x-code>

    {{-- Custom trigger --}}
    <x-heading title="Custom trigger" />
    <p>You can overwrite the button that opens the dropdown by using the "trigger" slot.</p>
    <x-code language="blade">
        @verbatim
            <c-dropdown>
                <c-slot:trigger>
                    <c-button icon="bell" class="btn-circle" />
                </c-slot:trigger>

                <c-menu-item title="Archive" />
                <c-menu-item title="Move" />
            </c-dropdown>
        @endverbatim
    </x-code>

    {{-- Alignment --}}
    <x-heading title="Alignment" />
    <x-code language="blade" render-class="text-end">
        @verbatim
            <c-dropdown label="Hello" class="btn-warning" end>
                <c-menu-item title="It should align correctly on right side" />
                <c-menu-item title="Yes!" />
            </c-dropdown>
        @endverbatim
    </x-code>

    <p>
        By default, this component works with Alpine's anchor plugin. If you don't want to use it, just add no-x-anchor
        to the dropdown to manually control the position.
    </p>

    <x-code language="blade" render-class="flex flex-wrap justify-evenly">
        @verbatim
            <c-dropdown label="Default" no-x-anchor>
                <c-menu-item title="Hey" />
                <c-menu-item title="How are you?" />
            </c-dropdown>

            <c-dropdown label="Top" no-x-anchor top>
                <c-menu-item title="Hey" />
                <c-menu-item title="How are you?" />
            </c-dropdown>

            <c-dropdown label="End" no-x-anchor end>
                <c-menu-item title="Hey" />
                <c-menu-item title="It should align correctly on end?" />
            </c-dropdown>
        @endverbatim
    </x-code>

    {{-- Scroll & max. height --}}
    <x-heading title="Scroll & max. height" />
    <x-code language="blade" render-class="flex flex-wrap justify-evenly gap-2">
        @verbatim
            <c-dropdown label="Default">
                @foreach ($this->array as $item)
                    <c-menu-item title="Item {{ $item }}" />
                @endforeach
            </c-dropdown>

            <c-dropdown label="Scroll" scroll>
                @foreach ($this->array as $item)
                    <c-menu-item title="Item {{ $item }}" />
                @endforeach
            </c-dropdown>

            <c-dropdown label="Max height" scroll max-height="max-h-64">
                @foreach ($this->array as $item)
                    <c-menu-item title="Item {{ $item }}" />
                @endforeach
            </c-dropdown>
        @endverbatim
    </x-code>
</div>
