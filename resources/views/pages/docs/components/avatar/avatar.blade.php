<div class="doc">
    <c-header title="Avatar" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/avatar/avatar.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Avatar::class" />

    {{-- Default --}}
    <c-header title="Default" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        @verbatim
            <c-avatar image="https://testingbot.com/free-online-tools/random-avatar/300" alt="My image" />

            {{-- Manipulate avatar image with CSS classes --}}
            <c-avatar image="https://testingbot.com/free-online-tools/random-avatar/300" class="w-14! rounded-lg!" />

            {{-- Title --}}
            <c-avatar image="https://testingbot.com/free-online-tools/random-avatar/300" title="Rea Feichtinger" />

            {{-- Subtitle --}}
            <c-avatar image="https://testingbot.com/free-online-tools/random-avatar/300" title="Rea Feichtinger" subtitle="Creator of bellis-ui" class="w-10!" />

            {{-- Placeholder --}}
            <c-avatar placeholder="RF" title="Rea Feichtinger" subtitle="@reafeichtinger" class="w-10! bg-accent! text-accent-content!" />
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <c-header title="Slots" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <c-avatar image="https://testingbot.com/free-online-tools/random-avatar/300" class="w-22!">
                <c-slot:title class="text-3xl font-bold! pl-2">
                    Rea Feichtinger
                </c-slot:title>

                <c-slot:subtitle class="grid gap-1 mt-2 pl-2 text-xs">
                    <c-icon name="send-horizontal" label="12 posts" />
                    <c-icon name="message-circle-text" label="45 comments" />
                </c-slot:subtitle>
            </c-avatar>
        @endverbatim
    </x-code>
</div>
