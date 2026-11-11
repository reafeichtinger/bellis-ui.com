<div class="doc">
    <x-heading title="Pin" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/input/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/pin/pin.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Pin::class" />

    {{-- Default --}}
    <x-heading title="Default" />
    <x-code language="blade">
        @verbatim
            <c-pin wire:model="value" />
        @endverbatim
    </x-code>

    {{-- Digits --}}
    <x-heading title="Digits" subtitle="You can freely define the length." />
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            <c-pin wire:model="value" digits="1" class="input-xl" />
            <c-pin wire:model="value" digits="2" class="input-lg" />
            <c-pin wire:model="value" digits="3" />
            <c-pin wire:model="value" digits="4" />
            <c-pin wire:model="value" digits="5" />
            <c-pin wire:model="value" digits="6" />
            <c-pin wire:model="value" digits="7" class="input-sm" />
            <c-pin wire:model="value" digits="8" class="input-xs" />
        @endverbatim
    </x-code>

    {{-- Numeric --}}
    <x-heading title="Numeric">
        <x-slot:subtitle>
            The
            <p class="inline text-xs"><code>numeric</code></p>
            property modifies the behavior to accept only numbers.
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            {{-- NOTE: `numeric` --}}
            <c-pin wire:model="value" digits="4" numeric />
        @endverbatim
    </x-code>

    {{-- Hidden --}}
    <x-heading title="Hidden">
        <x-slot:subtitle>
            You can use any compatible
            <p class="inline text-xs"><code>text-secure</code></p>
            HTML symbol:
            <p class="inline text-xs"><code>disc</code></p> (default),
            <p class="inline text-xs"><code>circle</code></p>,
            <p class="inline text-xs"><code>square</code></p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            {{-- NOTE: `hidden` --}}
            <c-pin wire:model="value" digits="4" hidden />

            {{-- NOTE: `hidden-symbol` --}}
            <c-pin wire:model="value" digits="4" hidden hidden-symbol="circle" />
            <c-pin wire:model="value" digits="4" hidden hidden-symbol="square" />
        @endverbatim
    </x-code>

    {{-- Gap --}}
    <x-heading title="Gap">
        <x-slot:subtitle>
            You can add spacing and customize it by using the
            <p class="inline text-xs"><code>gap</code></p>
            flag in combination with
            <p class="inline text-xs"><code>gap-class</code></p>.
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            {{-- NOTE: `gap-class` --}}
            <c-pin wire:model="value" gap gap-class="gap-1" />

            {{-- NOTE: `gap` default is `gap-3` --}}
            <c-pin wire:model="value" gap />

            {{-- NOTE: `gap-class` --}}
            <c-pin wire:model="value" gap gap-class="gap-6" />
        @endverbatim
    </x-code>

    {{-- Events --}}
    <x-heading title="Events">
        <x-slot:subtitle>
            When the pin if fully filled the
            <p class="inline text-xs"><code>pin-complete</code></p>
            event is dispatched. </br>
            When the pin is NOT fully filled the
            <p class="inline text-xs"><code>pin-incomplete</code></p>
            event is dispatched. </br>
            The dispatched events always include the
            <p class="inline text-xs"><code>value</code></p>
            and the
            <p class="inline text-xs"><code>field</code></p>.
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="grid gap-4">
        @verbatim
            <c-pin wire:model="events" />
        @endverbatim
    </x-code>
</div>
