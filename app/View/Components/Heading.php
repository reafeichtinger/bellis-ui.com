<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $subtitle = null,
        public ?string $level = 'h2',
        public ?string $end = null,
    ) {}

    public function render(): View|Closure|string
    {
        return '<c-' . $this->level . <<<'BLADE'
                :title="$title" x-data="heading" x-on:click.prevent="link($el)" 
                @class(['scroll-mt-20 group', 'mt-14' => $level == 'h2', 'mt-10' => $level == 'h3', ]) anchor
            >
                <c-slot name="icon">
                    <c-button icon="hash" icon-class="h-4 w-4"
                        tooltip-left="Copy link"
                        class="btn-square btn-sm btn-ghost text-secondary transition-opacity duration-300 opacity-0 group-hover:opacity-100 order-last xl:order-first xl:-ms-9" />
                </c-slot>

                @if ($subtitle)
                    <c-slot name="subtitle">
                        {!! $subtitle !!}
                    </c-slot>
                @endif

                @if ($end)
                    <c-slot name="end" :class="is_string($end) ? null : $end->attributes->get('class')">
                        {{ $end }}
                    </c-slot>
                @endif
        BLADE . '</c-' . $this->level . '>';
    }
}
