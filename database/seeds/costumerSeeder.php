<?php

use Illuminate\Database\Seeder;

class costumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Costumer::insert([
        	[
        		'Nama'=>'Andra',
        		'Nomor'=>'69'
        	],
        	[
        		'Nama'=>'TJ',
        		'Nomor'=>'666'
        	]
        	]);
    }
}
