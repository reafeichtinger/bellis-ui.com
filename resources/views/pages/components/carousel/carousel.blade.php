<div class="doc">
    <x-heading title="Carousel" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/carousel/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/carousel/carousel.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Carousel::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade">
        @verbatim
            {{-- 
                public array $slides = [
                    ['image' => 'https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp'],
                    ['image' => 'https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp'],
                    ['image' => 'https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp'],
                ];
            --}}

            <c-carousel :slides="$this->slides" />
        @endverbatim
    </x-code>

    {{-- Appearence --}}
    <x-heading title="Appearence" />
    <x-code language="blade" render-class="grid grid-cols-1 gap-6">
        @verbatim
            {{-- Class --}}
            <c-carousel :slides="$this->slides" class="mx-auto w-32! rounded-none!" />

            {{-- No dot indicators --}}
            <c-carousel :slides="$this->slides" without-indicators />

            {{-- No arrow buttons --}}
            <c-carousel :slides="$this->slides" without-arrows />
        @endverbatim
    </x-code>

    {{-- Autoplay --}}
    <x-heading title="Autoplay" />
    <x-code language="blade" render-class="grid grid-cols-2 gap-6">
        @verbatim
            <c-carousel :slides="$this->slides" without-indicators without-arrows autoplay />

            {{-- 5 seconds --}}
            <c-carousel :slides="$this->slides" autoplay interval="5000" />
        @endverbatim
    </x-code>

    {{-- Complex --}}
    <x-heading title="Complex" />
    <p>Play around removing some attributes. The only required attribute is <code>image</code>.</p>
    <x-code language="blade">
        @verbatim
            {{-- 
                public array $fullSlides = [
                    [
                        'image' => 'https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp',
                        'title' => 'Frontend developers',
                        'description' => 'We love last week frameworks.',
                        'url' => '/docs/install',
                        'urlText' => 'Get started',
                        'lazy' => true,     // Enable lazy loading for this image. Default is eager.
                    ],
                    [
                        'image' => 'https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp',
                        'title' => 'Full stack developers',
                        'description' => 'Where burnout is just a fancy term for Tuesday.',
                    ],
                    [
                        'image' => 'https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp',
                        'url' => '/docs/install',
                        'urlText' => 'Let`s go!',
                    ],
                    [
                        'image' => 'https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp',
                        'url' => '/docs/install',
                    ],
                ];
            --}}

            <c-carousel :slides="$this->fullSlides" />
        @endverbatim
    </x-code>

    {{-- Content scope --}}
    <x-heading title="Content @scope" />
    <p>
        By using the special blade directive <code>@@scope</code> you have access
        to the current item from loop. Notice also you have access to the Laravel`s <code>$loop</code> variable.
    </p>
    <x-code language="blade">
        @verbatim
            {{-- public array $slotSlides = [
                    [
                        'image' => '/images/photos/photo-1559703248-dcaaec9fab78.jpg',
                        'title' => 'Frontend developers',
                    ],
                    [
                        'image' => '/images/photos/photo-1565098772267-60af42b81ef2.jpg',
                        'title' => 'Full stack developers',
                    ],
                    [
                        'image' => '/images/photos/photo-1494253109108-2e30c049369b.jpg',
                        'title' => 'Hey!',
                    ],
                ]; 
            --}}
            <c-carousel :slides="$this->slotSlides" class="h-96!">
                @scope('content', $slide)
                    <div class="mt-16 bg-base-300 font-bold text-base-content rounded-field p-2 w-fit mx-auto">
                        {{ $slide['title'] }} 👋 {{ $loop->index }}
                    </div>
                @endscope
            </c-carousel>
        @endverbatim
    </x-code>
</div>
