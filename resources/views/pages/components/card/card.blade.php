<div class="doc">
    <x-heading title="Card" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/card/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/card/card.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Card::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade"
        render-class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-base-300 p-4 -m-2 -mt-5 rounded-box">
        @verbatim
            <c-card title="Your title" subtitle="This is the subtitle" shadow separator>
                I have title, subtitle, shadow and separator.
            </c-card>

            <c-card title="With image">
                I am using slots here.

                <c-slot:figure>
                    <img src="https://picsum.photos/500/200" />
                </c-slot:figure>

                <c-slot:menu>
                    <c-icon name="heart" class="cursor-pointer" />
                    <c-button icon="share" class="btn-accent btn-circle btn-sm" />
                </c-slot:menu>

                <c-slot:actions separator>
                    <c-button label="Confirm" class="btn-primary" />
                </c-slot:actions>
            </c-card>
        @endverbatim
    </x-code>

    {{-- Progress indicator --}}
    <x-heading title="Progress indicator" />
    <x-code language="blade"
        render-class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-base-300 p-4 -m-2 -mt-5 rounded-box">
        @verbatim
            {{-- NOTE: `separator` + `progress-indicator` --}}
            <c-card title="Some card" subtitle="Always triggers" separator progress-indicator>
                <c-button label="Save" wire:click="save" icon-right="check" spinner />
            </c-card>

            {{-- NOTE: `separator` + `progress-indicator` target --}}
            <c-card title="Some card" subtitle="Only triggers with `save2`" separator progress-indicator="save2">
                <c-button label="Save" wire:click="save2" icon-right="check" spinner />
            </c-card>
        @endverbatim
    </x-code>

    {{-- Styling --}}
    <x-heading title="Styling" />
    <x-code language="blade">
        @verbatim
            <c-card title="Custom card style" class="p-2 border-(length:--border) border-base-content bg-neutral" separator
                body-class="p-2 bg-info rounded-full">
                Hey, I'm blue!
            </c-card>
        @endverbatim
    </x-code>
</div>
