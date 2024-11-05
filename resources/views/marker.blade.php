<?php

@php
    $color = $marker->getColor();
    $icon = $marker->getIcon();
    $iconSize = $marker->getIconSize();
@endphp

<div class="fi-timeline-marker">
    @if ($icon)
        <x-filament-timeline::marker.avatar
            :icon="$icon"
            :icon-color="$color"
        />
    @endif


    @if(! $icon)
        <x-filament-timeline::marker.default
            :color="$color"
        />
    @endif
</div>
