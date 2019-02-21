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
        \App\Dogs::truncate();

        \App\Dogs::create(['name' => 'Joe', 'age' => 5 ]);
        \App\Dogs::create(['name' => 'Jock', 'age' => 7 ]);
        \App\Dogs::create(['name' => 'Jackie', 'age' => 2 ]);
        \App\Dogs::create(['name' => 'Jane', 'age' => 9 ]);
    }
}
