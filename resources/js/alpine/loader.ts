import type { Alpine } from '../../../vendor/livewire/livewire/dist/livewire.esm';

type AlpineComponent = {
    default: () => Record<string, any>;
};

const components = import.meta.glob<AlpineComponent>('./components/*.ts');

export function registerLazyAlpineComponents(Alpine: Alpine) {
    for (const [path, loader] of Object.entries(components)) {
        const name = path.split('/').pop()!.replace('.ts', '');

        Alpine.data(name, () => ({
            _lazyReady: false,

            async init() {
                const module = await loader();
                const data = module.default();

                const componentInit = data.init;

                Object.assign(this, data);

                this._lazyReady = true;

                if (typeof componentInit === 'function') {
                    await componentInit.call(this);
                }
            },
        }));
    }
}