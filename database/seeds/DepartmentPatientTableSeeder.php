<?php

use Illuminate\Database\Seeder;

class DepartmentPatientTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('department_patient')->delete();
        
        \DB::table('department_patient')->insert(array (
            0 => 
            array (
                'patient_issue_id' => 15,
                'department_department_id' => '2',
                'created_at' => '2018-08-29 00:14:57',
                'updated_at' => '2018-08-29 00:14:57',
                'try' => '2018-08-29 01:14:57',
            ),
            1 => 
            array (
                'patient_issue_id' => 224,
                'department_department_id' => '2',
                'created_at' => '2018-08-28 23:13:47',
                'updated_at' => '2018-08-28 23:13:47',
                'try' => '2018-08-29 00:13:47',
            ),
            2 => 
            array (
                'patient_issue_id' => 1302645,
                'department_department_id' => '3',
                'created_at' => '2018-08-26 20:51:36',
                'updated_at' => '2018-08-26 20:51:36',
                'try' => '2018-08-26 21:51:36',
            ),
            3 => 
            array (
                'patient_issue_id' => 7800480,
                'department_department_id' => '2',
                'created_at' => '2018-08-26 20:53:00',
                'updated_at' => '2018-08-26 20:53:00',
                'try' => '2018-08-26 21:53:00',
            ),
            4 => 
            array (
                'patient_issue_id' => 11220848,
                'department_department_id' => '3',
                'created_at' => '2018-08-26 20:53:22',
                'updated_at' => '2018-08-26 20:53:22',
                'try' => '2018-08-26 21:53:22',
            ),
            5 => 
            array (
                'patient_issue_id' => 49945782,
                'department_department_id' => '2',
                'created_at' => '2018-09-03 00:03:46',
                'updated_at' => '2018-09-03 00:03:46',
                'try' => '2018-09-03 01:03:46',
            ),
            6 => 
            array (
                'patient_issue_id' => 52383949,
                'department_department_id' => '2',
                'created_at' => '2018-08-28 23:14:43',
                'updated_at' => '2018-08-28 23:14:43',
                'try' => '2018-08-29 00:14:43',
            ),
            7 => 
            array (
                'patient_issue_id' => 84206297,
                'department_department_id' => '3',
                'created_at' => '2018-03-01 05:10:09',
                'updated_at' => '2018-03-01 05:10:09',
                'try' => '2018-03-01 05:10:09',
            ),
            8 => 
            array (
                'patient_issue_id' => 98081674,
                'department_department_id' => '2',
                'created_at' => '2018-03-09 21:23:55',
                'updated_at' => '2018-03-09 21:23:55',
                'try' => '2018-03-09 13:23:55',
            ),
        ));
        
        
    }
}