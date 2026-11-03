<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $level = null,
        public ?string $end = null,
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-h2 :title="$title" x-data="heading" anchor>
                <c-slot name="icon">
                    <c-button icon="hash" icon-class="h-4 w-4"
                        x-on:click.prevent="link($el)" tooltip-left="Copy link"
                        class="btn-square btn-sm btn-ghost text-secondary scroll-mt-18" />
                </c-slot>

                @if ($end)
                    <c-slot name="end">
                        {{ $end }}
                    </c-slot>
                @endif
            </c-h2>
        BLADE;
    }
}
