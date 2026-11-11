<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarItem extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $link = null,
        public ?string $badge = null,
        public ?string $badgeClass = null,
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-menu-item :title="$title" :link="$link" 
                active-icon="dot" active-icon-class="h-8 w-8 lg:h-6 lg:w-6 absolute -left-3 lg:-left-2"
                :badge="$badge" :badge-class="$badgeClass" />
        BLADE;
    }
}
