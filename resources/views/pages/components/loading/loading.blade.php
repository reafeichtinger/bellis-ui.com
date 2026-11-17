<div class="doc">
    <x-heading title="Loading" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/loading/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/loading/loading.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Loading::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you need a progress state instead check out the
        <a href="/components/progress" wire:navigate class="link">Progress</a>
        component.
    </c-alert>

    {{-- Colors --}}
    <x-heading title="Colors" />
    <x-code language="blade" render-class="flex flex-wrap justify-center gap-6 p-6">
        @verbatim
            <c-loading class="text-primary" />
            <c-loading class="loading-dots text-secondary" />
            <c-loading class="loading-ring text-accent" />
            <c-loading class="loading-ball text-info" />
            <c-loading class="loading-bars text-success" />
            <c-loading class="loading-infinity text-error" />
        @endverbatim
    </x-code>

    {{-- Spinner --}}
    <x-heading title="Spinner" />
    <x-code language="blade" render-class="flex flex-wrap justify-center gap-6 p-6">
        @verbatim
            <c-loading class="loading-xs" />
            <c-loading class="loading-sm" />
            <c-loading class="loading-md" />
            <c-loading class="loading-lg" />
            <c-loading class="loading-xl" />
        @endverbatim
    </x-code>

    {{-- Dots --}}
    <x-heading title="Dots" />
    <x-code language="blade" render-class="flex flex-wrap justify-center gap-6 p-6">
        @verbatim
            <c-loading class="loading-dots loading-xs" />
            <c-loading class="loading-dots loading-sm" />
            <c-loading class="loading-dots loading-md" />
            <c-loading class="loading-dots loading-lg" />
            <c-loading class="loading-dots loading-xl" />
        @endverbatim
    </x-code>

    {{-- Ring --}}
    <x-heading title="Ring" />
    <x-code language="blade" render-class="flex flex-wrap justify-center gap-6 p-6">
        @verbatim
            <c-loading class="loading-ring loading-xs" />
            <c-loading class="loading-ring loading-sm" />
            <c-loading class="loading-ring loading-md" />
            <c-loading class="loading-ring loading-lg" />
            <c-loading class="loading-ring loading-xl" />
        @endverbatim
    </x-code>

    {{-- Ball --}}
    <x-heading title="Ball" />
    <x-code language="blade" render-class="flex flex-wrap justify-center gap-6 p-6">
        @verbatim
            <c-loading class="loading-ball loading-xs" />
            <c-loading class="loading-ball loading-sm" />
            <c-loading class="loading-ball loading-md" />
            <c-loading class="loading-ball loading-lg" />
            <c-loading class="loading-ball loading-xl" />
        @endverbatim
    </x-code>

    {{-- Bars --}}
    <x-heading title="Bars" />
    <x-code language="blade" render-class="flex flex-wrap justify-center gap-6 p-6">
        @verbatim
            <c-loading class="loading-bars loading-xs" />
            <c-loading class="loading-bars loading-sm" />
            <c-loading class="loading-bars loading-md" />
            <c-loading class="loading-bars loading-lg" />
            <c-loading class="loading-bars loading-xl" />
        @endverbatim
    </x-code>

    {{-- Infinity --}}
    <x-heading title="Infinity" />
    <x-code language="blade" render-class="flex flex-wrap justify-center gap-6 p-6">
        @verbatim
            <c-loading class="loading-infinity loading-xs" />
            <c-loading class="loading-infinity loading-sm" />
            <c-loading class="loading-infinity loading-md" />
            <c-loading class="loading-infinity loading-lg" />
            <c-loading class="loading-infinity loading-xl" />
        @endverbatim
    </x-code>
</div>
