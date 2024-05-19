<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DisplayTableContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:show {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the content of a database table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $table = $this->argument('table');
        $data = DB::table($table)->get();

        if ($data->isEmpty()) {
            $this->info("Table '$table' is empty.");
        } else {
            $headers = array_keys((array) $data->first());
            $rows = $data->toArray();

            $this->table($headers, $rows);
        }
    }
}
