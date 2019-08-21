<?php

use Illuminate\Database\Seeder;

class PatientPatienthistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('patient_patienthistory')->delete();
        
        \DB::table('patient_patienthistory')->insert(array (
            0 => 
            array (
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-08-29 01:30:07',
                'updated_at' => '2018-08-29 01:30:07',
            ),
            1 => 
            array (
                'patient_issue_id' => 45,
                'patienthistory_assin' => '2570',
                'created_at' => '2018-02-19 19:10:26',
                'updated_at' => '2018-02-19 19:10:26',
            ),
            2 => 
            array (
                'patient_issue_id' => 224,
                'patienthistory_assin' => '4740',
                'created_at' => '2018-08-28 23:13:47',
                'updated_at' => '2018-08-28 23:13:47',
            ),
            3 => 
            array (
                'patient_issue_id' => 1302645,
                'patienthistory_assin' => '6318',
                'created_at' => '2018-08-26 20:51:36',
                'updated_at' => '2018-08-26 20:51:36',
            ),
            4 => 
            array (
                'patient_issue_id' => 7800480,
                'patienthistory_assin' => '4110',
                'created_at' => '2018-08-26 20:53:00',
                'updated_at' => '2018-08-26 20:53:00',
            ),
            5 => 
            array (
                'patient_issue_id' => 11220848,
                'patienthistory_assin' => '5153',
                'created_at' => '2018-08-26 20:53:22',
                'updated_at' => '2018-08-26 20:53:22',
            ),
            6 => 
            array (
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '1532',
                'created_at' => '2018-09-03 00:03:46',
                'updated_at' => '2018-09-03 00:03:46',
            ),
            7 => 
            array (
                'patient_issue_id' => 52383949,
                'patienthistory_assin' => '8993',
                'created_at' => '2018-08-28 23:14:43',
                'updated_at' => '2018-08-28 23:14:43',
            ),
            8 => 
            array (
                'patient_issue_id' => 54544330,
                'patienthistory_assin' => '7791',
                'created_at' => '2018-02-19 03:51:32',
                'updated_at' => '2018-02-19 03:51:32',
            ),
            9 => 
            array (
                'patient_issue_id' => 72589040,
                'patienthistory_assin' => '2244003',
                'created_at' => '2018-01-29 17:50:56',
                'updated_at' => '2018-01-29 17:50:56',
            ),
            10 => 
            array (
                'patient_issue_id' => 84206297,
                'patienthistory_assin' => '9529912',
                'created_at' => '2018-03-01 05:10:10',
                'updated_at' => '2018-03-01 05:10:10',
            ),
        ));
        
        
    }
}