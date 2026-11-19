<div class="doc">
    <x-heading title="Tabs" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/tabs/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/tabs/tabs.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Tabs::class" />

    {{-- Tab --}}
    <x-heading title="Tab" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\Tab::class" />

    <c-alert icon="badge-info" class="alert-info">
        If you need a tab like radio select instead you should check out the
        <a href="/components/group" wire:navigate class="link">Group</a>
        component.
    </c-alert>

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        @verbatim
            <c-tabs wire:model="selectedTab">
                <c-tab value="users-tab" label="Users" />
                <c-tab value="tricks-tab" label="Tricks" />
                <c-tab value="musics-tab" label="Musics" />
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Tabs border --}}
    <x-heading title="Tabs border" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-border">
                <c-tab value="users-tab" label="Users" />
                <c-tab value="tricks-tab" label="Tricks" />
                <c-tab value="musics-tab" label="Musics" />
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Tabs lift --}}
    <x-heading title="Tabs lift" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-lift">
                <c-tab value="users-tab" label="Users" />
                <c-tab value="tricks-tab" label="Tricks" />
                <c-tab value="musics-tab" label="Musics" />
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Tabs box --}}
    <x-heading title="Tabs box" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-box">
                <c-tab value="users-tab" label="Users" />
                <c-tab value="tricks-tab" label="Tricks" />
                <c-tab value="musics-tab" label="Musics" />
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Sizes --}}
    <x-heading title="Sizes" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        @verbatim
            <c-tabs wire:model="xsmall" class="tabs-xs">
                <c-tab value="xsmall1-tab" label="Xsmall" />
                <c-tab value="xsmall2-tab" label="Xsmall" />
                <c-tab value="xsmall3-tab" label="Xsmall" />
            </c-tabs>

            <c-tabs wire:model="small" class="tabs-sm">
                <c-tab value="small1-tab" label="Small" />
                <c-tab value="small2-tab" label="Small" />
                <c-tab value="small3-tab" label="Small" />
            </c-tabs>

            <c-tabs wire:model="medium" class="tabs-md">
                <c-tab value="medium1-tab" label="Medium" />
                <c-tab value="medium2-tab" label="Medium" />
                <c-tab value="medium3-tab" label="Medium" />
            </c-tabs>

            <c-tabs wire:model="large" class="tabs-lg">
                <c-tab value="large1-tab" label="Large" />
                <c-tab value="large2-tab" label="Large" />
                <c-tab value="large3-tab" label="Large" />
            </c-tabs>

            <c-tabs wire:model="xlarge" class="tabs-xl">
                <c-tab value="xlarge1-tab" label="Xlarge" />
                <c-tab value="xlarge2-tab" label="Xlarge" />
                <c-tab value="xlarge3-tab" label="Xlarge" />
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Disabled & hidden --}}
    <x-heading title="Disabled & hidden" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        @verbatim
            <c-tabs wire:model="selectedTab">
                <c-tab value="users-tab" label="Users" disabled />
                <c-tab value="tricks-tab" label="Tricks" />
                <c-tab value="musics-tab" label="Musics" hidden />
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Icon --}}
    <x-heading title="Icon" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-border">
                <c-tab value="users-tab" label="Users" class="text-secondary font-bold" icon="user" />
                <c-tab value="tricks-tab" label="Tricks" icon="sparkles" />
                <c-tab value="musics-tab" label="Musics" icon="eighth-notes" icon-class="me-2 text-accent" />
            </c-tabs>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Badge --}}
    <x-heading title="Badge" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-box">
                <c-tab value="users-tab" label="Users" badge="new" 
                    badge-class="ms-2 badge-sm badge-primary" />
                <c-tab value="tricks-tab" label="Tricks" badge="🔥"
                    badge-class="indicator-item badge-error badge-soft badge-sm" />
                <c-tab value="musics-tab" label="Musics" badge="99+"
                    badge-class="indicator-item indicator-end indicator-bottom" />
            </c-tabs>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Color & active class --}}
    <x-heading title="Color & active class" />
    <x-code language="blade" render-class="flex flex-col gap-4 items-center">
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-lift"
                active-class="text-primary-content [--tab-bg:orange] [--tab-border-color:red]">
                <c-tab value="users-tab" label="Users" />
                <c-tab value="tricks-tab" label="Tricks" />
                <c-tab value="musics-tab" label="Musics" />
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Tab content --}}
    <x-heading title="Tab content" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-box">
                <c-tab value="users-tab" label="Users" icon="user">
                    This is the content of the Users tab.
                </c-tab>
                <c-tab value="tricks-tab" label="Tricks" icon="sparkles">
                    This is the content of the Tricks tab.
                </c-tab>
                <c-tab value="musics-tab" label="Musics" icon="eighth-notes">
                    This is the content of the Musics tab.
                </c-tab>
            </c-tabs>
        @endverbatim
    </x-code>

    {{-- Label class & content class --}}
    <x-heading title="Label class & content class" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        {{-- blade-formatter-disable --}}
        @verbatim
            <c-tabs wire:model="selectedTab" class="tabs-border" 
                label-class="italic text-lg font-light text-accent"
                content-class="p-10 shadow-lg bg-base-200"
            >
                <c-tab value="users-tab" label="Users" icon="user">
                    This is the content of the Users tab.
                </c-tab>
                <c-tab value="tricks-tab" label="Tricks" icon="sparkles">
                    This is the content of the Tricks tab.
                </c-tab>
                <c-tab value="musics-tab" label="Musics" icon="eighth-notes">
                    This is the content of the Musics tab.
                </c-tab>
            </c-tabs>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>
</div>
