<div>
    <flux:table :paginate="$this->rows">
        <flux:table.columns>
            @foreach($columns as $column)
                <flux:table.column>{{ $column->name }}</flux:table.column>
            @endforeach
        </flux:table.columns>

        <flux:table.rows>
            @foreach($this->rows as $row)
                <flux:table.row :key="$row->getKey()">
                    @foreach($columns as $column)
                        <flux:table.cell>{{ $column->render($row) }}</flux:table.cell>
                    @endforeach
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
</div>
