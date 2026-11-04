<div class="doc">
    <c-header title="ListItem" icon="hash" icon-class="text-secondary" level="h1" with-anchor>
        <c-slot:actions>
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/docs/components/list-item/list-item.blade.php"
                class="btn-ghost btn-circle me-2" tooltip="Help us improve this page" external />
        </c-slot:actions>
    </c-header>

    <x-component-api :class-name="Bellis\View\Components\Bellis\ListItem::class" />

    {{-- Content --}}
    <c-header title="Content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <p>
        By default, the component will load the following keys:
    </p>
    <ul class="list-disc ms-6">
        <li>
            <code>$object->name</code> as the title.
        </li>
        <li>
            <code>$object->avatar</code> as the picture url.
        </li>
    </ul>
    <x-code language="blade" render-content render-class="flex flex-col">
        @verbatim
            @foreach ($this->users as $user)
                <c-list-item :item="$user" subtitle="username" link="/docs/install" />
            @endforeach
        @endverbatim
    </x-code>

    {{-- Accessors --}}
    <c-header title="Accessors" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <p>You can overwrite the accessor keys for each section.</p>
    <x-code language="blade" render-content render-class="flex flex-col">
        @verbatim
            {{-- NOTE: `address.city` ⇒ It supports nested properties --}}
            <c-list-item :item="$this->users[0]" title="short_name" subtitle="address.city" avatar="alt_avatar" />
        @endverbatim
    </x-code>

    {{-- No Separator & No Hover --}}
    <c-header title="No Separator & No Hover" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex flex-col">
        @verbatim
            @foreach ($this->users as $user)
                <c-list-item :item="$user" no-separator no-hover />
            @endforeach
        @endverbatim
    </x-code>

    {{-- Fully custom content --}}
    <c-header title="Fully custom content" icon="hash" icon-class="text-secondary" level="h2" with-anchor />
    <x-code language="blade" render-content render-class="flex flex-col">
        @verbatim
            <c-list-item :item="$this->users[0]">
                <c-slot:avatar>
                    <c-badge label="top user" class="badge-primary badge-soft" />
                </c-slot:avatar>
                <c-slot:title>
                    Custom title
                </c-slot:title>
                <c-slot:subtitle>
                    Custom subtitle
                </c-slot:subtitle>
                <c-slot:actions>
                    <c-button icon="trash" class="btn-sm" wire:click="sleep(1)" spinner />
                </c-slot:actions>
            </c-list-item>
        @endverbatim
    </x-code>
</div>
