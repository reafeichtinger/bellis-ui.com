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

    {{-- Style --}}
    <x-heading title="Style" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-resizable top end bottom start class="min-h-14 max-h-64 min-w-24 max-w-full p-4 bg-base-200"
                {{-- Custom color + width --}}
                top-class="group-hover:bg-accent! w-3/4!" 
                {{-- Custom thickness and height --}}
                end-class="w-1.5 h-6!"
                {{-- Custom thickness + radius --}}
                bottom-class="h-1.5 rounded-none"
                {{-- Custom color + heigth --}}
                start-class="group-hover:bg-info! h-3/4!">
                This container is resizable from all sides with custom style.
            </c-resizable>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Icon handles --}}
    <x-heading title="Icon handles" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-resizable top end bottom start 
                class="min-h-14 max-h-64 min-w-24 max-w-full p-4 ring-(length:--border) ring-inset ring-base-content/15"
                top-icon="grip-horizontal"
                end-icon="grip-vertical"
                bottom-icon="grip-horizontal"
                start-icon="grip-vertical"
            >
                This container is resizable from all sides with icon handles.
            </c-resizable>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Custom icon style --}}
    <x-heading title="Custom icon style" />
    <x-code language="blade" render-class="flex flex-col justify-end gap-6">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-resizable top end bottom start 
                class="min-h-14 max-h-64 min-w-24 max-w-full p-4 bg-base-200"
                top-icon="chevron-up"
                top-class="bg-error! text-error-content! hover:bg-error-content! hover:text-error! border-error-content!"
                end-icon="chevron-right"
                end-class="bg-info! text-info-content! hover:bg-info-content! hover:text-info! border-info-content!"
                bottom-icon="chevron-down"
                bottom-class="bg-warning! text-warning-content! hover:bg-warning-content! hover:text-warning! border-warning-content!"
                start-icon="chevron-left"
                start-class="bg-success! text-success-content! hover:bg-success-content! hover:text-success! border-success-content!"
            >
                This container is resizable from all sides with custom icon style.
            </c-resizable>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>
</div>
