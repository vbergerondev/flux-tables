<?php

namespace vbergerondev\FluxTables\Datatable\Traits;

trait Searchable
{
    private bool $searchable = false {
        get {
        return $this->searchable;
    }
    }

    public function searchable(): self
    {
        $this->searchable = true;

        return $this;
    }
}
