<?php

namespace Filament\Resources\Tables;

use Filament\Tables\Columns\TextColumn;

class Columns
{
    public static function text($name)
    {
        return (new TextColumn($name))->label($name);
    }

}
