@props(['size' => 35, 'color' => 'white'])

@php
switch ($color) {
  case 'purple':
    $color = "#CF2CFD";
    break;
  case 'white':
    $color = "#FFFFFF";
    break;
}

@endphp

<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="{{$size}}" height="{{$size}}" viewBox="0 0 24 24" stroke-width="1.5" stroke="{{$color}}" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <circle cx="10" cy="10" r="7" />
    <line x1="21" y1="21" x2="15" y2="15" />
  </svg>