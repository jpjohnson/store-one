<?php

namespace Database\Seeders;
use Flynsarmy\CsvSeeder\CsvSeeder;
use DB;
use Illuminate\Database\Seeder;

class UserSeeder extends CsvSeeder {

    public function __construct(){
        $this->table = 'users';
        $this->filename = base_path().'/database/seeders/csvs/users.csv';
    }


    public function run(){
        DB::disableQueryLog();

        DB::table($this->table)->truncate();

        parent::run();
    }
}