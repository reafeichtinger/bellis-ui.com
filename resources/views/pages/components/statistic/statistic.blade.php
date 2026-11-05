<div class="doc">
    <x-heading title="Statistic" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/stat/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/stat/stat.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Stat::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade"
        render-class="grid grid-cols-1 sm:grid-cols-3 gap-4 bg-base-200 p-4 -m-2 -mt-5 rounded-field">
        @verbatim
            <c-stat value="Just value" />

            <c-stat title="With link to" value="Avatar" link="/docs/components/avatar"
                class="shadow transition-colors hover:bg-primary hover:text-primary-content" />

            <c-stat icon="mail" icon-class="text-accent" title="Emails" value="42" tooltip="Tooltip on top" />

            <c-stat icon="trending-down" icon-class="text-error" title="Sales" value="22.124" subtitle="This month"
                class="text-warning" tooltip-right="Tooltip on right" />

            <c-stat icon="trending-up" title="Sales" value="22.124" subtitle="This month" class="text-success"
                tooltip-bottom="Tooltip on bottom" />

            <c-stat icon="trending-up-down" icon-class="h-6 w-6 text-info" title="Lost" value="34"
                subtitle="This month" tooltip-left="Tooltip on left" />
        @endverbatim
    </x-code>
</div>
