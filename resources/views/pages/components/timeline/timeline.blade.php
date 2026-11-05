<div class="doc">
    <x-heading title="Timeline" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/timeline/" class="btn-ghost btn-circle"
                tooltip="View daisyUI docs" external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/timeline/timeline.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\TimelineItem::class" />

    {{-- Content --}}
    <x-heading title="Content" />
    <x-code language="blade">
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
    <x-heading title="Icons" />
    <x-code language="blade">
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
    <x-heading title="Appearance" />
    <x-code language="blade">
        @verbatim
            <div class="p-8">
                <c-timeline-item title="Order placed" border-done-class="border-s-success" bullet-done-class="bg-success"
                    done />

                <c-timeline-item title="Delivered" border-class="border-s-error" bullet-class="bg-error" />
            </div>
        @endverbatim
    </x-code>
</div>
