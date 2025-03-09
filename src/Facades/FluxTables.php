<?php

namespace vbergerondev\FluxTables\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \vbergerondev\FluxTables\FluxTables
 */
class FluxTables extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \vbergerondev\FluxTables\FluxTables::class;
    }
}
