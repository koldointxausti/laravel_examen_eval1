<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
        	'name'=>'ps2adffsda',
        	'description'=>'sadfdfssdfa',
        	'stock'=>2,
        	'price'=>3.2,
            'tienda_id'=>3
        ]);

        DB::table('productos')->insert([
        	'name'=>'psasfdadffsda',
        	'description'=>'sadasfsdfa',
        	'stock'=>2,
        	'price'=>3.2
        ]);

        DB::table('productos')->insert([
        	'name'=>'rgrpsadffsda',
        	'description'=>'r4vsadfsdfa',
        	'stock'=>2,
        	'price'=>3.2
        ]);

        DB::table('productos')->insert([
        	'name'=>'pasdfsaasfdffsda',
        	'description'=>'t43sadfsdfa',
        	'stock'=>2,
        	'price'=>3.2
        ]);

        DB::table('productos')->insert([
        	'name'=>'psadffsda',
        	'description'=>'sadfsdfa',
        	'stock'=>2,
        	'price'=>3.2,
            'tienda_id'=>1
        ]);

        DB::table('productos')->insert([
        	'name'=>'psadfasdffsda',
        	'description'=>'dfsadfsdfa',
        	'stock'=>5,
        	'price'=>3.2
        ]);

        DB::table('productos')->insert([
        	'name'=>'psadffsda',
        	'description'=>'saezddfsdfa',
        	'stock'=>2,
        	'price'=>3.2
        ]);

        DB::table('productos')->insert([
        	'name'=>'psadffsda',
        	'description'=>'sadadsffsdfa',
        	'stock'=>2,
        	'price'=>3.2
        ]);

        DB::table('productos')->insert([
        	'name'=>'psadffsda',
        	'description'=>'sasadffsaddfsdfa',
        	'stock'=>8,
        	'price'=>3.2
        ]);

        DB::table('productos')->insert([
        	'name'=>'psadffsda',
        	'description'=>'dg4sadfsdfa',
        	'stock'=>2,
        	'price'=>3.2
        ]);
    }
}
