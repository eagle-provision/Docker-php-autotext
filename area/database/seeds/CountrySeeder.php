<?php

use Illuminate\Database\Seeder;
use Hikarine3\CsvParser;
use Carbon\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit','1024M');
        $file = __DIR__ .'/data/locations/countries.tsv';
        if( !file_exists($file) ) {
            die($file . " doesn't exist.");
        }
        $parser = new CsvParser();
        $datas = $parser->parse(['delimiter' => "\t", 'file' => $file]);
        foreach ($datas as $data) {
            if(isset($data['id']) && isset($data['name']) ) {
                DB::table('countries')->insert([
                    'id' => strtolower($data['id']),
                    'name' => $data['name'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
    }
}
