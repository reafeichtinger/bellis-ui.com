<div class="doc">
    <x-heading title="Kbd" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/kbd/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/kbd/kbd.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Kbd::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade" render-class="flex gap-4">
        @verbatim
            <c-kbd label="A" />
            <c-kbd>B</c-kbd>
            <c-kbd class="kbd-lg">C</c-kbd>
            <c-kbd class="kbd-xl">D</c-kbd>
        @endverbatim
    </x-code>

    {{-- Examples --}}
    <x-heading title="Examples" />
    <x-code language="blade" render-class="flex flex-col gap-4">
        @verbatim
            <span>Press <c-kbd label="CTRL" /> + <c-kbd label="K" /> to search.</span>
            <span>Press <c-kbd>F</c-kbd> to pay respect.</span>
        @endverbatim
    </x-code>
</div>
