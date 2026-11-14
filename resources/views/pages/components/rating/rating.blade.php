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

    <c-alert icon="badge-info" class="alert-info">
        Each rating should have a unique
        <p class="inline text-xs"><code>wire:model</code></p>
        attribute to avoid conflicts with other ratings on the same page.
    </c-alert>

    {{-- Total length --}}
    <x-heading title="Total length">
        <x-slot:subtitle>
            Adjust the length with the
            <p class="inline text-xs"><code>total</code></p>
            attribute.
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            {{-- NOTE: `total` --}}
            <c-rating wire:model="ratingTotal3" total="3" />
            <c-rating wire:model="ratingTotal4" total="4" />
            <c-rating wire:model="ratingTotal5" /> {{-- Default: 5 --}}
            <c-rating wire:model="ratingTotal6" total="6" />
            <c-rating wire:model="ratingTotal7" total="7" />
        @endverbatim
    </x-code>

    {{-- Size & colors --}}
    <x-heading title="Size & colors" subtitle="You can customize the colors and size." />
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            {{-- NOTE: `class="bg-primary" size="rating-xs"` --}}
            <c-rating wire:model="ratingSizeXs" class="bg-primary" size="rating-xs" />
            <c-rating wire:model="ratingSizeSm" class="bg-secondary" size="rating-sm" />
            <c-rating wire:model="ratingSizeMd" class="bg-accent" size="rating-md" />
            <c-rating wire:model="ratingSizeLg" class="bg-success" size="rating-lg" />
            <c-rating wire:model="ratingSizeXl" class="bg-info" size="rating-xl" />
        @endverbatim
    </x-code>

    {{-- Shapes & masks --}}
    <x-heading title="Shapes & masks" subtitle="You can customize the shape via masks." />
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            {{-- NOTE: `mask-squircle!` --}}
            <c-rating wire:model="ratingMaskSquircle" class="mask-squircle!" />
            <c-rating wire:model="ratingMaskHeart" class="mask-heart!" />
            <c-rating wire:model="ratingMaskHexagon" class="mask-hexagon!" />
            <c-rating wire:model="ratingMaskHexagon2" class="mask-hexagon-2!" />
            <c-rating wire:model="ratingMaskDecagon" class="mask-decagon!" />
            <c-rating wire:model="ratingMaskPentagon" class="mask-pentagon!" />
            <c-rating wire:model="ratingMaskDiamond" class="mask-diamond! " />
            <c-rating wire:model="ratingMaskCircle" class="mask-circle!" />
            <c-rating wire:model="ratingMaskStar" class="mask-star!" />
            <c-rating wire:model="ratingMaskStar2" /> {{-- Default: mask-star-2 --}}
            <c-rating wire:model="ratingMaskTriangle" class="mask-triangle!" />
            <c-rating wire:model="ratingMaskTriangle2" class="mask-triangle-2!" />
            <c-rating wire:model="ratingMaskTriangle3" class="mask-triangle-3!" />
            <c-rating wire:model="ratingMaskTriangle4" class="mask-triangle-4!" />
        @endverbatim
    </x-code>

    {{-- Half & nullable --}}
    <x-heading title="Half & nullable">
        <x-slot:subtitle>
            <p> Using the
                <code class="text-xs">nullable</code>
                attribute adds an invisible button to set the value to "0". This uses some extra space.
            </p>
            <p class="mt-2">
                Using the
                <code class="text-xs">half</code>
                attribute allows setting half values. You might want to use bigger sizes with this as it can get hard to
                click.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="grid gap-4">
        {{-- blade-formatter-disable --}}
        @verbatim
            <div class="flex items-center gap-4">
                <c-rating wire:model.live="rating" class="bg-warning" size="rating-lg sm:rating-xl" />
                <c-badge label="Value: {{ $this->rating }}" class="badge-primary ms-3" />
            </div>
            <div class="flex items-center gap-4">
                <c-rating wire:model.live="ratingNullable" class="bg-warning" size="rating-lg sm:rating-xl" nullable />
                <c-badge label="Value: {{ $this->ratingNullable }}" class="badge-primary" />
            </div>
            <div class="flex items-center gap-4">
                <c-rating wire:model.live="ratingHalf" class="bg-warning" size="rating-lg sm:rating-xl" half />
                <c-badge label="Value: {{ $this->ratingHalf }}" class="badge-primary ms-7" />
            </div>
            <div class="flex items-center gap-4">
                <c-rating wire:model.live="ratingHalfNullable" class="bg-warning" size="rating-lg sm:rating-xl" half nullable />
                <c-badge label="Value: {{ $this->ratingHalfNullable }}" class="badge-primary ms-3" />
            </div>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Disabled --}}
    <x-heading title="Disabled" />
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            {{-- NOTE: `disabled` --}}
            <c-rating wire:model="ratingEnabled" />
            <c-rating wire:model="ratingDisabled" disabled />
        @endverbatim
    </x-code>
</div>
