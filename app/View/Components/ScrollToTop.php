<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ScrollToTop extends Component
{
    public function __construct(
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
            <c-fab icon="chevron-up" class="btn-md opacity-0 scale-0 transition-all scroll-to-top" container-class="bottom-20 lg:bottom-4"
                x-data="{
                    init() {
                        const fabs = document.getElementsByClassName('scroll-to-top');
                        window.addEventListener('scroll', () => {
                            let y = window.scrollY;
                            for (let i = 0; i < fabs.length; i++) {
                                if (y >= 640) {
                                    fabs[i].classList.remove('pointer-events-none', 'opacity-0', 'scale-0');
                                    fabs[i].classList.add('pointer-events-auto', 'opacity-100', 'scale-100');
                                } else {
                                    fabs[i].classList.remove('pointer-events-auto', 'opacity-100', 'scale-100');
                                    fabs[i].classList.add('pointer-events-none', 'opacity-0', 'scale-0');
                                }
                            }
                        });
                    },
                    scrollToTop() {
                        document.querySelector('body')?.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start',
                            inline: 'nearest'
                        });
                    },
                }" 
                x-on:click="scrollToTop" />
        BLADE;
    }
}
