<div class="doc">
    <x-heading title="Rating" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/rating/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/rating/rating.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Rating::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade" render-class="grid gap-4">
        @verbatim

            <c-rating wire:model="rating" />

            <c-rating wire:model="rating1" class="bg-warning" total="8" />

            <c-rating wire:model="rating2" class="mask-circle!" />

            <c-rating wire:model="rating3" class="mask-diamond! bg-accent" />

            <c-rating wire:model="rating4" class="mask-heart! bg-secondary rating-xl" />

            <c-rating wire:model="rating4" class="bg-secondary" allow-halves />
        @endverbatim
    </x-code>
</div>
