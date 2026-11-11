<div class="doc">
    <x-heading title="Input file" level="h1">
        <c-slot:end>
            {{-- daisyUI --}}
            <c-button link="https://daisyui.com/components/input/" class="btn-ghost btn-circle" tooltip="View daisyUI docs"
                external>
                <img src="/svg/daisyui.svg" class="object-contain w-6 h-6" />
            </c-button>
            {{-- GitHub --}}
            <c-button icon="github"
                link="https://github.com/reafeichtinger/bellis-ui.com/tree/main/resources/views/pages/components/input-file/input-file.blade.php"
                class="btn-ghost btn-circle" tooltip="Help us improve this page" external />
        </c-slot:end>
    </x-heading>

    <x-component-api :class-name="Bellis\View\Components\Bellis\InputFile::class" />

    <c-alert icon="badge-info" class="alert-info">
        For more information about available options check the
        <a href="/components/input" wire:navigate class="link">Input</a>
        component.
    </c-alert>

    {{-- General setup --}}
    <x-heading title="General setup">
        <x-slot:subtitle>
            This component is powered by Livewire`s file upload, including all features like file size and type
            validation. Please, first check
            <a href="https://livewire.laravel.com/docs/4.x/uploads" class="link" target="_blank">Livewire docs</a>
            to proper setup file uploads before using this component. To use file upload you have to add:
            <x-code-only language="php" class="mt-6">
                use Livewire\WithFileUploads;
            </x-code-only>
        </x-slot:subtitle>
    </x-heading>

    {{-- Single file --}}
    <x-heading title="Single file"
        subtitle="Livewire itself triggers real time validation for single file upload. You should add the relevant validation
        rules." />
    <x-code-only language="php">
        @verbatim
            #[Rule('required|max:1024|mimes:pdf')]
            public mixed $value = null;
        @endverbatim
    </x-code-only>
    <x-code language="blade" render-class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @verbatim
            <c-input-file label="Using file component" wire:model="value" accept="application/pdf"
                description="Upload a PDF" />
            <c-input type="file" label="Using input component" wire:model="value" x-data
                x-bind:class="'file-input -mx-3'" accept="application/pdf" />
        @endverbatim
    </x-code>

    {{-- Multiple files --}}
    <x-heading title="Multiple files">
        <x-slot:subtitle>
            Livewire itself does not trigger real time validation for multiple file upload, like single file upload. So,
            remember to call
            <p class="inline text-xs whitespace-nowrap"><code>$this->validate()</code></p>
            before saving the files. One way of doing this is by calling this validate function.
        </x-slot:subtitle>
    </x-heading>
    <x-code-only language="php">
        @verbatim
            $this->validate([ 'values' => 'required', 'values.*' => 'max:512|image' ]);
        @endverbatim
    </x-code-only>
    <x-code language="blade" render-class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @verbatim
            {{-- NOTE: `multiple` and `validation-for` --}}
            <c-input-file label="Images" wire:model="values" accept="image/*" validation-reserved multiple
                :validation-for="['values', 'values.*']">
                <c-slot:end>
                    <c-button class="btn-primary" label="Validate" wire:click="validateValues" />
                </c-slot:end>
            </c-input-file>
        @endverbatim
    </x-code>

    {{-- Showing a preview --}}
    <x-heading title="Showing a preview" subtitle="You can also show a preview for image uploads." />
    <x-code language="blade" render-class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @verbatim
            <c-input-file label="Image" wire:model.live="image" accept="image/*" validation-reserved clearable />

            @if ($this->image)
                {{-- NOTE: `->temporaryUrl()` --}}
                <img src="{{ $this->image->temporaryUrl() }}" class="w-full h-auto rounded-box" />
            @endif
        @endverbatim
    </x-code>
</div>
