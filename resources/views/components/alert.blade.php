@props(['tipe' => 'info'])

@php
    $warna = [
        'sukses' => 'green',
        'bahaya' => 'red',
        'info' => 'blue',
    ];

    $warnaTeks = $warna[$tipe] ?? 'blue';
@endphp

<div style="padding: 10px; margin: 10px 0; border: 1px solid {{ $warnaTeks }}; color: {{ $warnaTeks }};">
    {{ $slot }}
</div>