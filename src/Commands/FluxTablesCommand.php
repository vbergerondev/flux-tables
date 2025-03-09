<?php

namespace vbergerondev\FluxTables\Commands;

use Illuminate\Console\Command;

class FluxTablesCommand extends Command
{
    public $signature = 'flux-tables';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
