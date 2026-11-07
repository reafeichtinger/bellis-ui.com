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
                by Rea Feichtinger and
                <a href="https://github.com/reafeichtinger/bellis-ui"
                    class="link hover:text-base-content">contributors</a>.
            </div>
        BLADE;
    }
}
