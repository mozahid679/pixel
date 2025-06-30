<form {{ $attributes(['class' => 'max-w-2xl mx-auto space-y-6', 'methrd' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
