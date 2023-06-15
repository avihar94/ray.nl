<?php

namespace Filament\Resources\Tables;

use Filament\Resources\Tables\Columns\Column;

class Table
{
    protected $columns = [];

    public function columns(array $columns)
    {
        $this->columns = $columns;

        return $this;
    }

    public function getColumns()
    {
        return $this->columns;
    }

}
