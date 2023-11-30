@props(['active'])

@php
    $classes = $active ?? false ? 'lex space-x-2 items-center hover:text-blue-900 text-sm text-blue-500' : 'lex space-x-2 items-center hover:text-blue-900 text-sm text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
