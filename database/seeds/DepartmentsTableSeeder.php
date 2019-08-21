<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'department_id' => '1',
                'department_name' => 'emergancy',
                'created_at' => '2017-11-24 23:41:59',
                'updated_at' => '2017-11-24 23:41:59',
            ),
            1 => 
            array (
                'department_id' => '12',
                'department_name' => 'example5',
                'created_at' => '2017-11-24 23:43:35',
                'updated_at' => '2017-11-24 23:43:35',
            ),
            2 => 
            array (
                'department_id' => '2',
                'department_name' => 'Cardiology',
                'created_at' => '2017-11-24 23:42:22',
                'updated_at' => '2017-11-24 23:42:22',
            ),
            3 => 
            array (
                'department_id' => '3',
                'department_name' => 'example2',
                'created_at' => '2017-11-24 23:42:53',
                'updated_at' => '2017-11-24 23:42:53',
            ),
            4 => 
            array (
                'department_id' => '4',
                'department_name' => 'eample4',
                'created_at' => '2017-11-24 23:43:12',
                'updated_at' => '2017-11-24 23:43:12',
            ),
        ));
        
        
    }
}