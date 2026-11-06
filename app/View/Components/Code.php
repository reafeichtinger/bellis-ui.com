<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Code extends Component
{
    public function __construct(
        public ?string $language = 'blade',
        public ?string $theme = 'aurora-x',
        public int $tabs = 12,
        public ?string $renderClass = null,
    ) {}

    public function prepareSlot(string $slot): string
    {
        $slot = str_replace(['x-bellis.', 'livewire:components.bellis.'], 'c-', $slot);
        $slot = str_replace('x-slot', 'c-slot', $slot);
        $processedLines = [];
        $baseTabs = str_repeat(' ', $this->tabs);

        foreach (explode("\n", trim($slot)) as $line) {
            $processedLines[] = str()->of($line)->replaceFirst($baseTabs, '')->rtrim();
        }

        return implode("\n", $processedLines);
    }

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            @php $content = $prepareSlot($slot); @endphp
            <div x-data="{ selected: 'preview' }">
                <c-mockup-browser toolbar-class="border-b-(length:--border) border-b-base-content/10 mt-0">
                    <c-slot name="url" class="flex-1 flex items-center justify-end">
                        <div class="tabs tabs-lift tabs-sm -me-3 mt-1 -mb-(--border)">
                            <a role="tab" x-on:click="selected = 'preview'" class="tab" x-bind:class="selected == 'preview' && 'tab-active'">
                                <c-icon name="app-window-mac" class="h-4 w-4 me-1" />
                                Preview
                            </a>
                            <a role="tab" x-on:click="selected = 'code'" class="tab" x-bind:class="selected == 'code' && 'tab-active text-white [--tab-bg:var(--color-zinc-900)]'">
                                <c-icon name="code-xml" class="h-4 w-4 me-1" />
                                HTML
                            </a>
                        </div>
                    </c-slot>
                    {{-- Preview --}}
                    <div x-cloak x-show="selected === 'preview'" @class([$renderClass])>{!! Blade::render($content) !!}</div>
                    {{-- Code --}}
                    <div x-cloak x-show="selected === 'code'" {{ $attributes->merge(['class' => 'relative -mx-3 -mb-5 -mt-8']) }}>
                        <c-button class="absolute top-0 -right-11 btn-ghost bg-zinc-900 hover:border-neutral btn-square" 
                            icon="clipboard" icon-class="text-zinc-50/50" tooltip-right="Copy"
                            x-data="code($el)" x-on:click="copy($el.nextElementSibling)" />
                        <x-markdown :theme="$theme ?? 'aurora-x'">
                            @php echo "```$language" . PHP_EOL . $content . PHP_EOL . '```'; @endphp
                        </x-markdown>
                    </div>
                </c-mockup-browser>
            </div>

            @pushonce('bellis')
                <style>
                    .shiki {
                        font-size: var(--text-sm);
                        line-height: var(--tw-leading, var(--text-sm--line-height));
                        overflow-x: auto;
                        border-radius: 0 0 var(--radius-box) var(--radius-box);
                        padding: 0.5rem;
                        margin: 0.5rem 0;
                        background-color: var(--color-zinc-900) !important;
                    }
                </style>
            @endpushonce
        BLADE;
    }
}
