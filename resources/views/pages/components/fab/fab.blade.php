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
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/fab/fab.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Fab::class" />

    <x-heading title="FAB Item" />
    <x-component-api :class-name="Bellis\View\Components\Bellis\FabItem::class" />

    {{-- FAB and Speed Dial (vertical) --}}
    <x-heading title="FAB and Speed Dial (vertical)" />
    <p>Click or focus the A button in the corner</p>
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
    <x-heading title="FAB and Speed Dial with icons" />
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
    <x-heading title="FAB and Speed Dial with labels" />
    <p>Text labels for each button.</p>
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
    <x-heading title="FAB and Speed Dial with rectangle buttons" />
    <p>You can remove the btn-circle class if you want normal buttons</p>
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-accent">
                <c-fab-item no-circle>Button A</c-fab-item>
                <c-fab-item no-circle class="rounded-none">Button B</c-fab-item>
                <c-fab-item no-circle>Button C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- FAB and Speed Dial with labels and fab-close button --}}
    <x-heading title="FAB and Speed Dial with labels and fab-close button" />
    <p>When FAB is open the original button gets replaced by a Close Button</p>
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

    {{-- FAB and Speed Dial with labels and fab-main-action Button --}}
    <x-heading title="FAB and Speed Dial with labels and fab-main-action Button" />
    <p>When FAB is open the original button gets replaced by a Main Action Button</p>
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-accent">
                <c-fab-item main label="Main action" class="btn-secondary">M</c-fab-item>

                <c-fab-item label="Label A">A</c-fab-item>
                <c-fab-item label="Label B">B</c-fab-item>
                <c-fab-item label="Label C">C</c-fab-item>
            </c-fab>
        @endverbatim
    </x-code>

    {{-- A single FAB (Floating Action Button) --}}
    <x-heading title="A single FAB (Floating Action Button)" />
    <p>If you only want one button in the corner of page</p>
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="F" container-class="absolute z-1" class="btn-primary" />
        @endverbatim
    </x-code>

    {{-- FAB Flower and Speed Dial --}}
    <x-heading title="FAB Flower and Speed Dial" />
    <p>fab-flower modifier class will open the button in a quarter circle instead of a vertical. The fab-main-action /
        fab-close button is optional in fab-flower; without it, the first action button also fans out into the arc.
        fab-flower fits up to 4 action buttons (not including the original button), with or without a fab-main-action /
        fab-close button.</p>
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
    <x-heading title="FAB Flower without a main action button" />
    <p>The fab-main-action button is optional. Without it, the first action button also fans out into the arc instead of
        replacing the trigger.</p>
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
    <x-heading title="FAB and Flower Speed Dial with tooltip" />
    <p>There's no space for a text label in a quarter circle, so tooltips are used to indicate the button's function.
        You can also force the tooltip to be open so they act like a label.</p>
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

    {{-- Single FAB with spinner --}}
    <x-heading title="Single FAB with spinner" />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="TODO" container-class="absolute z-1" class="btn-primary text-xs" />
        @endverbatim
    </x-code>

    {{-- Speed dial FAB with spinner --}}
    <x-heading title="Single FAB with spinner" />
    <x-code language="blade" render-class="relative min-h-56">
        @verbatim
            <c-fab label="TODO" container-class="absolute z-1" class="btn-secondary text-xs" />
        @endverbatim
    </x-code>
</div>
