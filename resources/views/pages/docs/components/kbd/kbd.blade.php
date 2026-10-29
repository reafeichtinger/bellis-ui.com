<div class="doc">
    <c-header title="Kbd" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/kbd/kbd.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Kbd::class" />

    {{-- Content --}}
    <c-header title="Content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex gap-4">
        @verbatim
            <c-kbd label="A" />
            <c-kbd>B</c-kbd>
            <c-kbd class="kbd-lg">C</c-kbd>
            <c-kbd class="kbd-xl">D</c-kbd>
        @endverbatim
    </x-code>

    {{-- Examples --}}
    <c-header title="Examples" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex flex-col gap-4">
        @verbatim
            <span>Press <c-kbd label="CTRL" /> + <c-kbd label="K" /> to search.</span>
            <span>Press <c-kbd>F</c-kbd> to pay respect.</span>
        @endverbatim
    </x-code>
</div>
