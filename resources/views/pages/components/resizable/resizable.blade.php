<div class="doc">
    <x-heading title="Resizable" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/resizable/resizable.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Resizable::class" />

    {{-- Not resizable --}}
    <x-heading title="Not resizable" />
    <x-code language="blade" render-class="flex flex-col gap-6">
        @verbatim
            <c-resizable class="p-4 bg-base-200">
                This container is not resizable.
            </c-resizable>
        @endverbatim
    </x-code>

    {{-- Resizable top --}}
    <x-heading title="Resizable top" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        @verbatim
            <c-resizable top class="min-h-14 max-h-64 p-4 bg-base-200">
                This container is resizable from the top.
            </c-resizable>
        @endverbatim
    </x-code>

    {{-- Resizable end/right --}}
    <x-heading title="Resizable end/right" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        @verbatim
            <c-resizable end class="min-w-24 max-w-full p-4 bg-base-200">
                This container is resizable from the end.
            </c-resizable>
        @endverbatim
    </x-code>

    {{-- Resizable bottom --}}
    <x-heading title="Resizable bottom" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        @verbatim
            <c-resizable bottom class="min-h-14 max-h-64 p-4 bg-base-200">
                This container is resizable from the bottom.
            </c-resizable>
        @endverbatim
    </x-code>

    {{-- Resizable start/left --}}
    <x-heading title="Resizable start/left" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        @verbatim
            <c-resizable start class="min-w-24 max-w-full p-4 bg-base-200">
                This container is resizable from the start.
            </c-resizable>
        @endverbatim
    </x-code>

    {{-- Resizable all sides --}}
    <x-heading title="Resizable all sides" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        @verbatim
            <c-resizable top end bottom start class="min-h-14 max-h-64 min-w-24 max-w-full p-4 bg-base-200">
                This container is resizable from all sides.
            </c-resizable>
        @endverbatim
    </x-code>
</div>
