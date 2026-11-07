<div class="doc">
    <x-heading title="Modal" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/modal/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/modal/modal.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Modal::class" />

    {{-- Open via JS --}}
    <x-heading title="Open via JS">
        <x-slot:subtitle>
            You can open the modal by calling the <p class="inline text-xs"><code>showModal()</code></p> method on
            the modal.
            <p>
                You can provide the id in any case, it will automatically get converted to
                <code class="text-xs">snake_case</code>.
                E.g:
            </p>
            <ul class="block list-disc ms-6 mt-4">
                <li>example_one <c-icon name="line-dot-right-horizontal" /> <strong>example_one</strong></li>
                <li>example-one <c-icon name="line-dot-right-horizontal" /> <strong>example_one</strong></li>
                <li>exampleOne <c-icon name="line-dot-right-horizontal" /> <strong>example_one</strong></li>
                <li>exampleone <c-icon name="line-dot-right-horizontal" /> <strong>exampleone</strong></li>
            </ul>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <c-button label="Open" x-on:click="example_one.showModal()" />

            <c-modal name="example-one" title="Opened via JavaScript" subtitle="Press `ESC` or click outside to close." />
        @endverbatim
    </x-code>

    {{-- Open via event --}}
    <x-heading title="Open via event">
        <x-slot:subtitle>
            You can also open the modal by dispatching an event. The event is also dependent on the id you provided. The
            event will always use the
            <code class="text-xs">kebab-case</code>
            version of the id.
            <p>
                You can provide the id in any case, it will automatically get converted to
                <code class="text-xs">kebab-case</code>.
                E.g:
            </p>
            <ul class="block list-disc ms-6 mt-4">
                <li>example_one <c-icon name="line-dot-right-horizontal" /> <strong>example-one</strong></li>
                <li>example-one <c-icon name="line-dot-right-horizontal" /> <strong>example-one</strong></li>
                <li>exampleOne <c-icon name="line-dot-right-horizontal" /> <strong>example-one</strong></li>
                <li>exampleone <c-icon name="line-dot-right-horizontal" /> <strong>exampleone</strong></li>
            </ul>
            <p class="mt-4">
                The available event actions are
                <code class="text-xs">show</code>,
                <code class="text-xs">close</code> and
                <code class="text-xs">toggle</code>.
                Events should be emitted following this pattern: </br>
                <code class="text-xs">${action}-${id}</code>
            </p>
            <ul class="block list-disc ms-6 mt-4">
                <li>Show example_one
                    <c-icon name="line-dot-right-horizontal" />
                    <code class="text-xs">$dispatch('show-example-one')</code>
                </li>
                <li>Close example-one
                    <c-icon name="line-dot-right-horizontal" />
                    <code class="text-xs">$dispatch('close-example-one')</code>
                </li>
                <li>Toggle exampleOne
                    <c-icon name="line-dot-right-horizontal" />
                    <code class="text-xs">$dispatch('toggle-example-one')</code>
                </li>
            </ul>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <c-button label="Show" x-on:click="$dispatch('show-example-two')" />
            <c-button label="Toggle" x-on:click="$dispatch('toggle-example-two')" />
            <c-button label="Show via Livewire" wire:click="showExampleTwo" />

            <c-modal name="example-two" title="Opened via event" subtitle="Press `ESC` or click outside to close." />
        @endverbatim
    </x-code>

    {{-- Closing the modal --}}
    <x-heading title="Closing the modal / actions slot">
        <x-slot:subtitle>
            You can close the modal in three different ways.
            <ul class="block list-disc ms-6 mt-4">
                <li>Via form by adding a button of <code class="text-xs">type="submit"</code>.</li>
                <li>Via JS by calling the <code class="text-xs">close()</code>method.</li>
                <li>
                    Via Livewire by dispatching the
                    <code class="text-xs">close-example-three</code> or
                    <code class="text-xs">toggle-example-three</code>
                    event.
                </li>
            </ul>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <c-button label="Show" x-on:click="$dispatch('show-example-three')" />

            <c-modal name="example-three" title="Hey" subtitle="Press `ESC`, click outside or click `Close` to hide.">
                <c-slot:actions class="flex flex-col sm:flex-row">
                    {{-- NOTE: Button with type `submit` --}}
                    <c-button type="submit" label="Close via form" />

                    {{-- NOTE: close() --}}
                    <c-button x-on:click="close()" label="Close via JS" />

                    {{-- NOTE: Livewire calls `$this->dispatch('close-example-three');` --}}
                    <c-button wire:click="closeExampleThree" label="Close via Livewire" />
                </c-slot:actions>
            </c-modal>
        @endverbatim
    </x-code>

    {{-- Listening to modal visibility changes in Livewire --}}
    <x-heading title="Listening to modal visibility changes in Livewire">
        <x-slot:subtitle>
            <p>
                Sometimes you want livewire to be aware of the state of the modal. For this you can subscribe to the
                event listeners using
                <code class="text-xs">#[On]</code> attribute. E.g
                <code class="text-xs">#[On('show-example-four')]</code>.
                This also allows you to send custom data to livewire.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <c-button label="Show"
                x-on:click="$dispatch('show-example-four', { value: 'This string was sent via an event' })" />

            <c-modal name="example-four" title="Hey" subtitle="Press `ESC`, click outside or click `Close` to hide."
                wire:model.live="exampleFour">
                {{ $this->exampleFour }}
            </c-modal>

            <p class="mt-2">{{ $this->exampleFour }}</p>
        @endverbatim
    </x-code>
    <p>In livewire component:</p>
    <x-code-only language="php">
        @verbatim
            #[On('show-example-four')]
            public function onShowExampleFour(?string $value = null): void
            {
            $this->exampleFour = $value;
            }

            #[On('close-example-four')]
            public function oncloseExampleFour(): void
            {
            $this->reset('exampleFour');
            }
        @endverbatim
    </x-code-only>

    {{-- Persist --}}
    <x-heading title="Persist" />
    <x-code language="blade">
        @verbatim
            <c-button label="Persist" x-on:click="$dispatch('show-example-persist')" />
            <c-modal name="example-persist" title="Persist"
                subtitle="Press `ESC` to close. Clicking outside the modal will NOT close it." persist>
                <c-slot:top class="relative">
                    <div class="absolute top-2 right-2">
                        <c-button class="btn-sm btn btn-circle btn-ghost" icon="x" x-on:click="close()" />
                    </div>
                </c-slot:top>
            </c-modal>
        @endverbatim
    </x-code>

    {{-- Customise width, background and alignment --}}
    <x-heading title="Customise width, background and alignment" />
    <x-code language="blade" render-class="flex flex-wrap gap-2">
        @verbatim
            {{-- NOTE: Custom width --}}
            <c-button label="Custom width" x-on:click="$dispatch('show-example-five')" />
            <c-modal name="example-five" title="Custom width" subtitle="Press `ESC` or click outside to close."
                class="max-w-5xl" />

            {{-- NOTE: Backdrop blur --}}
            <c-button label="Backdrop blur" x-on:click="$dispatch('show-example-six')" />
            <c-modal name="example-six" title="Backdrop blur" subtitle="Press `ESC` or click outside to close."
                container-class="transition-all backdrop-blur-xs" />

            {{-- NOTE: Align end --}}
            <c-button label="Align end" x-on:click="$dispatch('show-example-seven')" />
            <c-modal name="example-seven" title="Align end" subtitle="Press `ESC` or click the button to close."
                container-class="modal-end">
                <c-button class="mt-6 btn-sm" icon="x" label="Close" x-on:click="close()" />
            </c-modal>

            {{-- NOTE: Align start --}}
            <c-button label="Align start" x-on:click="$dispatch('show-example-eigth')" />
            <c-modal name="example-eigth" title="Align start" subtitle="Press `ESC` or click the button to close."
                container-class="modal-start">
                <c-button class="mt-6 btn-sm" icon="x" label="Close" x-on:click="close()" />
            </c-modal>

            {{-- NOTE: Responsive --}}
            <c-button label="Responsive" x-on:click="$dispatch('show-example-nine')" />
            <c-modal name="example-nine" title="Responsive" subtitle="Try changing your browser width."
                container-class="modal-bottom lg:modal-middle" />
        @endverbatim
    </x-code>

    {{-- Customise style --}}
    <x-heading title="Customise style" />
    <x-code language="blade">
        @verbatim
            <c-button label="Custom style" x-on:click="$dispatch('show-example-ten')" />
            <c-modal name="example-ten" title="Title" title-class="text-2xl font-extrabold text-secondary"
                subtitle="Subtitle" subtitle-class="text-sm underline text-secondary" divider
                class="bg-neutral text-neutral-content rounded-none border-(length:--border) border-primary">
            </c-modal>
        @endverbatim
    </x-code>

    {{-- Custom actions style --}}
    <x-heading title="Custom actions style" />
    <x-code language="blade">
        @verbatim
            <c-button label="Custom actions style" x-on:click="$dispatch('show-example-twelve')" />
            <c-modal name="example-twelve" title="Hey"
                subtitle="Press `ESC`, click outside or click `Close` to hide.">
                <c-slot:actions
                    class="bg-gray-100 dark:bg-neutral-950 border-t-(length:--border) border-base-content/15 -mx-6 -mb-6 px-4 py-2">
                    <c-button x-on:click="close()" label="Close" />
                </c-slot:actions>
            </c-modal>
        @endverbatim
    </x-code>

    {{-- Slots --}}
    <x-heading title="Slots" />
    <x-code language="blade">
        @verbatim
            <c-button label="Slots" x-on:click="$dispatch('show-example-eleven')" />
            <c-modal name="example-eleven">
                {{-- NOTE: `top` slot --}}
                <c-slot:top class="relative">
                    <div class="absolute right-2 top-2">
                        <c-button icon="x" class="btn-sm btn-ghost btn-circle" x-on:click="close()" />
                    </div>
                </c-slot:top>

                {{-- NOTE: `title` slot --}}
                <c-slot:title>
                    <c-header level="h5">
                        <c-slot:title>
                            Custom heading <strong>HTML</strong>
                        </c-slot:title>
                        <c-slot:subtitle>
                            Custom subtitle <strong>HTML</strong>.
                        </c-slot:subtitle>
                    </c-header>
                </c-slot:title>

                {{-- NOTE: $slot --}}
                <div class="mt-6 text-secondary">
                    This is the default slot.
                </div>

                {{-- NOTE: `actions` slot --}}
                <c-slot:actions>
                    <c-button x-on:click="close()" label="Close" />
                    <c-button label="Accept" class="btn-primary" wire:click="acceptExampleElevent" spinner />
                </c-slot:actions>
            </c-modal>
        @endverbatim
    </x-code>
</div>
