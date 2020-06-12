<?php

use Illuminate\Database\Seeder;
use Hikarine3\CsvParser;
use Carbon\Carbon;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit','1024M');
        $file = __DIR__ .'/data/locations/states.tsv';
        $parser = new CsvParser();
        $datas = $parser->parse(['delimiter' => "\t", 'file' => $file]);

        foreach ($datas as $data) {
            if(isset($data['country_id']) && isset($data['name']) ) {
                DB::table('states')->insert([
                    'name' => $data['name'],
                    'country_id' => $data['country_id'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
    }
}
