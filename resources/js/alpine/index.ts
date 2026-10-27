import code from './components/code.ts';

export const registerAlpineComponents = (alpine: any) => {
    // Register all your components here
    alpine.data('code', code);
};

// Smart loader with wire:navigate support
const init = () => {
    if (window.Alpine) {
        registerAlpineComponents(window.Alpine);
    } else {
        document.addEventListener('alpine:init', () => {
            registerAlpineComponents(window.Alpine);
        });
    }
};

init();
