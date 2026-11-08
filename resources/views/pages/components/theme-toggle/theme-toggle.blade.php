<div class="doc">
    <x-heading title="ThemeToggle" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/docs/themes/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/theme-toggle/theme-toggle.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\ThemeToggle::class" />

    <c-alert icon="badge-info" class="alert-info">
        It is not expected to have more than one x-theme-toggle on the same page. Make sure to refresh the page while
        toying around with the theme toggle.
    </c-alert>

    {{-- Setup --}}
    <x-heading title="Setup"
        subtitle="Make sure you have set up daisyUI correctly. You need to have at least two themes defined and add dark theme support." />
    <x-code-only language="css">
        @verbatim
            /* Tailwind */
            @import 'tailwindcss';

            /* daisyUI */
            @plugin "daisyui" {
            themes: light --default, dark --prefersdark;
            }

            /* Dark theme variant support */
            @custom-variant dark (&:where(.dark, .dark *));
            /* and / or */
            @custom-variant dark (&:where([data-theme=dark] *));
        @endverbatim
    </x-code-only>

    {{-- Examples --}}
    <x-heading title="Examples" />
    <x-code language="blade" render-class="flex flex-wrap gap-4">
        @verbatim
            <c-theme-toggle />
            <c-theme-toggle class="btn btn-circle" />
            <c-theme-toggle class="btn btn-circle btn-ghost" />
            <c-theme-toggle class="btn" />
        @endverbatim
    </x-code>

    {{-- Toggle by event --}}
    <x-heading title="Toggle by event">
        <c-slot:subtitle>
            You can toggle theme from anywhere by dispatching a
            <p class="inline text-xs"> <code>bellis-toggle-theme</code></p>
            event. This still requires to have a (hidden) theme toggle instance on your page.
        </c-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="flex flex-wrap gap-4">
        @verbatim
            <c-theme-toggle class="hidden" />
            <c-button label="Theme" icon="swatch-book" x-on:click="$dispatch('bellis-toggle-theme')" />
        @endverbatim
    </x-code>

    {{-- Custom themes --}}
    <x-heading title="Custom themes">
        <c-slot:subtitle>
            By default, this component uses the standard "light" and "dark" themes shipped with daisyUI. But, you can
            customize them by passing the theme names.
            First, you need to set this additional themes at
            <p class="inline text-xs"><code>app.css</code></p>
            as described on
            <a href="https://daisyui.com/docs/themes" target="_blank" class="link">daisyUI docs</a>.
            You can pass the names of the themes to the component to toggle between them.
        </c-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="flex flex-wrap gap-4">
        @verbatim
            <c-theme-toggle darkTheme="night" lightTheme="nord" />
        @endverbatim
    </x-code>
</div>
