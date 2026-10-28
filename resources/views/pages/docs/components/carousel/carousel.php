<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
#[Layout('layouts.docs')]
class extends Component
{
    public array $slides = [
        ['image' => 'https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp'],
        ['image' => 'https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp'],
        ['image' => 'https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp'],
    ];
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
    public array $slotSlides = [
        [
            'image' => 'https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp',
            'title' => 'Ice cream',
        ],
        [
            'image' => 'https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp',
            'title' => 'Grapes',
        ],
        [
            'image' => 'https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp',
            'title' => 'Lemons',
        ],
    ];
};
