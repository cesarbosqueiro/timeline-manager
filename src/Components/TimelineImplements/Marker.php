<?php


namespace Bosqro\TimelineManager\Components\TimelineImplements;

use Bosqro\TimelineManager\Components\TimelineImplements\Concerns;
use Filament\Infolists\Components\Entry;
use Filament\Support\Concerns\CanBeContained;

class Marker extends Entry
{
    use CanBeContained;
    use Concerns\Color;
    use Concerns\Icon;

    protected string $view = 'filament-timeline::marker';

    protected string $viewIdentifier = 'marker';
}
