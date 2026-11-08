<div class="doc">
    <x-heading title="Table" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/table/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/table/table.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Table::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade">
        @verbatim
            TODO: This page is currently being worked at.
        @endverbatim
    </x-code>
</div>
