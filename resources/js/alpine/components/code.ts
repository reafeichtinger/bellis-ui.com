interface CodeData {
    copy: (target?: HTMLElement) => Promise<void>;
}

export default function code($el: HTMLElement): CodeData {
    return {
        async copy(target?: HTMLElement) {
            // If target is provided, use it; otherwise, use the next element
            const el = target ?? $el.nextElementSibling as HTMLElement;
            
            if (!el) {
                console.warn('Code: Target element not found.');
                return;
            }

            try {
                const clipboardItem = new ClipboardItem({
                    'text/plain': new Blob([el.innerText ?? ''], { type: 'text/plain' }),
                    'text/html': new Blob([el.innerHTML ?? ''], { type: 'text/html' })
                });

                await navigator.clipboard.write([clipboardItem]);

                const originalTip = $el.dataset.tip;
                $el.dataset.tip = 'Copied!';
                
                setTimeout(() => {
                    $el.dataset.tip = originalTip || 'Copy';
                }, 2000);
            } catch (err) {
                console.error('Failed to copy: ', err);
            }
        },
    };
}
