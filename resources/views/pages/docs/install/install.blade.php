<div class="flex flex-col space-y-6">
    <c-header title="Installation" icon="hash" icon-class="text-secondary" level="h1" with-anchor />

    <p>
        This package <strong>does not ship any custom CSS</strong> and relies on <strong>daisyUI and Tailwind</strong>
        for out-of-box styling.
        You can customize most of the components' styles, by inline overriding daisyUI and Tailwind CSS classes.
    </p>

    <c-alert icon="lightbulb">
        Please, for further styles reference see <a href="https://daisyui.com" target="_blank">daisyUI</a> and <a
            href="https://tailwindcss.com" target="_blank">Tailwind</a>.
    </c-alert>

    <c-header title="Bootcamp" size="text-xl" class="mt-14 mb-5!" icon="hash" icon-class="text-secondary"
        with-anchor />

    <p>
        If you prefer a walkthrough guide, go to bellis-ui <a href="/bootcamp/01">Bootcamp</a> and get amazed how much
        you can do with minimal effort.
    </p>

    <c-header title="Automatic install" size="text-xl" class="mt-14 mb-5!" icon="hash" icon-class="text-secondary"
        with-anchor />

    <p>
        After installing make sure to check the <a href="/docs/layout" wire:navigate>Layout</a>
        and <a href="/docs/layout" wire:navigate>Sidebar</a> docs.
    </p>

    <x-code language="shellscript">
        @verbatim
            composer require reafeichtinger/bellis-ui

            php artisan bellis:install
        @endverbatim
    </x-code>

    <p>
        Then, start the dev server.
    </p>

    <x-code language="shellscript">
        npm run dev
    </x-code>

    <p>
        <c-icon name="zap" class="text-warning" />
        <strong>You are done!</strong>
    </p>

    <c-header title="Renaming components" size="text-xl" class="mt-14" icon="hash" icon-class="text-secondary"
        with-anchor />
    <p>
        If for some reason you need to rename bellis-ui components using a custom prefix, publish the config file.
    </p>

    <x-code language="shellscript">
        php artisan vendor:publish --tag bellis.config
    </x-code>

    {{-- @formatter:off --}}
    <x-code language="php">
        @verbatim
            return [
            /**
            * Default is empty.
            * 'prefix' => ''
            * <c-button />
            * <c-card />
            *
            * Renaming all components:
            * 'prefix' => 'mary-'
            * <c-button />
            * <c-card />
            */
            'prefix' => ''
            ];
        @endverbatim
    </x-code>

    Make sure to clear view cache after renaming.

    <x-code language="shellscript">
        php artisan view:clear
    </x-code>

    <c-header title="Starter kits" size="text-xl" class="mt-14" icon="hash" icon-class="text-secondary"
        with-anchor />

    <c-alert icon="lightbulb">
        If you are facing some UI glitches, try to remove <code>@tailwindcss/forms</code> plugin.
    </c-alert>

    <p>
        For existing projects that uses <strong>starter kits</strong> (Breeze, Jetstream and FluxUI), the installer will
        publish <code>config/mary.php</code>
        with a global prefix on bellis-ui components to avoid name collision.
    </p>

    <p>
        So, you need to use components like this: <code>x-mary-button</code> , <code>x-mary-card</code>
        <code>x-mary-icon</code> ...
    </p>

    <p>
        The bellis-ui components provides a great DX that probably you may want to use its components instead.
    </p>

    <p>
        <strong>Breeze</strong>
    </p>
    <x-code>
        @verbatim
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        @endverbatim
    </x-code>

    <p>
        <strong>Jetstream</strong>
    </p>
    <x-code>
        @verbatim
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>
        @endverbatim
    </x-code>

    <p class="aura aura-rainbow">
        <button class="btn btn-ghost bg-base-100 btn-sm text-base px-0.5 py-0 text-base-content"
            disabled>bellis-ui</button>
    </p>
    <x-code>
        @verbatim
            <c-input :label="__('Name')" wire:model="name" />
        @endverbatim
    </x-code>
    <p>
        <strong>Still not convinced?</strong>
    </p>
    <p>
        Go to the <a href="/bootcamp/01">Bootcamp</a> and get amazed how much you can do with minimal effort,
        from the ground with no starter kits.
    </p>
</div>
