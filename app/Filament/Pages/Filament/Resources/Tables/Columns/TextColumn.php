<?php

namespace Filament\Resources\Tables\Columns;

use Filament\Tables\Columns\Column;

class TextColumn extends Column
{
    protected $textAlign = 'left';

    public function textAlign($textAlign)
    {
        $this->textAlign = $textAlign;

        return $this;
    }

    public function getTextAlign()
    {
        return $this->textAlign;
    }

}
