<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
            'name'=>'Commercial',
            'slug'=>'commercial',
            'title'=>'',
            'descr'=>'',
            'keywords'=>''
            ],
            [
            'name'=>'Residential',           
            'slug'=>'residential',
            'title'=>'',
            'descr'=>'',
            'keywords'=>''
            ],
            [
            'name'=>'Office Space',
            'slug'=>'office-space',
            'title'=>'',
            'descr'=>'',
            'keywords'=>''
            ],
            [
            'name'=>'Plot',
            'slug'=>'plot',
            'title'=>'',
            'descr'=>'',
            'keywords'=>''
            ],
            [
            'name'=>'Warehouse',
            'slug'=>'warehouse',
            'title'=>'',
            'descr'=>'',
            'keywords'=>''
            ],
        ]);
    }
}
