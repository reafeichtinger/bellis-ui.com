<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DocSearch extends Component
{
    public function __construct(
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <div {{ $attributes->merge(['id' => 'docsearch']) }}></div>
            @pushonce('bellis')
                <script>
                    document.addEventListener('livewire:navigated', () => {
                        window.docsearch({
                            container: '#docsearch',
                            appId: '{{ config('services.docsearch.id') }}',
                            apiKey: '{{ config('services.docsearch.key') }}',
                            indices: ['bellisUI Documentation'],
                            insights: true,
                            debug: {{ Illuminate\Support\Facades\App::isProduction() ? 'false' : 'true' }}
                        });
                        console.log('Loaded!');
                    });
                </script>
                <style>
                    :root[data-theme=dark] #docsearch, 
                    :root[data-theme=dark] .DocSearch-Modal {
                        --docsearch-background-color: var(--color-base-200);
                        --docsearch-code-block-background: var(--color-base-100);
                        --docsearch-container-background: var(--color-base-100);
                        --docsearch-error-color: var(--color-error);
                        --docsearch-focus-color: var(--color-base-100);
                        --docsearch-footer-background: var(--color-base-100);
                        --docsearch-footer-shadow: inset 0 1px 0 0 #494c6a80, 0 -4px 8px 0 #0003;
                        --docsearch-highlight-color: var(--color-secondary);
                        --docsearch-hit-background: var(--color-base-200);
                        --docsearch-hit-color:var(--color-base-content);
                        --docsearch-hit-focus-background: var(--color-neutral);
                        --docsearch-hit-highlight-color: var(--color-base-200);
                        --docsearch-icon-color: var(--color-base-content);
                        --docsearch-key-background: var(--color-base-100);
                        --docsearch-key-color: var(--color-base-content);
                        --docsearch-key-pressed-shadow: inset 0 2px 4px #0c0d1466;
                        --docsearch-logo-color: #fff;
                        --docsearch-modal-background: var(--color-base-100);
                        --docsearch-modal-shadow: inset 1px 1px 0 0 #2c2e40, 0 3px 8px 0 #000309;
                        --docsearch-muted-color: var(--color-neutral);
                        --docsearch-popover-shadow: 0 0 0 1px #ffffff14, 0 4px 8px -2px #0000008c;
                        --docsearch-primary-dark-color: var(--color-base-100);
                        --docsearch-search-button-background: var(--color-base-200);
                        --docsearch-searchbox-background: var(--color-base-100);
                        --docsearch-searchbox-focus-background: var(--color-base-100);
                        --docsearch-secondary-text-color: color-mix(in srgb, var(--color-base-content) 75%, transparent);
                        --docsearch-subtle-color: var(--color-base-100);
                        --docsearch-success-color: var(--color-base-100);
                        --docsearch-text-color: var(--color-base-content);
                        --docsearch-soft-primary-color: var(--color-primary-content)
                    }
                    #docsearch { zoom: 0.85; 
                        & > button { border: 3px solid transparent; } 
                        & > button:hover,& > button:focus { border: 3px solid var(--color-primary); } 
                    }
                    .DocSearch-Modal { border: var(--border) solid var(--color-base-300); }
                </style>
            @endpushonce
        BLADE;
    }
}
