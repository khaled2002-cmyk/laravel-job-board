

@php
    $current = "text-white bg-indigo-700";
    $diff = "text-white hover:bg-indigo-500";
 @endphp

 <a class="px-3 py-2 rounded-md text-sm font-medium {{$active ? $current : $diff  }}" {{  $attributes }}>
    {{ $slot }}
 </a>