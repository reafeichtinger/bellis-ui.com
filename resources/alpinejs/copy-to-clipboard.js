document.addEventListener('alpine:init', () => {
    // Tab navigation container
    Alpine.data('copyToClipboard', () => ({
        async copy(target = null) {
            let text = (target ?? this.$el.nextElementSibling).innerText ?? '';
            let html = (target ?? this.$el.nextElementSibling).innerHtml ?? '';

            const clipboardItem = new ClipboardItem({
                'text/plain': new Blob([text], { type: 'text/plain' }),
                'text/html': new Blob([html], { type: 'text/html' })
            });

            // Write the ClipboardItem to the clipboard
            await navigator.clipboard.write([clipboardItem]);

            this.$el.dataset.tip = 'Copied!';
            setTimeout(() => this.$el.dataset.tip = 'Copy', 2000);
        },
    }));
});