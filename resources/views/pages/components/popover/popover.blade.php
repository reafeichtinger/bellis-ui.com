<div class="doc">
    <x-heading title="Popover" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/popover/popover.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Popover::class" />

    <c-alert icon="badge-info" class="alert-info">
        This component is built with the AlpineJS
        <a href="https://alpinejs.dev/plugins/anchor" target="_blank" class="link">Anchor Plugin</a>.
        This plugin ships with Livewire so you should be good to go.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="flex p-6">
        @verbatim
            <c-popover trigger="Plain text trigger" content="Plain text content" />
        @endverbatim
    </x-code>

    {{-- Styling --}}
    <x-heading title="Styling" />
    <x-code language="blade" render-class="flex p-6">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-popover 
                trigger="Fancy text trigger" trigger-class="italic text-primary text-lg font-bold"
                content="Fancy text content" content-class="z-1 p-1 badge badge-warning" />
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Position --}}
    <x-heading title="Position" />
    <x-code language="blade" render-class="flex flex-col gap-12 p-6">
        @verbatim
            <div class="flex justify-evenly">
                <c-popover trigger="Top start" content="This is the top start position" position="top-start" />
                <c-popover trigger="Top" content="This is the top position" position="top" />
                <c-popover trigger="Top end" content="This is the top end position" position="top-end" />
            </div>
            <div class="flex justify-evenly">
                <c-popover trigger="Right start" content="This is the right start position" position="right-start" />
                <c-popover trigger="Right" content="This is the right position" position="right" />
                <c-popover trigger="Right end" content="This is the right end position" position="right-end" />
            </div>
            <div class="flex justify-evenly">
                <c-popover trigger="Bottom start" content="This is the bottom start position" position="bottom-start" />
                <c-popover trigger="Bottom" content="This is the bottom position" position="bottom" />
                <c-popover trigger="Bottom end" content="This is the bottom end position" position="bottom-end" />
            </div>
            <div class="flex justify-evenly">
                <c-popover trigger="Left start" content="This is the left start position" position="left-start" />
                <c-popover trigger="Left" content="This is the left position" position="left" />
                <c-popover trigger="Left end" content="This is the left end position" position="left-end" />
            </div>
        @endverbatim
    </x-code>

    {{-- Timeout --}}
    <x-heading title="Timeout" />
    <x-code language="blade" render-class="flex justify-evenly p-6">
        @verbatim
            <c-popover trigger="No timeout" content="This takes 0 milliseconds to close." timeout="0" />
            <c-popover trigger="Default timeout" content="This takes 300 milliseconds to close." />
            <c-popover trigger="Long timeout" content="This takes 1 second to close." timeout="1000" />
        @endverbatim
    </x-code>

    {{-- Fixed & noflip --}}
    <x-heading title="Fixed & noflip" />
    <x-code language="blade" render-class="flex justify-evenly p-6">
        @verbatim
            <c-popover trigger="Fixed" content="This uses fixed position." fixed />
            <c-popover trigger="Noflip" content="This uses the noflip flag." noflip />
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <x-heading title="Slots" />
    <x-code language="blade" render-class="flex p-6">
        @verbatim
            <c-popover>
                <c-slot:trigger class="p-3 rounded-box bg-base-200">
                    <c-avatar image="https://testingbot.com/free-online-tools/random-avatar/300" title="Rea Feichtinger" />
                </c-slot:trigger>
                <c-slot:content class="bg-info text-info-content">
                    <strong>From:</strong> Austria <br>
                    <strong>Email:</strong> rea@feichtinger.dev
                </c-slot:content>
            </c-popover>
        @endverbatim
    </x-code>

    {{-- Animation --}}
    <x-heading title="Animation">
        <x-slot:subtitle>
            <p>
                You can even add custom transitions via AlpineJS
                <a href="https://alpinejs.dev/directives/transition" target="_blank" class="link">x-transition</a>
                directive.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="flex justify-evenly p-6">
        @verbatim
            <c-popover>
                <c-slot:trigger class="btn btn-xl">
                    <c-icon name="square-dimensions" />
                </c-slot:trigger>
                <c-slot:content x-transition:enter.scale.0 x-transition:leave.scale.0>
                    Scale transition
                </c-slot:content>
            </c-popover>

            <c-popover>
                <c-slot:trigger class="btn btn-xl">
                    <c-icon name="opacity" />
                </c-slot:trigger>
                <c-slot:content x-transition.opacity x-transition:enter.duration.1000ms x-transition:leave.duration.500ms>
                    Opacity transition
                </c-slot:content>
            </c-popover>

            <c-popover>
                <c-slot:trigger class="btn btn-xl">
                    <c-icon name="rotate-cw-square" />
                </c-slot:trigger>
                <c-slot:content x-transition:enter="transition ease-out duration-500 delay-250"
                    x-transition:enter-start="opacity-0 -rotate-90" x-transition:enter-end="opacity-100 rotate-0"
                    x-transition:leave="transition ease-in duration-500 delay-250"
                    x-transition:leave-start="opacity-100 rotate-0" x-transition:leave-end="opacity-0 rotate-90">
                    Custom transition
                </c-slot:content>
            </c-popover>
        @endverbatim
    </x-code>
</div>
