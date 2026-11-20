<div class="doc">
    <x-heading title="Drawer" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/modal/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/drawer/drawer.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <c-alert icon="badge-info" class="alert-info">
        There is no dedicated Drawer component. Instead you can use the
        <a href="/components/modal" wire:navigate class="link">Modal</a>
        or
        <a href="/components/sidebar" wire:navigate class="link">Sidebar</a>
        components to achieve drawer style layouts
    </c-alert>


    {{-- Using modal --}}
    <x-heading title="Using modal" />
    <x-code language="blade" render-class="flex flex-wrap gap-2">
        @verbatim
            {{-- NOTE: Align start --}}
            <c-button label="Align start" x-on:click="$dispatch('show-modal-start')" />
            <c-modal name="modal-start" title="Align start"
                subtitle="Press `ESC`, click outside or click the button to close." container-class="modal-start"
                class="max-w-11/12 lg:w-1/3">
                <c-button class="mt-6 btn-sm" icon="x" label="Close" x-on:click="close()" />
            </c-modal>

            {{-- NOTE: Align end --}}
            <c-button label="Align end" x-on:click="$dispatch('show-modal-end')" />
            <c-modal name="modal-end" title="Align end" subtitle="Press `ESC` or click the button to close."
                container-class="modal-end" class="max-w-11/12 lg:w-1/3">
                <c-button class="mt-6 btn-sm" icon="x" label="Close" x-on:click="close()" />
            </c-modal>
        @endverbatim
    </x-code>
</div>
