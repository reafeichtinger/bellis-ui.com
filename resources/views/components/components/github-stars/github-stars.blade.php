@placeholder
    <span {{ $attributes->merge(['class' => 'badge badge-sm max-w-6.5']) }}>
        <span class="loading loading-dots loading-xs"></span>
    </span>
@endplaceholder

<span {{ $attributes->merge(['class' => 'badge badge-sm']) }}>{{ $this->count }}</span>
