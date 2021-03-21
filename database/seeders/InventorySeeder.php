<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;
use DB;

class InventorySeeder extends CsvSeeder
{
    public function __construct(){
        $this->table = 'inventory';
        $this->filename = base_path().'/database/seeders/csvs/inventory.csv';
    }


    public function run(){
         // will disable logs
         DB::disableQueryLog();
         // this will wipe the table before seeding
         DB::table($this->table)->truncate();

        parent::run();
    }
}
