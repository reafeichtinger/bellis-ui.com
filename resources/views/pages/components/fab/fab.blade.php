<div class="doc">
    <x-heading title="FAB / Speed Dial" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/fab/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/fab/fab.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Fab::class" />

    <x-heading title="FAB Item" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\FabItem::class" />

    <c-alert icon="badge-info" title="" class="alert-info">
        The examples use <p class="inline text-xs"><code>container-class="absolute z-1"</code></p>. This is
        not required but looks nicer on this page.
    </c-alert>

    <c-divider class="pt-8" label="Simple FAB" />

    {{-- A single FAB (Floating Action Button) --}}
    <x-heading title="A single FAB (Floating Action Button)"
        subtitle="If you only want a simple button in the corner of page." />
    <x-code language="blade" render-class="relative min-h-16">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-primary" />
        @endverbatim
    </x-code>

    {{-- With icon --}}
    <x-heading title="With icon" level="h3" subtitle="Content can be an icon too." />
    <x-code language="blade" render-class="relative min-h-16">
        @verbatim
            <c-fab icon="mouse-pointer-click" container-class="absolute z-1" class="btn-secondary" />
        @endverbatim
    </x-code>

    {{-- With default spinner --}}
    <x-heading title="With default spinner" level="h3" subtitle="FAB can have a loading state too." />
    <x-code language="blade" render-class="relative min-h-16">
        @verbatim
            <c-fab label="S" container-class="absolute z-1" spinner wire:click="sleep(2)" />
        @endverbatim
    </x-code>

    {{-- Extended --}}
    <x-heading title="Extended" level="h3" subtitle="You can also have an exdended version." />
    <x-code language="blade" render-class="relative min-h-16">
        @verbatim
            <c-fab label="Add item" container-class="absolute z-1" class="btn-primary rounded-full" no-circle />
        @endverbatim
    </x-code>

    {{-- Extended with icon & spinner --}}
    <x-heading title="Extended with icon & spinner" level="h3"
        subtitle="The exdended version also has a loading state." />
    <x-code language="blade" render-class="relative min-h-16">
        @verbatim
            <c-fab icon="plus" label="Add item" container-class="absolute z-1" class="rounded-full" no-circle spinner
                wire:click="sleep(2)" />
        @endverbatim
    </x-code>

    {{-- Sizes --}}
    <x-heading title="Sizes" level="h3" subtitle="You can change the size of the FAB." />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="XS" container-class="absolute z-1 bottom-52" class="btn-xs" />
            <c-fab label="SM" container-class="absolute z-1 bottom-42" class="btn-sm" />
            <c-fab label="MD" container-class="absolute z-1 bottom-30" class="btn-md" />
            <c-fab label="LG" container-class="absolute z-1 bottom-16" />
            <c-fab label="XL" container-class="absolute z-1 bottom-0" class="btn-xl" />
        @endverbatim
    </x-code>

    {{-- Extended sizes --}}
    <x-heading title="Extended sizes" level="h3" subtitle="You can change the size of the extended FAB too." />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="Extra small" no-circle container-class="absolute z-1 bottom-52" class="btn-xs" />
            <c-fab label="Small" no-circle container-class="absolute z-1 bottom-42" class="btn-sm" />
            <c-fab label="Medium" no-circle container-class="absolute z-1 bottom-30" class="btn-md" />
            <c-fab label="Large (default)" no-circle container-class="absolute z-1 bottom-16" />
            <c-fab label="Extra large" no-circle container-class="absolute z-1 bottom-0" class="btn-xl" />
        @endverbatim
    </x-code>

    <c-divider class="pt-8" label="Speed dial" />

    {{-- FAB and Speed Dial (vertical) --}}
    <x-heading title="FAB and Speed Dial (vertical)" subtitle="Click or focus the F button in the corner" />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-primary">
                <c-fab-item>A</c-fab-item>
                <c-fab-item>B</c-fab-item>
                <c-fab-item>C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Speed Dial with icons --}}
    <x-heading title="FAB and Speed Dial with icons" level="h3" />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab icon="plus" container-class="absolute z-1" class="btn-secondary">
                <c-fab-item icon="mic" />
                <c-fab-item icon="image" />
                <c-fab-item icon="camera" />
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Speed Dial with labels --}}
    <x-heading title="FAB and Speed Dial with labels" level="h3"
        subtitle="Outside text labels for each button." />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-accent">
                <c-fab-item label="Label A">A</c-fab-item>
                <c-fab-item label="Label B">B</c-fab-item>
                <c-fab-item label="Label C">C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Speed Dial with rectangle buttons --}}
    <x-heading title="FAB and Speed Dial with rectangle buttons" level="h3">
        <x-slot:subtitle>
            <p>You can add the <code class="text-xs">no-circle</code> attribute if you want normal buttons.</p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1">
                <c-fab-item no-circle>Button A</c-fab-item>
                <c-fab-item no-circle class="rounded-none">Button B</c-fab-item>
                <c-fab-item no-circle>Button C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Speed Dial with labels and a close button --}}
    <x-heading title="FAB and Speed Dial with labels and a close button" level="h3"
        subtitle="When FAB is open the original button gets replaced by a close button." />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-accent">
                <c-fab-item close label="Close" icon="x" class="btn-error" />

                <c-fab-item label="Label A">A</c-fab-item>
                <c-fab-item label="Label B">B</c-fab-item>
                <c-fab-item label="Label C">C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Speed Dial with labels and a main action Button --}}
    <x-heading title="FAB and Speed Dial with labels and a main action Button" level="h3"
        subtitle="When FAB is open the original button gets replaced by a main action button." />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-secondary">
                <c-fab-item main label="Main action" class="btn-primary">M</c-fab-item>

                <c-fab-item label="Label A">A</c-fab-item>
                <c-fab-item label="Label B">B</c-fab-item>
                <c-fab-item label="Label C">C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Speed Dial with labels and a main action and spinners --}}
    <x-heading title="FAB and Speed Dial with labels and a main action with spinner" level="h3">
        <x-slot:subtitle>
            <p>Every item also supports a loading state. Loading state on the
                <code class="text-xs">{{ '<c' . '-fab-item />' }}</code>
                disables the button, leading to the speed dial to be closed.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-secondary" spinner>
                <c-fab-item main label="Main action" class="btn-info" spinner wire:click="mainAction">M</c-fab-item>

                <c-fab-item label="Label A" spinner wire:click="sleep(1)">A</c-fab-item>
                <c-fab-item label="Label B" spinner wire:click="sleep(2)">B</c-fab-item>
                <c-fab-item label="Label C" spinner wire:click="sleep(3)">C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    <c-divider class="pt-8" label="Flower" />

    {{-- FAB Flower and Speed Dial --}}
    <x-heading title="FAB Flower and Speed Dial">
        <x-slot:subtitle>
            <p>The
                <code class="text-xs">flower</code>
                modifier will open the button in a quarter circle instead of a vertical. The main-action and
                close button is optional; without it, the first action button also fans out into the arc.
                <code class="text-xs">flower</code>
                fits up to 4
                <code class="text-xs">{{ '<c' . '-fab-item />' }}</code>
                buttons (not including the original button), with or without a fab-main-action fab-close button.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-secondary" flower>
                <c-fab-item main icon="pencil" class="btn-primary" />

                <c-fab-item>A</c-fab-item>
                <c-fab-item>B</c-fab-item>
                <c-fab-item>C</c-fab-item>
                <c-fab-item>D</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB Flower without a main action button --}}
    <x-heading title="FAB Flower without a main action button" level="h3"
        subtitle="The fab-main-action button is optional. Without it, the first action button also fans out into the arc instead of replacing the trigger." />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab icon="plus" container-class="absolute z-1" flower>
                <c-fab-item icon="camera" />
                <c-fab-item icon="list" />
                <c-fab-item icon="image" />
                <c-fab-item icon="mic" />
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Flower Speed Dial with tooltip --}}
    <x-heading title="FAB and Flower Speed Dial with tooltip" level="h3"
        subtitle="There's no space for a text label in a quarter circle, so tooltips are used to indicate the button's function. You can also force the tooltip to be open so they act like a label." />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-secondary" flower>
                <c-fab-item main class="btn-accent">M</c-fab-item>

                <c-fab-item tooltip-left="Camera" icon="camera" />
                <c-fab-item tooltip-left="List" icon="list" class="tooltip-open" />
                <c-fab-item tooltip="Image" icon="image" />
                <c-fab-item tooltip="Mic" icon="mic" />
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Flower Speed Dial with loading state --}}
    <x-heading title="FAB and Flower Speed Dial with loading state" level="h3">
        <x-slot:subtitle>
            <p>Every item also supports a loading state. Loading state on the
                <code class="text-xs">{{ '<c' . '-fab-item />' }}</code>
                disables the button, leading to the speed dial to be closed.
            </p>
        </x-slot:subtitle>
    </x-heading>

    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-accent" flower spinner>
                <c-fab-item main spinner wire:click="mainAction">M</c-fab-item>

                <c-fab-item spinner wire:click="sleep(1)" icon="camera" />
                <c-fab-item spinner wire:click="sleep(2)" icon="list" />
                <c-fab-item spinner wire:click="sleep(3)" icon="image" />
                <c-fab-item spinner wire:click="sleep(4)" icon="mic" />
            </c-fab>
        @endverbatim
    </x-code>
</div>
