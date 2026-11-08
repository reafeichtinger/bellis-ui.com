import '@fontsource-variable/outfit';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import { registerLazyAlpineComponents } from './alpine/loader';

registerLazyAlpineComponents(Alpine);

import docsearch from '@docsearch/js/docsearch';
window.docsearch = docsearch;

Livewire.start();