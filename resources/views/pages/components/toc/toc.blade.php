<div class="doc">
    <x-heading title="TOC (Table of contents)" level="h1">
        <c-slot:end>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/toc/toc.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\Toc::class" />

    <c-alert icon="badge-info" class="alert-info">
        The currently in-view heading is marked as active automatically. Clicking on a heading will scroll it into view.
    </c-alert>


    {{-- Section --}}
    <x-heading title="Section">
        <x-slot:subtitle>
            <p>
                If you need to only consider headings in a specific area of your html, you can provide the
                <code class="text-xs">section</code> attribute, which is the query selector to use for the lookup.
                </br></br>
                This attribute is used on all examples here so there are no conflicts.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <div id="toc-example-1">
                <c-h2 title="H2 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 3" container-class="opacity-0 h-0 pointer-events-none" />
            </div>

            <c-toc section="#toc-example-1" />
        @endverbatim
    </x-code>

    {{-- Ignore --}}
    <x-heading title="Ignore">
        <x-slot:subtitle>
            <p>
                Similar to the
                <code class="text-xs">section</code>
                attribute there is also an
                <code class="text-xs">ignore</code>
                attribute. This query selector(s) can be used to define ignored elements.
                Tags with the attribute
                <code class="text-xs">data-toc-hide</code>
                are always ignored.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <div id="toc-example-2">
                <c-h2 title="H2 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                {{-- NOTE: `data-toc-hide` --}}
                <c-h4 title="H4 Layer 1" container-class="opacity-0 h-0 pointer-events-none" data-toc-hide />
                <c-h4 title="H4 Layer 2" container-class="opacity-0 h-0 pointer-events-none" data-toc-hide />
                {{-- NOTE: `custom-toc-hide-1` --}}
                <c-h3 title="H3 Layer 2" container-class="opacity-0 h-0 pointer-events-none" custom-toc-hide-1 />
                {{-- NOTE: `custom-toc-hide-2` --}}
                <c-h2 title="H2 Layer 3" container-class="opacity-0 h-0 pointer-events-none custom-toc-hide-2" />
            </div>

            {{-- NOTE: `data-toc-hide` ignored --}}
            <c-toc section="#toc-example-2" />

            <c-divider class="my-4" />

            {{-- NOTE: `data-toc-hide` + `custom-toc-hide-1` ignored --}}
            <c-toc section="#toc-example-2" ignore="[custom-toc-hide-1]" />

            <c-divider class="my-4" />

            {{-- NOTE: `data-toc-hide` + `custom-toc-hide-1` + `custom-toc-hide-2` ignored --}}
            <c-toc section="#toc-example-2" :ignore="['[custom-toc-hide-1]', '.custom-toc-hide-2']" />
        @endverbatim
    </x-code>

    {{-- Headings --}}
    <x-heading title="Headings">
        <x-slot:subtitle>
            <p>
                By default the component will look for all
                <code class="text-xs">h2</code>,
                <code class="text-xs">h3</code> and
                <code class="text-xs">h4</code> headings on
                document. You can overwrite this to fit your needs.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <div id="toc-example-3">
                <c-h1 title="H1 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h5 title="H5 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h6 title="H6 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 3" container-class="opacity-0 h-0 pointer-events-none" />
            </div>

            {{-- NOTE: `headings` --}}
            <c-toc section="#toc-example-3" :headings="['h1', 'h2', 'h3', 'h4', 'h5', 'h6']" />
        @endverbatim
    </x-code>

    {{-- Indent --}}
    <x-heading title="Indent">
        <x-slot:subtitle>
            <p>
                Be default all each heading layer is indented by
                <code class="text-xs">0.75 rem</code>
                but you can change this to be any float.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <div id="toc-example-4">
                <c-h2 title="H2 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 3" container-class="opacity-0 h-0 pointer-events-none" />
            </div>

            {{-- NOTE: `indent` --}}
            <c-toc section="#toc-example-4" indent="2.5" />
        @endverbatim
    </x-code>

    {{-- Label & active class --}}
    <x-heading title="Label & active class">
        <x-slot:subtitle>
            <p>
                Be default all each inactive label has the class: </br>
                <code class="text-xs">border-s-3 border-transparent hover:border-base-content/50
                    text-base-content/65</code></br></br>
                Each active label has the class</br>
                <code class="text-xs">border-s-3 border-primary</code>.
            </p>
        </x-slot:subtitle>
    </x-heading>
    <x-code language="blade">
        @verbatim
            <div id="toc-example-5">
                <c-h2 title="H2 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 3" container-class="opacity-0 h-0 pointer-events-none" />
            </div>

            {{-- NOTE: `label-class` and `active-class` --}}
            <c-toc section="#toc-example-5" label-class="text-accent/50"
                active-class="text-primary font-bold before:absolute before:left-0 before:content-['➡️']" />
        @endverbatim
    </x-code>

    {{-- Menu style --}}
    <x-heading title="Menu style" />
    <x-code language="blade">
        @verbatim
            <div id="toc-example-6">
                <c-h2 title="H2 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 1" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h4 title="H4 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h3 title="H3 Layer 2" container-class="opacity-0 h-0 pointer-events-none" />
                <c-h2 title="H2 Layer 3" container-class="opacity-0 h-0 pointer-events-none" />
            </div>

            <c-toc section="#toc-example-6" container-class="mx-auto max-w-sm bg-base-200 rounded-box"
                class="menu gap-2" />
        @endverbatim
    </x-code>
</div>
