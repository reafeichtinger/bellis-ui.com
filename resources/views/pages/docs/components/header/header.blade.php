<div class="doc">
    <c-h1 title="Header" icon="hash" icon-class="text-secondary" anchor class="scroll-mt-18">
        <x-slot:icon>
            <c-button icon="hash" x-on:click="navigator.clipboard.writeText($el.closest('a').href)"
                class="btn-square btn-sm btn-ghost text-secondary" />
        </x-slot:icon>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/header/header.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-h1>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Header::class" />

    {{-- Tags --}}
    <c-h2 title="Tags" anchor class="scroll-mt-18">
        <x-slot:icon>
            <c-button icon="hash" icon-class="h-4 w-4"
                x-on:click="navigator.clipboard.writeText($el.closest('a').href)"
                class="btn-square btn-sm btn-ghost text-secondary" />
        </x-slot:icon>
    </c-h2>
    <x-code language="blade" render-content render-class="p-8">
        @verbatim
            <c-h1 title="Using h1 tag" />
            <c-h2 title="Using h2 tag" />
            <c-h3 title="Using h3 tag" />
            <c-h4 title="Using h4 tag" />
            <c-h5 title="Using h5 tag" />
            <c-h6 title="Using h6 tag" />
            <c-header title="Using div tag" />
            <c-header title="Using custom style" title-class="text-[2rem] font-extralight text-primary" />
        @endverbatim
    </x-code>

    {{-- Subtitle --}}
    <c-h2 title="Subtitle" anchor class="scroll-mt-18">
        <x-slot:icon>
            <c-button icon="hash" icon-class="h-4 w-4"
                x-on:click="navigator.clipboard.writeText($el.closest('a').href)"
                class="btn-square btn-sm btn-ghost text-secondary" />
        </x-slot:icon>
    </c-h2>
    <x-code language="blade" render-content render-class="p-8">
        @verbatim
            <c-h1 title="With subtitle" subtitle="This is the subtitle." />
            <c-h2 title="With subtitle" subtitle="This is the subtitle." />
            <c-h3 title="With subtitle" subtitle="This is the subtitle." />
            <c-h4 title="With subtitle" subtitle="This is the subtitle." />
            <c-h5 title="With subtitle" subtitle="This is the subtitle." />
            <c-h6 title="With subtitle" subtitle="This is the subtitle." />
            <c-header title="With subtitle" subtitle="This is the subtitle." />
        @endverbatim
    </x-code>

    {{-- Icon --}}
    <c-h2 title="Icon" anchor class="scroll-mt-18">
        <x-slot:icon>
            <c-button icon="hash" icon-class="h-4 w-4"
                x-on:click="navigator.clipboard.writeText($el.closest('a').href)"
                class="btn-square btn-sm btn-ghost text-secondary" />
        </x-slot:icon>
    </c-h2>
    <x-code language="blade" render-content render-class="p-8">
        @verbatim
            <c-h1 title="With icon" icon="zap" icon-class="h-7 w-7" />
            <c-h2 title="With icon" icon="zap" icon-class="h-7 w-7" />
            <c-h3 title="With icon" icon="zap" icon-class="h-6 w-6" />
            <c-h4 title="With icon" icon="zap" icon-class="h-6 w-6" />
            <c-h5 title="With icon" icon="zap" />
            <c-h6 title="With icon" icon="zap" />
            <c-header title="With icon" icon="zap" />
            <c-header title="With icon" icon="zap" icon-class="bg-primary text-primary-content rounded-full p-px" />
        @endverbatim
    </x-code>

    {{-- Divider & Progress --}}
    <c-h2 title="Divider & Progress" anchor class="scroll-mt-18">
        <x-slot:icon>
            <c-button icon="hash" icon-class="h-4 w-4"
                x-on:click="navigator.clipboard.writeText($el.closest('a').href)"
                class="btn-square btn-sm btn-ghost text-secondary" />
        </x-slot:icon>
    </c-h2>
    <x-code language="blade" render-content render-class="p-8 flex flex-col gap-4">
        @verbatim
            <c-h1 title="Divider only" divider />
            <c-h2 title="Divider with custom class" divider divider-class="mt-3 mx-16 w-auto!" />

            <c-h3 title="Progress only" progress />
            <c-h4 title="Progress and divider" progress divider />
            <c-h5 title="Progress and divider with custom class" progress
                progress-class="mt-3 mx-16 w-auto! progress-accent" divider divider-class="mt-3 mx-16 w-auto!" />
            <c-header title="Progress with custom target" divider progress="customTarget" />

            <div class="flex justify-end gap-4 mt-6">
                <c-button wire:click="sleep(2)" class="btn-default" label="Sleep" spinner />
                <c-button wire:click="customTarget" class="btn-primary" label="Custom target" spinner />
            </div>
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <c-h2 title="Slots" anchor class="scroll-mt-18">
        <x-slot:icon>
            <c-button icon="hash" icon-class="h-4 w-4"
                x-on:click="navigator.clipboard.writeText($el.closest('a').href)"
                class="btn-square btn-sm btn-ghost text-secondary" />
        </x-slot:icon>
    </c-h2>
    <x-code language="blade" render-content render-class="p-8">
        @verbatim
            <c-header subtitle="This is responsive" divider>
                <c-slot:title>
                    This is the title <c-badge label="new" class="ms-1 badge-info badge-sm" />
                </c-slot:title>
                <c-slot:subtitle>
                    Wow, everything is <span class="italic text-accent">customizable</span>!
                </c-slot:subtitle>
                <c-slot:end>
                    <c-button icon="funnel" class="btn-square" />
                    <c-button icon="plus" class="btn-primary btn-square" />
                </c-slot:end>
            </c-header>
        @endverbatim
    </x-code>
</div>
