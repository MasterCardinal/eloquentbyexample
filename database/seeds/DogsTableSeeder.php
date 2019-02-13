<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Dog::truncate();

        (new Faker\Generator)->seed(123);

        factory(App\Dog::class, 50)->create();
    }
}
