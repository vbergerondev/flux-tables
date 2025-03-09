<?php

namespace vbergerondev\FluxTables\Datatable\Columns;

use vbergerondev\FluxTables\Datatable\Traits\Searchable;

abstract class Column
{
    use Searchable;

    public function __construct(public string $name, public string $field) {}
}
