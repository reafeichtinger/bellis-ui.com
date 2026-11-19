<div class="doc">
    <x-heading title="Breadcrumbs" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/breadcrumbs/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/breadcrumbs/breadcrumbs.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Breadcrumbs::class" />

    <c-alert icon="badge-info" class="alert-info">
        This component uses
        <p class="inline text-xs"><code>ul</code></p>
        and
        <p class="inline text-xs"><code>li</code></p>
        HTML tags. Make sure you have an extra rule to not override them on your custom
        CSS.
    </c-alert>

    <x-heading title="Breadcrumb items">
        <x-slot:subtitle>
            Here are all the supported options for the
            <p class="inline text-xs"><code>$items</code></p>
            array:
        </x-slot:subtitle>
    </x-heading>

    <x-code-only language="php">
        {{-- blade-formatter-disable --}}
        @verbatim
            [
                'label'          => 'The label of the item.',
                'link'           => 'The url the item links to.',
                'navigate'       => 'If the link should use wire:navigate. default=true',
                'icon'           => 'The name of the icon to show before the label.',
                'tooltip'        => 'The tooltip to show on the top.',
                'tooltip-right'  => 'The tooltip to show on the right.',
                'tooltip-bottom' => 'The tooltip to show on the bottom.',
                'tooltip-left'   => 'The tooltip to show on the left.',
            ]
        @endverbatim
        {{-- blade-formatter-enabled --}}
    </x-code-only>

    {{-- Default --}}
    <x-heading title="Default" subtitle="On small screens, it automatically hides all intermediate items." />
    <x-code language="blade" render-class="pb-8 pt-6 flex items-center justify-center">
        {{-- blade-formatter-disable --}}
        @verbatim
            @php
                $breadcrumbs = [
                    ['label' => 'Home'], 
                    ['label' => 'Documents'], 
                    ['label' => 'Add document']
                ];
            @endphp

            <c-breadcrumbs :items="$breadcrumbs" />
        @endverbatim
        {{-- blade-formatter-enable --}}
        </x-code>

        {{-- Separator, icons & links --}}
        <x-heading title="Separator, icons & links" />
        <x-code language="blade" render-class="pb-8 pt-6 flex items-center justify-center">
            {{-- blade-formatter-disable --}}
        @verbatim
            @php
                $breadcrumbs = [
                    [
                        'link' => '/',
                        'icon' => 'home',
                    ], [
                        'label' => 'Documents',
                        'link' => '/components/breadcrumbs',
                        'icon' => 'folder',
                    ], [
                        'label' => 'Add document',
                        'icon' => 'file-plus-corner',
                    ],
                ];
            @endphp

            <c-breadcrumbs :items="$breadcrumbs" separator="slash" separator-class="h-3 w-3 mx-1 text-base-content/40 -rotate-15" />
        @endverbatim
        {{-- blade-formatter-enable --}}
        </x-code>

        {{-- Tooltip & colors --}}
        <x-heading title="Tooltip & colors" />
        <x-code language="blade" render-class="p-6">
            {{-- blade-formatter-disable --}}
        @verbatim
            @php
                $breadcrumbs = [
                    [
                        'label' => 'Home',
                        'icon' => 'home',
                        'tooltip-left' => 'Tooltips are supported!',
                    ], [
                        'label' => 'Documents',
                        'link' => '/components/breadcrumbs',
                        'tooltip' => 'Default position is top!',
                    ], [
                        'label' => 'Edit document',
                        'tooltip-bottom' => 'Positions are changable!',
                    ], [
                        'label' => '# 42',
                        'tooltip-right' => 'And one from the right',
                    ],
                ];
            @endphp

            <c-breadcrumbs
                :items="$breadcrumbs"
                separator="minus"
                separator-class="text-warning mx-2"
                class="bg-base-200 p-3 rounded-box"
                icon-class="text-warning"
                link-item-class="text-sm font-bold"
            />
        @endverbatim
        {{-- blade-formatter-enable --}}
        </x-code>

        {{-- Overflow scroll --}}
        <x-heading title="Overflow scroll" />
        <x-code language="blade" render-class="pb-8 pt-6 max-w-xs mx-auto">
            {{-- blade-formatter-disable --}}
        @verbatim
            @php
                $breadcrumbs = [
                    ['label' => 'Long text 1'],
                    ['label' => 'Long text 2'],
                    ['label' => 'Long text 3'],
                    ['label' => 'Long text 4'],
                    ['label' => 'Long text 5'],
                ];
            @endphp

            <c-breadcrumbs :items="$breadcrumbs" class="overflow-x-auto" text-item-class="text-sm whitespace-nowrap" />
        @endverbatim
        {{-- blade-formatter-enable --}}
        </x-code>
</div>
