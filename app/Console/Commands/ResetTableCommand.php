<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class ResetTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'table:reset {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the specified table';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $tableName = $this->argument('table');

        if ($this->confirm("Do you really want to reset the $tableName table? This will delete all records.")) {
            DB::table($tableName)->truncate();
            $this->info("The $tableName table has been reset.");
        } else {
            $this->info("Reset operation cancelled.");
        }
    }
}
