<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Asset;
use Carbon\Carbon;

class DeactivateExpiredAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:deactivate-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deactivate assets whose plan duration has expired';



    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();
        $assets = Asset::where('active', true)->get();

        foreach ($assets as $asset) {
            $dateAdded = Carbon::parse($asset->date_added);
            $duration = $this->getDurationInDays($asset->duration);

            if ($dateAdded->addDays($duration)->isPast()) {
                $asset->active = false;
                $asset->save();
                $this->info("Deactivated asset: {$asset->id}");
            }
        }

        return 0;

    }


    private function getDurationInDays($duration)
    {
        switch ($duration) {
            case '1 week':
                return 7;
            case '2 weeks':
                return 14;
            case '3 weeks':
                return 21;
            case '4 weeks':
                return 28;
            case '5 weeks':
                return 35;
            case '6 weeks':
                return 42;
            default:
                return 0;
        }
    }



}
