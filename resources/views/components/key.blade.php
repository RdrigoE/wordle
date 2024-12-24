@props([
        'value' => "",
        'keyStatuses' => [],
    ])

<div
    x-data
    @click="$dispatch('key-clicked', '{{$value}}')"
    {{
        $attributes->class([
            $keyStatuses[$value] ?? "",
     "bg-gray-200 w-7 h-10 sm:w-10 sm:h-16 rounded-md flex justify-center items-center uppercase hover:cursor-pointer"
     ])
     }}
    id="key-{{$value}}"
>
    @if($slot->isEmpty())
        {{$value}}
    @else
        {{$slot}}
    @endif
</div>
