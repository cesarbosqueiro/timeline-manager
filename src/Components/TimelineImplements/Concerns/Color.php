<?php


namespace Bosqro\TimelineManager\Components\TimelineImplements\Concerns;

use Filament\Infolists\Components\Concerns\HasColor as BaseHasColor;

trait Color
{
    use BaseHasColor {
        getColor as getBaseColor;
    }

    public function getColor(): ?string
    {
        return $this->getBaseColor($this->getState());
    }
}
