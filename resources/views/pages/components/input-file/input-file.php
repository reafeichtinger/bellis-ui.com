<?php

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

new
#[Layout('layouts.components')]
class extends Component
{
    use WithFileUploads;

    #[Rule('required|max:1024|mimes:pdf')]
    public mixed $value = null;

    public array $values = [];

    public function validateValues(): void
    {
        $this->validate([
            'values' => 'required',
            'values.*' => 'max:512|image',
        ]);
    }

    public mixed $image = null;

    public function updatedImage(): void
    {
        try {
            $this->validateOnly('image', ['image' => 'max:512|image']);
        } catch (ValidationException $e) {
            $this->image = null;
            throw $e;
        }
    }
};
