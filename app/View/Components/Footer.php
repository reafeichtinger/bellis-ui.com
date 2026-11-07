<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct(
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-divider class="my-6" />
            <div class="text-center text-sm text-base-content/70 pb-40">
                Made with
                <c-icon name="heart-handshake" class="text-accent w-4 h-4" />
                by 
                <a href="https://feichtinger.dev" target="_blank"
                    class="link hover:text-base-content">Rea Feichtinger</a>.
                and
                <a href="https://github.com/reafeichtinger/bellis-ui" target="_blank"
                    class="link hover:text-base-content">contributors</a>.
            </div>
        BLADE;
    }
}
