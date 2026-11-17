<div class="doc">
    <x-heading title="Toast" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/dropdown/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/toast/toast.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Toast::class" />

    <c-alert icon="triangle-exclamation-point" class="alert-warning">
        Expect this component to have breaking changes soon...
    </c-alert>

    <x-heading title="Usage">
        <x-slot:subtitle>
            Place a single
            <p class="inline text-xs"><code>{{ '<c' . '-toast />' }}</code></p>
            anywhere in your layout.
        </x-slot:subtitle>
    </x-heading>

    <x-code-only language="blade">
        {{-- blade-formatter-disable --}}
        @verbatim
            <body>
                ...
                <c-toast />
            </body>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code-only>

    <p class="text-sm text-base-content/65 mt-1">
        Import the
        <code class="text-xs">Toast</code>
        trait and call the
        <code class="text-xs">$this->toast(...)</code>
        method or any of the shortcuts.
    </p>

    <x-code-only language="php">
        {{-- blade-formatter-disable --}}
        @verbatim
            use Bellis\Traits\Toast; // Import the trait

            class SomeLivewireComponent extends Component
            {
                // Use the trait 
                use Toast;
            
                public function save()
                {                
                    // Show a manual Toast
                    $this->toast(
                        title: 'It is done!',
                        type: 'success',                    // optional (daisyUI colors like 'success')
                        description: null,                  // optional (text)
                        position: 'toast-top toast-end',    // optional (daisyUI classes)
                        icon: 'o-information-circle',       // optional (any icon)
                        css: 'alert-info',                  // optional (daisyUI classes)
                        timeout: 3000,                      // optional (int in ms)
                        redirectTo: null                    // optional (uri)
                    );
                
                    // Show specific Toasts
                    $this->success('Yay!');
                    $this->error('Oh snap!');
                    $this->warning('Whoops!');
                    $this->info('Hey!');
                }
            }
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code-only>

    <p class="text-sm text-base-content/65 mt-1">
        This component flashes the toast data in session. This can help make testing easier.
    </p>

    <x-code-only language="php">
        {{-- blade-formatter-disable --}}
        @verbatim
            session()->flash('bellis.toast', $toast);
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code-only>

    {{-- Example --}}
    <x-heading title="Example" />
    <x-code language="blade" render-class="flex flex-wrap gap-4">
        {{-- blade-formatter-disable --}}
        @verbatim
            {{--
                public function default(): void
                {
                    $this->success('We are done, check it out');
                }
        
                public function quick(): void
                {
                    $this->error(
                        'It will last just 1 second ...',
                        timeout: 1000,
                        position: 'toast-bottom toast-start'
                    );
                }
        
                public function withRedirect(): void
                {
                    $this->warning(
                        'It is working with redirect',
                        'You were redirected to another url ...',
                        redirectTo: '/components/form'
                    );
                }
        
                public function progress(): void
                {
                    $this->info(
                        'Custom progress class',
                        progressClass: 'progress-error'
                    );
                }
            --}}
            <c-button label="Default" class="btn-success" wire:click="default" spinner />
            <c-button label="Quick" class="btn-error" wire:click="quick" spinner />
            <c-button label="Save and redirect" class="btn-warning" wire:click="withRedirect" spinner />
            <c-button label="Custom Progress" class="btn-info" wire:click="progress" spinner />
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>

    {{-- Position --}}
    <x-heading title="Position"
        subtitle='The default position is "toast-top toast-end". You can change it by providing the "position" parameter to the <c-toast /> component.' />
    <x-code-only language="blade">
        {{-- blade-formatter-disable --}}
        @verbatim
            <body>
               ...
               <x-toast position="toast-top toast-center" />
            </body>
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code-only>

    {{-- HTML content & style --}}
    <x-heading title="HTML content & style"
        subtitle="You can use any daisyUI/Tailwind classes. It also supports HTML." />
    <x-code language="blade" render-class="flex flex-wrap gap-4">
        {{-- blade-formatter-disable --}}
        @verbatim
            {{--
                public function customStyle()
                {
                    $this->toast(
                        title: 'Wishlist <u>updated</u>!',
                        type: 'custom',
                        description: 'You will <strong>love it 😍</strong>',
                        position: 'toast-top toast-end',
                        icon: 'heart',
                        css: 'bg-pink-500 text-base-100',
                        progressClass: '-mt-4 text-pink-300',
                    );
                }
             --}}
            <c-button label="Like" wire:click="customStyle" icon="heart" spinner />
        @endverbatim
        {{-- blade-formatter-enable --}}
    </x-code>
</div>
