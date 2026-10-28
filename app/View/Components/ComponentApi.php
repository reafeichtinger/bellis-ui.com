<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComponentApi extends Component
{
    public function __construct(
        public string $className,
    ) {}

    public function render(): View|Closure|string
    {
        return <<<'BLADE'
        @php 
            $data = App\Support\DocBlockParser::parseClassDocBlock($className);
            $headers = [
                ['key' => 'name', 'label' => 'Property'],
                ['key' => 'type', 'label' => 'Type'],
                ['key' => 'description', 'label' => 'Description'],
            ];
        @endphp
        <div {{ $attributes }}>
            <p>{{ $data['description'] ?? $className }}</p>

            <c-table :headers="$headers" :rows="$data['properties'] ?? []" class="border-(length:--border) border-base-content/15" container-class="mt-6 max-h-96! overflow-y-auto" >
                @scope('cell_name', $property)
                    {{ str()->of($property['name'] ?? '')->kebab() }}
                @endscope
            </c-table>
        </div>
        BLADE;
    }
}
