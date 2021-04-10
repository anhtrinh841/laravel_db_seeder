<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0 ;$i<100;$i++){
            DB::table('companies')->insert([
                'company_name'=>'ABC',
                'company_web' =>'ABC',
                'company_address'=>'Thu Duc',
                'company_code' =>'ABC',
                'company_phone'=>'012233445',
               
            ]);
        }
    }
}
