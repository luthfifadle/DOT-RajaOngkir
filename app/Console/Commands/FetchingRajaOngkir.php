<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\RajaOngkir;
use App\Models\Province;

class FetchingRajaOngkir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetching-raja-ongkir';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetching data Province & City from Raja Ongkir to Database';

    /**
     * Execute the console command.
     */

     public function __construct()
     {
        parent::__construct();
     }

    public function handle(RajaOngkir $rajaOngkirService)
    {
        $rajaOngkirService->fetchingProvince();
        $rajaOngkirService->fetchingCity();
    }
}
