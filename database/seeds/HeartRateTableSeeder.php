<?php

use Illuminate\Database\Seeder;

class HeartRateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('heart_rate')->delete();
        
        \DB::table('heart_rate')->insert(array (
            0 => 
            array (
                'id' => 1,
                'BPM' => 20,
                'patient_issue_id' => 1,
                'patienthistory_assin' => '875',
                'created_at' => '2018-01-10 02:30:03',
                'updated_at' => '2018-01-22 00:00:05',
            ),
            1 => 
            array (
                'id' => 2,
                'BPM' => 40,
                'patient_issue_id' => 84,
                'patienthistory_assin' => '85',
                'created_at' => '2018-01-10 02:31:04',
                'updated_at' => '2018-01-10 02:31:04',
            ),
            2 => 
            array (
                'id' => 3,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:32:16',
                'updated_at' => '2018-01-10 02:32:16',
            ),
            3 => 
            array (
                'id' => 4,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:33:08',
                'updated_at' => '2018-01-10 02:33:08',
            ),
            4 => 
            array (
                'id' => 5,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:33:37',
                'updated_at' => '2018-01-10 02:33:37',
            ),
            5 => 
            array (
                'id' => 6,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:53',
                'updated_at' => '2018-01-10 02:35:53',
            ),
            6 => 
            array (
                'id' => 7,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:57',
                'updated_at' => '2018-01-10 02:35:57',
            ),
            7 => 
            array (
                'id' => 8,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:58',
                'updated_at' => '2018-01-10 02:35:58',
            ),
            8 => 
            array (
                'id' => 9,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:59',
                'updated_at' => '2018-01-10 02:35:59',
            ),
            9 => 
            array (
                'id' => 10,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:00',
                'updated_at' => '2018-01-10 02:36:00',
            ),
            10 => 
            array (
                'id' => 11,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:01',
                'updated_at' => '2018-01-10 02:36:01',
            ),
            11 => 
            array (
                'id' => 12,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:03',
                'updated_at' => '2018-01-10 02:36:03',
            ),
            12 => 
            array (
                'id' => 13,
                'BPM' => 50,
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:04',
                'updated_at' => '2018-01-10 02:36:04',
            ),
            13 => 
            array (
                'id' => 14,
                'BPM' => 50,
                'patient_issue_id' => 24,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 16:52:47',
                'updated_at' => '2018-01-10 16:52:47',
            ),
            14 => 
            array (
                'id' => 15,
                'BPM' => 50,
                'patient_issue_id' => 34,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 16:53:47',
                'updated_at' => '2018-01-10 16:53:47',
            ),
            15 => 
            array (
                'id' => 16,
                'BPM' => 50,
                'patient_issue_id' => 34,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 20:14:06',
                'updated_at' => '2018-01-10 20:14:06',
            ),
            16 => 
            array (
                'id' => 17,
                'BPM' => 20,
                'patient_issue_id' => 45,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:49:52',
                'updated_at' => '2018-02-05 21:49:52',
            ),
            17 => 
            array (
                'id' => 18,
                'BPM' => 20,
                'patient_issue_id' => 45,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:52:39',
                'updated_at' => '2018-02-05 21:52:39',
            ),
            18 => 
            array (
                'id' => 19,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:54:35',
                'updated_at' => '2018-02-05 21:54:35',
            ),
            19 => 
            array (
                'id' => 20,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:40',
                'updated_at' => '2018-02-06 02:49:40',
            ),
            20 => 
            array (
                'id' => 21,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:44',
                'updated_at' => '2018-02-06 02:49:44',
            ),
            21 => 
            array (
                'id' => 22,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:46',
                'updated_at' => '2018-02-06 02:49:46',
            ),
            22 => 
            array (
                'id' => 23,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:48',
                'updated_at' => '2018-02-06 02:49:48',
            ),
            23 => 
            array (
                'id' => 24,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:50',
                'updated_at' => '2018-02-06 02:49:50',
            ),
            24 => 
            array (
                'id' => 25,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:51',
                'updated_at' => '2018-02-06 02:49:51',
            ),
            25 => 
            array (
                'id' => 26,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:14',
                'updated_at' => '2018-02-06 02:50:14',
            ),
            26 => 
            array (
                'id' => 27,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:17',
                'updated_at' => '2018-02-06 02:50:17',
            ),
            27 => 
            array (
                'id' => 28,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:21',
                'updated_at' => '2018-02-06 02:50:21',
            ),
            28 => 
            array (
                'id' => 29,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:22',
                'updated_at' => '2018-02-06 02:50:22',
            ),
            29 => 
            array (
                'id' => 30,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:23',
                'updated_at' => '2018-02-06 02:50:23',
            ),
            30 => 
            array (
                'id' => 31,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:23',
                'updated_at' => '2018-02-06 02:50:23',
            ),
            31 => 
            array (
                'id' => 32,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:24',
                'updated_at' => '2018-02-06 02:50:24',
            ),
            32 => 
            array (
                'id' => 33,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:25',
                'updated_at' => '2018-02-06 02:50:25',
            ),
            33 => 
            array (
                'id' => 34,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:26',
                'updated_at' => '2018-02-06 02:50:26',
            ),
            34 => 
            array (
                'id' => 35,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:26',
                'updated_at' => '2018-02-06 02:50:26',
            ),
            35 => 
            array (
                'id' => 36,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:11',
                'updated_at' => '2018-02-09 01:56:11',
            ),
            36 => 
            array (
                'id' => 37,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:21',
                'updated_at' => '2018-02-09 01:56:21',
            ),
            37 => 
            array (
                'id' => 38,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:31',
                'updated_at' => '2018-02-09 01:56:31',
            ),
            38 => 
            array (
                'id' => 39,
                'BPM' => 20,
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 04:19:09',
                'updated_at' => '2018-02-09 04:19:09',
            ),
            39 => 
            array (
                'id' => 40,
                'BPM' => 75,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:09',
                'updated_at' => '2018-02-09 06:10:09',
            ),
            40 => 
            array (
                'id' => 41,
                'BPM' => 75,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:25',
                'updated_at' => '2018-02-09 06:10:25',
            ),
            41 => 
            array (
                'id' => 42,
                'BPM' => 75,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:27',
                'updated_at' => '2018-02-09 06:10:27',
            ),
            42 => 
            array (
                'id' => 43,
                'BPM' => 75,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:29',
                'updated_at' => '2018-02-09 06:10:29',
            ),
            43 => 
            array (
                'id' => 44,
                'BPM' => 75,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:31',
                'updated_at' => '2018-02-09 06:10:31',
            ),
            44 => 
            array (
                'id' => 45,
                'BPM' => 83,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '5896',
                'created_at' => '2018-08-29 06:11:19',
                'updated_at' => '2018-08-29 06:11:19',
            ),
            45 => 
            array (
                'id' => 46,
                'BPM' => 109,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:11:38',
                'updated_at' => '2018-02-09 06:11:38',
            ),
            46 => 
            array (
                'id' => 47,
                'BPM' => 66,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:12:08',
                'updated_at' => '2018-02-09 06:12:08',
            ),
            47 => 
            array (
                'id' => 48,
                'BPM' => 88,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:14:16',
                'updated_at' => '2018-02-09 06:14:16',
            ),
            48 => 
            array (
                'id' => 49,
                'BPM' => 82,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:42',
                'updated_at' => '2018-08-29 06:19:42',
            ),
            49 => 
            array (
                'id' => 50,
                'BPM' => 74,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:47',
                'updated_at' => '2018-08-29 06:19:47',
            ),
            50 => 
            array (
                'id' => 51,
                'BPM' => 71,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:51',
                'updated_at' => '2018-02-09 06:19:51',
            ),
            51 => 
            array (
                'id' => 52,
                'BPM' => 97,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:54',
                'updated_at' => '2018-02-09 06:19:54',
            ),
            52 => 
            array (
                'id' => 53,
                'BPM' => 51,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:57',
                'updated_at' => '2018-02-09 06:19:57',
            ),
            53 => 
            array (
                'id' => 54,
                'BPM' => 76,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:20:01',
                'updated_at' => '2018-02-09 06:20:01',
            ),
            54 => 
            array (
                'id' => 55,
                'BPM' => 83,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:20:04',
                'updated_at' => '2018-02-09 06:20:04',
            ),
            55 => 
            array (
                'id' => 56,
                'BPM' => 69,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 08:54:59',
                'updated_at' => '2018-02-09 08:54:59',
            ),
            56 => 
            array (
                'id' => 57,
                'BPM' => 93,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 09:27:56',
                'updated_at' => '2018-02-09 09:27:56',
            ),
            57 => 
            array (
                'id' => 58,
                'BPM' => 99,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 10:58:39',
                'updated_at' => '2018-02-09 10:58:39',
            ),
            58 => 
            array (
                'id' => 59,
                'BPM' => 77,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:27',
                'updated_at' => '2018-02-09 11:04:27',
            ),
            59 => 
            array (
                'id' => 60,
                'BPM' => 76,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:32',
                'updated_at' => '2018-02-09 11:04:32',
            ),
            60 => 
            array (
                'id' => 61,
                'BPM' => 52,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:35',
                'updated_at' => '2018-02-09 11:04:35',
            ),
            61 => 
            array (
                'id' => 62,
                'BPM' => 80,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:39',
                'updated_at' => '2018-02-09 11:04:39',
            ),
            62 => 
            array (
                'id' => 63,
                'BPM' => 62,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:42',
                'updated_at' => '2018-02-09 11:04:42',
            ),
            63 => 
            array (
                'id' => 64,
                'BPM' => 103,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:45',
                'updated_at' => '2018-02-09 11:04:45',
            ),
            64 => 
            array (
                'id' => 65,
                'BPM' => 82,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:49',
                'updated_at' => '2018-02-09 11:04:49',
            ),
            65 => 
            array (
                'id' => 66,
                'BPM' => 115,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:52',
                'updated_at' => '2018-02-09 11:04:52',
            ),
            66 => 
            array (
                'id' => 67,
                'BPM' => 76,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:14',
                'updated_at' => '2018-02-09 11:09:14',
            ),
            67 => 
            array (
                'id' => 68,
                'BPM' => 108,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:19',
                'updated_at' => '2018-02-09 11:09:19',
            ),
            68 => 
            array (
                'id' => 69,
                'BPM' => 117,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:22',
                'updated_at' => '2018-02-09 11:09:22',
            ),
            69 => 
            array (
                'id' => 70,
                'BPM' => 107,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:25',
                'updated_at' => '2018-02-09 11:09:25',
            ),
            70 => 
            array (
                'id' => 71,
                'BPM' => 66,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:37',
                'updated_at' => '2018-02-09 11:09:37',
            ),
            71 => 
            array (
                'id' => 72,
                'BPM' => 82,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:41',
                'updated_at' => '2018-02-09 11:09:41',
            ),
            72 => 
            array (
                'id' => 73,
                'BPM' => 81,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:46',
                'updated_at' => '2018-02-09 11:09:46',
            ),
            73 => 
            array (
                'id' => 74,
                'BPM' => 59,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:10:00',
                'updated_at' => '2018-02-09 11:10:00',
            ),
            74 => 
            array (
                'id' => 75,
                'BPM' => 70,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:50',
                'updated_at' => '2018-02-09 11:14:50',
            ),
            75 => 
            array (
                'id' => 76,
                'BPM' => 86,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:54',
                'updated_at' => '2018-02-09 11:14:54',
            ),
            76 => 
            array (
                'id' => 77,
                'BPM' => 76,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:58',
                'updated_at' => '2018-02-09 11:14:58',
            ),
            77 => 
            array (
                'id' => 78,
                'BPM' => 64,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:02',
                'updated_at' => '2018-02-09 11:15:02',
            ),
            78 => 
            array (
                'id' => 79,
                'BPM' => 71,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:06',
                'updated_at' => '2018-02-09 11:15:06',
            ),
            79 => 
            array (
                'id' => 80,
                'BPM' => 99,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:10',
                'updated_at' => '2018-02-09 11:15:10',
            ),
            80 => 
            array (
                'id' => 81,
                'BPM' => 118,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:14',
                'updated_at' => '2018-02-09 11:15:14',
            ),
            81 => 
            array (
                'id' => 82,
                'BPM' => 55,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:18',
                'updated_at' => '2018-02-09 11:15:18',
            ),
            82 => 
            array (
                'id' => 83,
                'BPM' => 100,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:22',
                'updated_at' => '2018-02-09 11:15:22',
            ),
            83 => 
            array (
                'id' => 84,
                'BPM' => 82,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:25',
                'updated_at' => '2018-02-09 11:15:25',
            ),
            84 => 
            array (
                'id' => 85,
                'BPM' => 75,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:29',
                'updated_at' => '2018-02-09 11:15:29',
            ),
            85 => 
            array (
                'id' => 86,
                'BPM' => 76,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:32',
                'updated_at' => '2018-02-09 11:15:32',
            ),
            86 => 
            array (
                'id' => 87,
                'BPM' => 95,
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:36',
                'updated_at' => '2018-02-09 11:15:36',
            ),
            87 => 
            array (
                'id' => 88,
                'BPM' => 84,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 14:41:43',
                'updated_at' => '2018-02-09 14:41:43',
            ),
            88 => 
            array (
                'id' => 89,
                'BPM' => 93,
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 14:42:23',
                'updated_at' => '2018-02-09 14:42:23',
            ),
        ));
        
        
    }
}