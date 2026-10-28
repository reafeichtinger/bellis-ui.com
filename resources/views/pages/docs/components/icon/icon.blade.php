<div class="doc">
    <c-header title="Icon" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/icon/icon.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Icon::class" />

    {{-- General --}}
    <c-header title="General" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex gap-4 p-8">
        @verbatim
            <c-icon name="mail" />
            <c-icon name="user" />
            <c-icon name="zap" />
        @endverbatim
    </x-code>

    {{-- Icon sets --}}
    <c-header title="Icon sets" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <c-alert icon="badge-info" class="alert-info">
        The default iconset is
        <a href="https://lucide.dev/icons/" target="_blank" class="link">Lucide</a>.
        You can change the default iconset by checking the "Icons" section in the <a href="/docs/config#Icons"
            wire:navigate class="link">Config</a> docs.
    </c-alert>
    <p>
        Lucide icons work out of the box.
        You can install any additional iconsets from the
        <a href="https://blade-ui-kit.com/blade-icons" target="_blank" class="link">BladeUI-Kit</a>
        and easily use them via the respective prefix.
    </p>
    <x-code language="shellscript">
        @verbatim
            composer require owenvoke/blade-fontawesome
        @endverbatim
    </x-code>
    <x-code language="blade" render-content render-class="flex gap-4 p-8">
        @verbatim
            <c-icon name="fas.cloud" />
            <c-icon name="far.circle-play" />
            <c-icon name="fab.facebook" />
        @endverbatim
    </x-code>

    {{-- Label & styling --}}
    <c-header title="Label & Styling" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <p>The default icon size is <code>w-5 h-5</code>.</p>
    <x-code language="blade" render-content render-class="flex flex-col gap-4 p-8">
        @verbatim
            <c-icon name="mail" label="Messages" />
            <c-icon name="mail" class="w-9 h-9 text-success text-2xl" label="Messages" />
            {{-- class is applied to both, label-class only to label --}}
            <c-icon name="mail" class="text-info underline" label="Messages" label-class="-order-1 ms-4" />
        @endverbatim
    </x-code>

    {{-- Caching --}}
    <c-header title="Caching" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <p>As advised by Laravel documentation it is a good practice to cache your icons in production environments.</p>
    <x-code language="shellscript">
        @verbatim
            php artisan icons:cache

        @endverbatim
    </x-code>
</div>
