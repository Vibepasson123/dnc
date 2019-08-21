<?php

use Illuminate\Database\Seeder;

class BandPatientTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('band_patient')->delete();
        
        \DB::table('band_patient')->insert(array (
            0 => 
            array (
                'patient_issue_id' => 15,
                'band_band_id' => '17',
                'created_at' => '2018-08-29 00:14:57',
                'updated_at' => '2018-08-29 00:14:57',
            ),
            1 => 
            array (
                'patient_issue_id' => 224,
                'band_band_id' => '11',
                'created_at' => '2018-08-28 23:13:47',
                'updated_at' => '2018-08-28 23:13:47',
            ),
            2 => 
            array (
                'patient_issue_id' => 1302645,
                'band_band_id' => '22',
                'created_at' => '2018-08-26 20:51:36',
                'updated_at' => '2018-08-26 20:51:36',
            ),
            3 => 
            array (
                'patient_issue_id' => 7800480,
                'band_band_id' => '14',
                'created_at' => '2018-08-26 20:53:00',
                'updated_at' => '2018-08-26 20:53:00',
            ),
            4 => 
            array (
                'patient_issue_id' => 11220848,
                'band_band_id' => '8',
                'created_at' => '2018-08-26 20:53:22',
                'updated_at' => '2018-08-26 20:53:22',
            ),
            5 => 
            array (
                'patient_issue_id' => 49945782,
                'band_band_id' => '24',
                'created_at' => '2018-09-03 00:03:46',
                'updated_at' => '2018-09-03 00:03:46',
            ),
            6 => 
            array (
                'patient_issue_id' => 52383949,
                'band_band_id' => '6',
                'created_at' => '2018-08-28 23:14:43',
                'updated_at' => '2018-08-28 23:14:43',
            ),
        ));
        
        
    }
}