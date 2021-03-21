<?php

namespace Database\Seeders;
use Flynsarmy\CsvSeeder\CsvSeeder;
use DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends CsvSeeder {

    public function __construct(){
        $this->table = 'products';
        $this->insert_chunk_size = 300;
        $this->filename = base_path().'/database/seeders/csvs/products.csv';
    }


    public function run(){
        // will disable logs
        DB::disableQueryLog();
        // this will wipe the table before seeding
        DB::table($this->table)->truncate();

        parent::run();
    }
}
