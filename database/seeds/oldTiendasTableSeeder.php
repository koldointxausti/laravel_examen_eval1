<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([
        	'name'=>'ps2adffsda',
        	'descripcion'=>'sadfdfssdfa',
        	'password'=>'1234',
        	'email'=>'adsf@dfs.co',
        	'likes'=>3
        ]);
        DB::table('tiendas')->insert([
        	'name'=>'as2',
        	'descripcion'=>'sadfdfasdfy5ssdfa',
        	'password'=>'1234',
        	'email'=>'bcf@dfs.co',
        	'likes'=>3
        ]);
        DB::table('tiendas')->insert([
        	'name'=>'psfdasdfs2adffsda',
        	'descripcion'=>'sfadsadfdfssdfa',
        	'password'=>'1234',
        	'email'=>'dy@dfs.co',
        	'likes'=>3
        ]);
    }
}
