<div class="flex flex-col space-y-6">
    <x-heading title="Installation" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/install/install.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <c-alert icon="triangle-alert" class="alert-warning">
        It is recommended to install this only on fresh or small projects. Compatability with starter kits or other
        component libraries is not guaranteed.
    </c-alert>

    <p>
        In order to start the installation process of bellisUI you need a compatible project. Make sure your project
        matches these requirements:
    </p>

    <ul class="list-disc ms-6">
        <li>Laravel 12+</li>
        <li>Livewire 4.4+</li>
        <li>TailwindCSS 4.3+</li>
        <li>DaisyUI 5+</li>
    </ul>

    <p>
        In order to create a new, compatible project follow the installation guide of the resepective technologies. The
        laravel installer should be able to easily create a project with livewire and tailwindcss set up correctly.
    </p>

    <div class="flex flex-wrap gap-5 justify-evenly items-center mt-5 mb-10">
        <a href="https://laravel.com/framework/docs/installation" class="tooltip" data-tip="Laravel">
            <img src="/svg/laravel.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
        </a>
        <a href="https://livewire.laravel.com/docs/4.x/installation" class="tooltip" data-tip="Livewire">
            <img src="/svg/livewire.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
        </a>
        <a href="https://daisyui.com/docs/install/" class="tooltip" data-tip="DaisyUI">
            <img src="/svg/daisyui.svg" class="object-contain w-10 h-10 sm:w-14 sm:h-14" />
        </a>
    </div>

    <p>
        Once you made sure your proejct is working, you can run the following command to install the bellisUI composer
        package.
    </p>

    <x-code-only language="shellscript">
        @verbatim
            composer require reafeichtinger/bellis-ui
        @endverbatim
    </x-code-only>

    <p>
        Then you can run the automatic installer to complete the setup.
    </p>

    <x-code-only language="shellscript">
        @verbatim
            php artisan bellis:install
        @endverbatim
    </x-code-only>

    <p>
        Then, start the dev server.
    </p>

    <x-code-only language="shellscript">
        composer run dev
    </x-code-only>

    <p>
        <c-icon name="zap" class="text-warning" />
        <strong>You are done!</strong>
    </p>

</div>
