@isset($slot)
    <div {{ $attributes->merge(['class' => 'flex items-center w-full align-center text-ink-500']) }}>
        <div class="w-full border-b border-ink-700"></div>
        <div class="px-4 text-nowrap">{{ $slot }}</div>
        <div class="w-full border-b border-ink-700"></div>
    </div>
@else
    <div {{ $attributes->merge(['class' => 'w-full border-b border-ink-700']) }}></div>
@endisset
