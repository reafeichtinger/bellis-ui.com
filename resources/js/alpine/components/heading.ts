export default () => ({
    async link($el: HTMLElement) {
        const href = $el.querySelector('a')?.href as string | null;

        if (!href) {
            console.warn('Heading: Link not found.');
            return;
        }

        try {
            const clipboardItem = new ClipboardItem({
                'text/plain': new Blob([href], { type: 'text/plain' }),
                'text/html': new Blob([href], { type: 'text/html' })
            });

            await navigator.clipboard.write([clipboardItem]);

            $el.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
                inline: 'nearest'
            });

            history.pushState(null, '', href);
            console.log($el);
            const button = $el.querySelector('button');

            if (button) {
                const originalTip = button?.dataset.tip;
                button.dataset.tip = 'Copied!';

                setTimeout(() => {
                    button.dataset.tip = originalTip || 'Copy';
                }, 2000);
            }
        } catch (err) {
            console.error('Failed to copy: ', err);
        }
    },
});