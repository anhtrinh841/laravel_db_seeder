<?php

use Illuminate\Database\Seeder;

class TraniersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0 ;$i<1000000;$i++){
            DB::table('trainers')->insert([
                'trainer_name'=>'ABC',
                'company_id' =>'123',
                'trainer_email'=>'Thu Duc',
                'trainer_phone'=>'012233445',
               
            ]);
        }
    }
}
