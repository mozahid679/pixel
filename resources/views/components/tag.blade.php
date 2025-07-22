@props(['tag', 'size' => 'base'])

@php
    $classes = 'rounded-xl bg-white/10 transition-colors font-bold duration-300 hover:bg-white/25';

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-2 py-1 text-[9.5px]';
    }

@endphp

<a class="{{ $classes }}" href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
