<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CodeOnly extends Component
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
            <div {{ $attributes->merge(['class' => 'relative bellis-code-only']) }}>
                <c-button class="absolute top-0 right-0 xl:-right-11 btn-ghost bg-zinc-900 hover:border-neutral btn-square" 
                    icon="clipboard" icon-class="text-zinc-50/50" tooltip-right="Copy"
                    x-data="code($el)" x-on:click="copy($el.nextElementSibling)" />
                <x-markdown :theme="$theme ?? 'aurora-x'">
                    @php echo "```$language" . PHP_EOL . $prepareSlot($slot) . PHP_EOL . '```'; @endphp
                </x-markdown>
            </div>

            @pushonce('bellis')
                <style>
                    .bellis-code-only .shiki {
                        font-size: var(--text-sm);
                        line-height: var(--tw-leading, var(--text-sm--line-height));
                        overflow-x: auto;
                        border-radius:var(--radius-field);
                        padding: 0.5rem;
                        margin: 0;
                        background-color: var(--color-zinc-900) !important;
                    }
                </style>
            @endpushonce
        BLADE;
    }
}
