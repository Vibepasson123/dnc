<?php

use Illuminate\Database\Seeder;

class TempTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('temp')->delete();
        
        \DB::table('temp')->insert(array (
            0 => 
            array (
                'id' => 1,
                'body_temp' => 65.0,
                'patient_issue_id' => 1,
                'patienthistory_assin' => '875',
                'created_at' => '2018-01-10 02:30:03',
                'updated_at' => '2018-01-21 23:48:09',
                'try' => '2018-01-25 00:29:22',
            ),
            1 => 
            array (
                'id' => 2,
                'body_temp' => 55.0,
                'patient_issue_id' => 84,
                'patienthistory_assin' => '85',
                'created_at' => '2018-01-10 02:31:04',
                'updated_at' => '2018-01-10 02:31:04',
                'try' => '2018-01-25 00:29:22',
            ),
            2 => 
            array (
                'id' => 3,
                'body_temp' => 55.0,
                'patient_issue_id' => 2,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:32:16',
                'updated_at' => '2018-01-25 05:01:22',
                'try' => '2018-01-25 05:01:22',
            ),
            3 => 
            array (
                'id' => 4,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:33:08',
                'updated_at' => '2018-02-01 21:02:31',
                'try' => '2018-02-01 22:29:22',
            ),
            4 => 
            array (
                'id' => 5,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:33:37',
                'updated_at' => '2018-01-10 02:33:37',
                'try' => '2018-01-25 00:29:22',
            ),
            5 => 
            array (
                'id' => 6,
                'body_temp' => 100.0,
                'patient_issue_id' => 45,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:54',
                'updated_at' => '2018-02-01 20:51:15',
                'try' => '2018-02-01 22:50:24',
            ),
            6 => 
            array (
                'id' => 7,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:57',
                'updated_at' => '2018-02-01 21:02:07',
                'try' => '2018-02-01 00:29:22',
            ),
            7 => 
            array (
                'id' => 8,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:58',
                'updated_at' => '2018-01-10 02:35:58',
                'try' => '2018-01-25 00:29:22',
            ),
            8 => 
            array (
                'id' => 9,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:59',
                'updated_at' => '2018-01-10 02:35:59',
                'try' => '2018-01-25 00:29:22',
            ),
            9 => 
            array (
                'id' => 10,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:00',
                'updated_at' => '2018-01-10 02:36:00',
                'try' => '2018-01-25 00:29:22',
            ),
            10 => 
            array (
                'id' => 11,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:01',
                'updated_at' => '2018-01-10 02:36:01',
                'try' => '2018-01-25 00:29:22',
            ),
            11 => 
            array (
                'id' => 12,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:03',
                'updated_at' => '2018-02-01 21:07:25',
                'try' => '2018-01-25 22:29:22',
            ),
            12 => 
            array (
                'id' => 13,
                'body_temp' => 45.0,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:04',
                'updated_at' => '2018-02-01 21:07:15',
                'try' => '2018-02-01 00:29:22',
            ),
            13 => 
            array (
                'id' => 14,
                'body_temp' => 99.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 16:52:47',
                'updated_at' => '2018-01-31 12:12:20',
                'try' => '2018-01-31 17:00:02',
            ),
            14 => 
            array (
                'id' => 15,
                'body_temp' => 58.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 16:53:47',
                'updated_at' => '2018-01-31 12:12:12',
                'try' => '2018-01-31 21:26:55',
            ),
            15 => 
            array (
                'id' => 16,
                'body_temp' => 45.0,
                'patient_issue_id' => 34,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 20:14:06',
                'updated_at' => '2018-01-10 20:14:06',
                'try' => '2018-01-25 00:29:22',
            ),
            16 => 
            array (
                'id' => 17,
                'body_temp' => 65.0,
                'patient_issue_id' => 45,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:49:52',
                'updated_at' => '2018-02-05 21:49:52',
                'try' => '2018-02-05 21:49:52',
            ),
            17 => 
            array (
                'id' => 18,
                'body_temp' => 65.0,
                'patient_issue_id' => 45,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:52:39',
                'updated_at' => '2018-02-05 21:52:39',
                'try' => '2018-02-05 21:52:39',
            ),
            18 => 
            array (
                'id' => 19,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:54:36',
                'updated_at' => '2018-05-08 18:28:21',
                'try' => '2018-05-08 21:54:36',
            ),
            19 => 
            array (
                'id' => 20,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:40',
                'updated_at' => '2018-05-08 18:28:32',
                'try' => '2018-05-08 02:49:40',
            ),
            20 => 
            array (
                'id' => 21,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:45',
                'updated_at' => '2018-05-08 18:28:41',
                'try' => '2018-05-08 02:49:45',
            ),
            21 => 
            array (
                'id' => 22,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:47',
                'updated_at' => '2018-02-06 02:49:47',
                'try' => '2018-02-06 02:49:47',
            ),
            22 => 
            array (
                'id' => 23,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:48',
                'updated_at' => '2018-02-06 02:49:48',
                'try' => '2018-02-06 02:49:48',
            ),
            23 => 
            array (
                'id' => 24,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:50',
                'updated_at' => '2018-02-06 02:49:50',
                'try' => '2018-02-06 02:49:50',
            ),
            24 => 
            array (
                'id' => 25,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:51',
                'updated_at' => '2018-02-06 02:49:51',
                'try' => '2018-02-06 02:49:51',
            ),
            25 => 
            array (
                'id' => 26,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:14',
                'updated_at' => '2018-02-06 02:50:14',
                'try' => '2018-02-06 02:50:14',
            ),
            26 => 
            array (
                'id' => 27,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:18',
                'updated_at' => '2018-02-06 02:50:18',
                'try' => '2018-02-06 02:50:18',
            ),
            27 => 
            array (
                'id' => 28,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:21',
                'updated_at' => '2018-02-06 02:50:21',
                'try' => '2018-02-06 02:50:21',
            ),
            28 => 
            array (
                'id' => 29,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:22',
                'updated_at' => '2018-02-06 02:50:22',
                'try' => '2018-02-06 02:50:22',
            ),
            29 => 
            array (
                'id' => 30,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:23',
                'updated_at' => '2018-02-06 02:50:23',
                'try' => '2018-02-06 02:50:23',
            ),
            30 => 
            array (
                'id' => 31,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:23',
                'updated_at' => '2018-02-06 02:50:23',
                'try' => '2018-02-06 02:50:23',
            ),
            31 => 
            array (
                'id' => 32,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:24',
                'updated_at' => '2018-02-06 02:50:24',
                'try' => '2018-02-06 02:50:24',
            ),
            32 => 
            array (
                'id' => 33,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:25',
                'updated_at' => '2018-02-06 02:50:25',
                'try' => '2018-02-06 02:50:25',
            ),
            33 => 
            array (
                'id' => 34,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:26',
                'updated_at' => '2018-02-06 02:50:26',
                'try' => '2018-02-06 02:50:26',
            ),
            34 => 
            array (
                'id' => 35,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:27',
                'updated_at' => '2018-02-06 02:50:27',
                'try' => '2018-02-06 02:50:27',
            ),
            35 => 
            array (
                'id' => 36,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:11',
                'updated_at' => '2018-02-09 01:56:11',
                'try' => '2018-02-09 01:56:11',
            ),
            36 => 
            array (
                'id' => 37,
                'body_temp' => 95.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:21',
                'updated_at' => '2018-02-09 01:56:21',
                'try' => '2018-02-09 01:56:21',
            ),
            37 => 
            array (
                'id' => 38,
                'body_temp' => 55.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:31',
                'updated_at' => '2018-02-09 01:56:31',
                'try' => '2018-02-09 01:56:31',
            ),
            38 => 
            array (
                'id' => 39,
                'body_temp' => 55.0,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 04:19:09',
                'updated_at' => '2018-02-09 04:19:09',
                'try' => '2018-02-09 04:19:09',
            ),
            39 => 
            array (
                'id' => 41,
                'body_temp' => 96.0,
                'patient_issue_id' => 17,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:25',
                'updated_at' => '2018-08-29 01:54:40',
                'try' => '2018-08-29 01:54:40',
            ),
            40 => 
            array (
                'id' => 42,
                'body_temp' => 96.0,
                'patient_issue_id' => 19,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:27',
                'updated_at' => '2018-08-29 01:54:55',
                'try' => '2018-08-29 01:54:55',
            ),
            41 => 
            array (
                'id' => 43,
                'body_temp' => 96.0,
                'patient_issue_id' => 14,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:29',
                'updated_at' => '2018-08-29 01:55:06',
                'try' => '2018-08-29 01:55:06',
            ),
            42 => 
            array (
                'id' => 67,
                'body_temp' => 95.0,
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:15',
                'updated_at' => '2018-09-03 01:05:47',
                'try' => '2018-09-03 18:22:28',
            ),
            43 => 
            array (
                'id' => 68,
                'body_temp' => 98.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:19',
                'updated_at' => '2018-02-09 11:09:19',
                'try' => '2018-02-09 11:09:19',
            ),
            44 => 
            array (
                'id' => 69,
                'body_temp' => 99.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:22',
                'updated_at' => '2018-02-09 11:09:22',
                'try' => '2018-02-09 11:09:22',
            ),
            45 => 
            array (
                'id' => 70,
                'body_temp' => 58.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:25',
                'updated_at' => '2018-03-06 18:22:50',
                'try' => '2018-03-06 18:22:50',
            ),
            46 => 
            array (
                'id' => 71,
                'body_temp' => 99.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:37',
                'updated_at' => '2018-02-09 11:09:37',
                'try' => '2018-02-09 11:09:37',
            ),
            47 => 
            array (
                'id' => 72,
                'body_temp' => 93.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:41',
                'updated_at' => '2018-02-09 11:09:41',
                'try' => '2018-02-09 11:09:41',
            ),
            48 => 
            array (
                'id' => 73,
                'body_temp' => 14.0,
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:46',
                'updated_at' => '2018-09-03 01:05:29',
                'try' => '2018-09-03 18:22:28',
            ),
            49 => 
            array (
                'id' => 74,
                'body_temp' => 93.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:10:01',
                'updated_at' => '2018-02-09 11:10:01',
                'try' => '2018-02-09 11:10:01',
            ),
            50 => 
            array (
                'id' => 75,
                'body_temp' => 97.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:51',
                'updated_at' => '2018-02-09 11:14:51',
                'try' => '2018-02-09 11:14:51',
            ),
            51 => 
            array (
                'id' => 76,
                'body_temp' => 97.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:55',
                'updated_at' => '2018-02-09 11:14:55',
                'try' => '2018-02-09 11:14:55',
            ),
            52 => 
            array (
                'id' => 77,
                'body_temp' => 96.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:59',
                'updated_at' => '2018-02-09 11:14:59',
                'try' => '2018-02-09 11:14:59',
            ),
            53 => 
            array (
                'id' => 78,
                'body_temp' => 97.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:02',
                'updated_at' => '2018-02-09 11:15:02',
                'try' => '2018-02-09 11:15:02',
            ),
            54 => 
            array (
                'id' => 79,
                'body_temp' => 98.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:06',
                'updated_at' => '2018-02-09 11:15:06',
                'try' => '2018-02-09 11:15:06',
            ),
            55 => 
            array (
                'id' => 80,
                'body_temp' => 93.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:10',
                'updated_at' => '2018-02-09 11:15:10',
                'try' => '2018-02-09 11:15:10',
            ),
            56 => 
            array (
                'id' => 81,
                'body_temp' => 99.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:14',
                'updated_at' => '2018-02-09 11:15:14',
                'try' => '2018-02-09 11:15:14',
            ),
            57 => 
            array (
                'id' => 82,
                'body_temp' => 95.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:18',
                'updated_at' => '2018-02-09 11:15:18',
                'try' => '2018-02-09 11:15:18',
            ),
            58 => 
            array (
                'id' => 83,
                'body_temp' => 97.0,
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:22',
                'updated_at' => '2018-09-03 01:05:19',
                'try' => '2018-09-03 18:22:28',
            ),
            59 => 
            array (
                'id' => 84,
                'body_temp' => 96.0,
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:25',
                'updated_at' => '2018-09-03 01:05:33',
                'try' => '2018-09-03 18:22:28',
            ),
            60 => 
            array (
                'id' => 85,
                'body_temp' => 93.0,
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-03-06 11:15:29',
                'updated_at' => '2018-09-03 01:05:38',
                'try' => '2018-09-03 18:22:28',
            ),
            61 => 
            array (
                'id' => 86,
                'body_temp' => 97.0,
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-13 11:15:33',
                'updated_at' => '2018-09-03 01:05:42',
                'try' => '2018-09-03 18:22:28',
            ),
            62 => 
            array (
                'id' => 87,
                'body_temp' => 97.0,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:36',
                'updated_at' => '2018-02-09 11:15:36',
                'try' => '2018-02-09 11:15:36',
            ),
            63 => 
            array (
                'id' => 89,
                'body_temp' => 102.0,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '9732',
                'created_at' => '2018-08-29 21:42:00',
                'updated_at' => '2018-08-29 01:50:11',
                'try' => '2018-08-06 00:17:23',
            ),
        ));
        
        
    }
}