<?php

namespace Filament\Resources\Tables;

class Filter
{
    protected $name;
    protected $value;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function make(string $string)
    {
    }

    public function value($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function apply($query)
    {

    }


}
