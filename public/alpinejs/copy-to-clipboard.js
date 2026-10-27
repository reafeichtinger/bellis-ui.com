// A function that contains your logic
const registerCopyComponent = () => {
    // Prevent double registration if the script runs multiple times
    if (window.Alpine && Alpine.data('copyToClipboard')) return;

    Alpine.data('copyToClipboard', () => ({
        async copy(target = null) {
            const el = target ?? this.$el.nextElementSibling;
            const text = el.innerText ?? '';
            const html = el.innerHTML ?? '';

            try {
                const clipboardItem = new ClipboardItem({
                    'text/plain': new Blob([text], { type: 'text/plain' }),
                    'text/html': new Blob([html], { type: 'text/html' })
                });
                await navigator.clipboard.write([clipboardItem]);
                this.$el.dataset.tip = 'Copied!';
                setTimeout(() => this.$el.dataset.tip = 'Copy', 2000);
            } catch (err) {
                console.error(err);
            }
        },
    }));
};

// The Logic: 
// If Alpine is already loaded (common during wire:navigate), run immediately.
// Otherwise, wait for the init event.
if (window.Alpine) {
    registerCopyComponent();
} else {
    document.addEventListener('alpine:init', registerCopyComponent);
}
