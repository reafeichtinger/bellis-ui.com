<div class="doc">
    <c-header title="Timeline" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/timeline/timeline.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\TimelineItem::class" />

    {{-- Content --}}
    <c-header title="Content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <div class="p-8">
                <c-timeline-item title="Register" done first />
                <c-timeline-item title="Payment" subtitle="10/23/2023" done />
                <c-timeline-item title="Analysis" subtitle="10/23/2023" description="Just checking" done />
                <c-timeline-item title="Prepare" description="Prepare to ship" />
                <c-timeline-item title="Shipment" description="It is shiped :)" last />
            </div>
        @endverbatim
    </x-code>

    {{-- Icons --}}
    <c-header title="Icons" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <div class="p-8">
                <c-timeline-item title="Order placed" icon="map-pin" first done />
                <c-timeline-item title="Payment confirmed" icon="credit-card" done />
                <c-timeline-item title="Shipped" icon="send-horizontal" />
                <c-timeline-item title="Delivered" icon="gift" last />
            </div>
        @endverbatim
    </x-code>

    {{-- Appearance --}}
    <c-header title="Appearance" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content>
        @verbatim
            <div class="p-8">
                <c-timeline-item 
                    title="Order placed" 
                    border-done-class="border-s-success" 
                    bullet-done-class="bg-success"
                    done />

                <c-timeline-item 
                    title="Delivered" 
                    border-class="border-s-error" 
                    bullet-class="bg-error" />
            </div>
        @endverbatim
    </x-code>
</div>
