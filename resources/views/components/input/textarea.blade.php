@php
/**
 * @name Textarea
 * @description A textarea, attributes are passed to the textarea element.
 */
@endphp

@props([
    /**
     * @param string inputClass String of classes applied to the input element
     */
    'inputClass' => '',
    /**
     * @param string size 'xl', 'lg' or 'sm'
     */
     'size' => 'lg'
])

@php
    $inputClass = "" . default_input_chrome($size) . " " . $inputClass;
@endphp

<div class="{{ $attributes->merge(['class' => 'relative block' ])->only('class') }}">
    <textarea class="{{ $inputClass }}" {{ $attributes->except('class') }}>{{ $slot }}</textarea>
</div>
