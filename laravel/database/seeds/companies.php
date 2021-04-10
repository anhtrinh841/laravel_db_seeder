<?php

use Illuminate\Database\Seeder;

class companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    companies::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();

    }
}
