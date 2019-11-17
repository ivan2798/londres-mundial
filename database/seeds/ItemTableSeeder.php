<?php

use Illuminate\Database\Seeder; 
use App\item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        factory(item::class,10)->create();
    }
}
