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
    ) {}

    public function prepareSlot(string $slot): string
    {
        $slot = str_replace(['x-bellis.', 'livewire:components.bellis.'], 'c-', $slot);
        $processedLines = [];
        $baseTabs = str_repeat(' ', $this->tabs);

        foreach (explode("\n", trim($slot)) as $line) {
            $processedLines[] = str()->of($line)->replace($baseTabs, '')->rtrim();
        }

        return implode("\n", $processedLines);
    }

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
        <div {{ $attributes->merge(['class' => 'relative']) }}>
            <c-button class="absolute top-0.5 right-0.5 btn-ghost btn-circle btn-sm" icon="clipboard" icon-class="h-4 w-4 text-base-content/50" tooltip="Copy"
                x-data="copyToClipboard" x-on:click="copy($el.nextElementSibling)" />
            <x-markdown :theme="$theme ?? 'aurora-x'">
                @php echo "```$language" . PHP_EOL . $prepareSlot($slot) . PHP_EOL . '```'; @endphp
            </x-markdown>
        </div>

        @pushonce('end')
            @vite('resources/alpinejs/copy-to-clipboard.js')
            <style>
                .shiki {
                    font-size: var(--text-sm);
                    line-height: var(--tw-leading, var(--text-sm--line-height));
                    overflow-x: auto;
                    border-radius: var(--radius-box);
                    padding: 0.5rem;
                    margin: 0.5rem 0;
                    background-color: var(--color-base-300) !important;
                }
            </style>
        @endpushonce
        BLADE;
    }
}
