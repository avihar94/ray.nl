<?php

namespace Filament\Resources\Tables;

class FilterState
{
    protected $filters = [];

    public static function make()
    {
        return new self();
    }

    public function set($name, $value)
    {
        $this->filters[$name] = $value;

        return $this;
    }

    public function get($name, $default = null)
    {
        return $this->filters[$name] ?? $default;
    }
}
