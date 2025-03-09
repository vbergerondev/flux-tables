<?php

declare(strict_types=1);

namespace vbergerondev\FluxTables\Datatable;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;
use vbergerondev\FluxTables\Datatable\Columns\Column;

/**
 * @template TModel of Model
 *
 * @property-read Builder<TModel> $queryBuilder
 * @property-read LengthAwarePaginator<TModel> $rows
 */
abstract class FluxTableComponent extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('flux-tables::components.datatable.index', [
            'columns' => $this->columns(),
        ]);
    }

    /**
     * @return LengthAwarePaginator<TModel>
     */
    #[Computed]
    public function rows(): LengthAwarePaginator
    {
        return $this->queryBuilder->paginate(10);
    }

    /**
     * @return Builder<TModel>
     */
    #[Computed]
    public function queryBuilder(): Builder
    {
        return $this->source();
    }

    /**
     * @return Builder<TModel>
     */
    abstract protected function source(): Builder;

    /**
     * @return Column[]
     */
    abstract protected function columns(): array;
}
