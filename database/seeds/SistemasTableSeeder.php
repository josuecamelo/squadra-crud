<?php

use Illuminate\Database\Seeder;

class SistemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Sistema::class, 600)->create();
    }
}
