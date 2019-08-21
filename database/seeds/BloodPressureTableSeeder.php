<?php

use Illuminate\Database\Seeder;

class BloodPressureTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blood_pressure')->delete();
        
        \DB::table('blood_pressure')->insert(array (
            0 => 
            array (
                'id' => 1,
                'systolic' => '85',
                'diastolic' => '88',
                'patient_issue_id' => 45,
                'patienthistory_assin' => '875',
                'created_at' => '2018-01-10 02:21:01',
                'updated_at' => '2018-01-25 05:14:14',
                'try' => '2018-01-25 05:14:14',
            ),
            1 => 
            array (
                'id' => 2,
                'systolic' => '889',
                'diastolic' => '54',
                'patient_issue_id' => 24,
                'patienthistory_assin' => '875',
                'created_at' => '2018-01-10 02:28:24',
                'updated_at' => '2018-01-10 02:28:24',
                'try' => '2018-01-25 03:28:32',
            ),
            2 => 
            array (
                'id' => 3,
                'systolic' => '889',
                'diastolic' => '54',
                'patient_issue_id' => 24,
                'patienthistory_assin' => '875',
                'created_at' => '2018-01-10 02:29:39',
                'updated_at' => '2018-01-10 02:29:39',
                'try' => '2018-01-25 03:28:32',
            ),
            3 => 
            array (
                'id' => 4,
                'systolic' => '889',
                'diastolic' => '54',
                'patient_issue_id' => 24,
                'patienthistory_assin' => '875',
                'created_at' => '2018-01-10 02:30:03',
                'updated_at' => '2018-01-10 02:30:03',
                'try' => '2018-01-25 03:28:32',
            ),
            4 => 
            array (
                'id' => 5,
                'systolic' => '589',
                'diastolic' => '54',
                'patient_issue_id' => 84,
                'patienthistory_assin' => '85',
                'created_at' => '2018-01-10 02:31:04',
                'updated_at' => '2018-01-10 02:31:04',
                'try' => '2018-01-25 03:28:32',
            ),
            5 => 
            array (
                'id' => 6,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:32:16',
                'updated_at' => '2018-01-10 02:32:16',
                'try' => '2018-01-25 03:28:32',
            ),
            6 => 
            array (
                'id' => 7,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:33:08',
                'updated_at' => '2018-01-10 02:33:08',
                'try' => '2018-01-25 03:28:32',
            ),
            7 => 
            array (
                'id' => 8,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 45,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:33:36',
                'updated_at' => '2018-01-25 00:52:13',
                'try' => '2018-01-25 03:28:32',
            ),
            8 => 
            array (
                'id' => 9,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:53',
                'updated_at' => '2018-01-10 02:35:53',
                'try' => '2018-01-25 03:28:32',
            ),
            9 => 
            array (
                'id' => 10,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:56',
                'updated_at' => '2018-01-10 02:35:56',
                'try' => '2018-01-25 03:28:32',
            ),
            10 => 
            array (
                'id' => 11,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:58',
                'updated_at' => '2018-01-10 02:35:58',
                'try' => '2018-01-25 03:28:32',
            ),
            11 => 
            array (
                'id' => 12,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:35:59',
                'updated_at' => '2018-01-10 02:35:59',
                'try' => '2018-01-25 03:28:32',
            ),
            12 => 
            array (
                'id' => 13,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:00',
                'updated_at' => '2018-01-10 02:36:00',
                'try' => '2018-01-25 03:28:32',
            ),
            13 => 
            array (
                'id' => 14,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:01',
                'updated_at' => '2018-01-10 02:36:01',
                'try' => '2018-01-25 03:28:32',
            ),
            14 => 
            array (
                'id' => 15,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:02',
                'updated_at' => '2018-01-10 02:36:02',
                'try' => '2018-01-25 03:28:32',
            ),
            15 => 
            array (
                'id' => 16,
                'systolic' => '589',
                'diastolic' => '44',
                'patient_issue_id' => 54,
                'patienthistory_assin' => '55',
                'created_at' => '2018-01-10 02:36:04',
                'updated_at' => '2018-01-10 02:36:04',
                'try' => '2018-01-25 03:28:32',
            ),
            16 => 
            array (
                'id' => 17,
                'systolic' => '59',
                'diastolic' => '4',
                'patient_issue_id' => 24,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 16:52:47',
                'updated_at' => '2018-01-10 16:52:47',
                'try' => '2018-01-25 03:28:32',
            ),
            17 => 
            array (
                'id' => 18,
                'systolic' => '59',
                'diastolic' => '4',
                'patient_issue_id' => 34,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 16:53:47',
                'updated_at' => '2018-01-10 16:53:47',
                'try' => '2018-01-25 03:28:32',
            ),
            18 => 
            array (
                'id' => 19,
                'systolic' => '59',
                'diastolic' => '4',
                'patient_issue_id' => 34,
                'patienthistory_assin' => '35',
                'created_at' => '2018-01-10 20:14:06',
                'updated_at' => '2018-01-10 20:14:06',
                'try' => '2018-01-25 03:28:32',
            ),
            19 => 
            array (
                'id' => 20,
                'systolic' => '45',
                'diastolic' => '55',
                'patient_issue_id' => 45,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:49:52',
                'updated_at' => '2018-08-29 00:27:50',
                'try' => '2018-08-29 00:27:50',
            ),
            20 => 
            array (
                'id' => 21,
                'systolic' => '99',
                'diastolic' => '120',
                'patient_issue_id' => 45,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:52:39',
                'updated_at' => '2018-02-05 21:52:39',
                'try' => '2018-02-05 21:52:39',
            ),
            21 => 
            array (
                'id' => 22,
                'systolic' => '86',
                'diastolic' => '88',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-05 21:54:35',
                'updated_at' => '2018-02-05 21:58:05',
                'try' => '2018-02-05 21:58:05',
            ),
            22 => 
            array (
                'id' => 23,
                'systolic' => '152',
                'diastolic' => '160',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:40',
                'updated_at' => '2018-02-06 02:49:40',
                'try' => '2018-02-06 02:49:40',
            ),
            23 => 
            array (
                'id' => 24,
                'systolic' => '152',
                'diastolic' => '160',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:44',
                'updated_at' => '2018-02-06 02:49:44',
                'try' => '2018-02-06 02:49:44',
            ),
            24 => 
            array (
                'id' => 25,
                'systolic' => '152',
                'diastolic' => '160',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:46',
                'updated_at' => '2018-02-06 02:49:46',
                'try' => '2018-02-06 02:49:46',
            ),
            25 => 
            array (
                'id' => 26,
                'systolic' => '152',
                'diastolic' => '160',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:48',
                'updated_at' => '2018-02-06 02:49:48',
                'try' => '2018-02-06 02:49:48',
            ),
            26 => 
            array (
                'id' => 27,
                'systolic' => '152',
                'diastolic' => '160',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:50',
                'updated_at' => '2018-02-06 02:49:50',
                'try' => '2018-02-06 02:49:50',
            ),
            27 => 
            array (
                'id' => 28,
                'systolic' => '152',
                'diastolic' => '160',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:49:51',
                'updated_at' => '2018-02-06 02:49:51',
                'try' => '2018-02-06 02:49:51',
            ),
            28 => 
            array (
                'id' => 29,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:14',
                'updated_at' => '2018-02-06 02:50:14',
                'try' => '2018-02-06 02:50:13',
            ),
            29 => 
            array (
                'id' => 30,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:17',
                'updated_at' => '2018-02-06 02:50:17',
                'try' => '2018-02-06 02:50:17',
            ),
            30 => 
            array (
                'id' => 31,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:20',
                'updated_at' => '2018-02-06 02:50:20',
                'try' => '2018-02-06 02:50:20',
            ),
            31 => 
            array (
                'id' => 32,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:22',
                'updated_at' => '2018-02-06 02:50:22',
                'try' => '2018-02-06 02:50:22',
            ),
            32 => 
            array (
                'id' => 33,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:23',
                'updated_at' => '2018-02-06 02:50:23',
                'try' => '2018-02-06 02:50:23',
            ),
            33 => 
            array (
                'id' => 34,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:23',
                'updated_at' => '2018-02-06 02:50:23',
                'try' => '2018-02-06 02:50:23',
            ),
            34 => 
            array (
                'id' => 35,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:24',
                'updated_at' => '2018-02-06 02:50:24',
                'try' => '2018-02-06 02:50:24',
            ),
            35 => 
            array (
                'id' => 36,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:25',
                'updated_at' => '2018-02-06 02:50:25',
                'try' => '2018-02-06 02:50:25',
            ),
            36 => 
            array (
                'id' => 37,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:26',
                'updated_at' => '2018-02-06 02:50:26',
                'try' => '2018-02-06 02:50:26',
            ),
            37 => 
            array (
                'id' => 38,
                'systolic' => '152',
                'diastolic' => '150',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-06 02:50:26',
                'updated_at' => '2018-02-06 02:50:26',
                'try' => '2018-02-06 02:50:26',
            ),
            38 => 
            array (
                'id' => 39,
                'systolic' => '122',
                'diastolic' => '250',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:11',
                'updated_at' => '2018-02-09 01:56:11',
                'try' => '2018-02-09 01:56:11',
            ),
            39 => 
            array (
                'id' => 40,
                'systolic' => '122',
                'diastolic' => '550',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:21',
                'updated_at' => '2018-02-09 01:56:21',
                'try' => '2018-02-09 01:56:21',
            ),
            40 => 
            array (
                'id' => 41,
                'systolic' => '122',
                'diastolic' => '550',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 01:56:31',
                'updated_at' => '2018-02-09 01:56:31',
                'try' => '2018-02-09 01:56:31',
            ),
            41 => 
            array (
                'id' => 42,
                'systolic' => '122',
                'diastolic' => '550',
                'patient_issue_id' => 224,
                'patienthistory_assin' => '875',
                'created_at' => '2018-02-09 04:19:08',
                'updated_at' => '2018-02-09 04:19:08',
                'try' => '2018-02-09 04:19:08',
            ),
            42 => 
            array (
                'id' => 43,
                'systolic' => '94',
                'diastolic' => '86',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:09',
                'updated_at' => '2018-02-09 06:10:09',
                'try' => '2018-02-09 06:10:09',
            ),
            43 => 
            array (
                'id' => 44,
                'systolic' => '94',
                'diastolic' => '86',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:25',
                'updated_at' => '2018-02-09 06:10:25',
                'try' => '2018-02-09 06:10:25',
            ),
            44 => 
            array (
                'id' => 45,
                'systolic' => '94',
                'diastolic' => '86',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:27',
                'updated_at' => '2018-02-09 06:10:27',
                'try' => '2018-02-09 06:10:27',
            ),
            45 => 
            array (
                'id' => 46,
                'systolic' => '94',
                'diastolic' => '86',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:28',
                'updated_at' => '2018-02-09 06:10:28',
                'try' => '2018-02-09 06:10:28',
            ),
            46 => 
            array (
                'id' => 47,
                'systolic' => '94',
                'diastolic' => '86',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:10:31',
                'updated_at' => '2018-02-09 06:10:31',
                'try' => '2018-02-09 06:10:31',
            ),
            47 => 
            array (
                'id' => 48,
                'systolic' => '110',
                'diastolic' => '62',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:11:19',
                'updated_at' => '2018-02-09 06:11:19',
                'try' => '2018-02-09 06:11:19',
            ),
            48 => 
            array (
                'id' => 49,
                'systolic' => '91',
                'diastolic' => '66',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:11:38',
                'updated_at' => '2018-02-09 06:11:38',
                'try' => '2018-02-09 06:11:38',
            ),
            49 => 
            array (
                'id' => 50,
                'systolic' => '117',
                'diastolic' => '87',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:12:08',
                'updated_at' => '2018-02-09 06:12:08',
                'try' => '2018-02-09 06:12:08',
            ),
            50 => 
            array (
                'id' => 51,
                'systolic' => '101',
                'diastolic' => '63',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:14:16',
                'updated_at' => '2018-02-09 06:14:16',
                'try' => '2018-02-09 06:14:16',
            ),
            51 => 
            array (
                'id' => 52,
                'systolic' => '108',
                'diastolic' => '86',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:42',
                'updated_at' => '2018-02-09 06:19:42',
                'try' => '2018-02-09 06:19:42',
            ),
            52 => 
            array (
                'id' => 53,
                'systolic' => '94',
                'diastolic' => '63',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:47',
                'updated_at' => '2018-02-09 06:19:47',
                'try' => '2018-02-09 06:19:47',
            ),
            53 => 
            array (
                'id' => 54,
                'systolic' => '109',
                'diastolic' => '85',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:51',
                'updated_at' => '2018-02-09 06:19:51',
                'try' => '2018-02-09 06:19:51',
            ),
            54 => 
            array (
                'id' => 55,
                'systolic' => '224',
                'diastolic' => '67',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-08-29 06:19:54',
                'updated_at' => '2018-08-29 01:32:58',
                'try' => '2018-08-29 01:32:58',
            ),
            55 => 
            array (
                'id' => 56,
                'systolic' => '81',
                'diastolic' => '94',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:19:57',
                'updated_at' => '2018-08-29 01:29:00',
                'try' => '2018-08-29 01:29:00',
            ),
            56 => 
            array (
                'id' => 57,
                'systolic' => '80',
                'diastolic' => '64',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:20:01',
                'updated_at' => '2018-02-09 06:20:01',
                'try' => '2018-02-09 06:20:01',
            ),
            57 => 
            array (
                'id' => 58,
                'systolic' => '97',
                'diastolic' => '86',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 06:20:04',
                'updated_at' => '2018-02-09 06:20:04',
                'try' => '2018-02-09 06:20:04',
            ),
            58 => 
            array (
                'id' => 59,
                'systolic' => '96',
                'diastolic' => '55',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 08:54:59',
                'updated_at' => '2018-02-09 08:54:59',
                'try' => '2018-02-09 08:54:59',
            ),
            59 => 
            array (
                'id' => 60,
                'systolic' => '98',
                'diastolic' => '88',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-08-29 09:27:56',
                'updated_at' => '2018-08-29 00:29:17',
                'try' => '2018-08-29 00:29:17',
            ),
            60 => 
            array (
                'id' => 61,
                'systolic' => '86',
                'diastolic' => '98',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 10:58:39',
                'updated_at' => '2018-02-09 10:58:39',
                'try' => '2018-02-09 10:58:39',
            ),
            61 => 
            array (
                'id' => 62,
                'systolic' => '82',
                'diastolic' => '62',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:27',
                'updated_at' => '2018-09-03 01:17:58',
                'try' => '2018-09-03 11:04:27',
            ),
            62 => 
            array (
                'id' => 63,
                'systolic' => '92',
                'diastolic' => '95',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:32',
                'updated_at' => '2018-09-03 01:18:07',
                'try' => '2018-09-03 11:04:27',
            ),
            63 => 
            array (
                'id' => 64,
                'systolic' => '87',
                'diastolic' => '98',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:35',
                'updated_at' => '2018-09-03 01:18:12',
                'try' => '2018-09-03 11:04:27',
            ),
            64 => 
            array (
                'id' => 65,
                'systolic' => '97',
                'diastolic' => '97',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:38',
                'updated_at' => '2018-09-03 01:18:16',
                'try' => '2018-09-03 11:04:27',
            ),
            65 => 
            array (
                'id' => 66,
                'systolic' => '117',
                'diastolic' => '66',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:42',
                'updated_at' => '2018-09-03 01:18:20',
                'try' => '2018-09-03 11:04:27',
            ),
            66 => 
            array (
                'id' => 67,
                'systolic' => '92',
                'diastolic' => '91',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:45',
                'updated_at' => '2018-09-03 01:18:31',
                'try' => '2018-09-03 11:04:27',
            ),
            67 => 
            array (
                'id' => 68,
                'systolic' => '99',
                'diastolic' => '83',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:49',
                'updated_at' => '2018-09-03 01:18:35',
                'try' => '2018-09-03 11:04:27',
            ),
            68 => 
            array (
                'id' => 69,
                'systolic' => '88',
                'diastolic' => '81',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 11:04:52',
                'updated_at' => '2018-09-03 01:18:41',
                'try' => '2018-09-03 11:04:27',
            ),
            69 => 
            array (
                'id' => 70,
                'systolic' => '104',
                'diastolic' => '60',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:14',
                'updated_at' => '2018-09-03 01:29:17',
                'try' => '2018-09-03 01:29:17',
            ),
            70 => 
            array (
                'id' => 71,
                'systolic' => '99',
                'diastolic' => '96',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:18',
                'updated_at' => '2018-09-03 01:30:10',
                'try' => '2018-09-03 11:09:18',
            ),
            71 => 
            array (
                'id' => 72,
                'systolic' => '87',
                'diastolic' => '92',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:22',
                'updated_at' => '2018-09-03 01:30:23',
                'try' => '2018-09-03 11:09:22',
            ),
            72 => 
            array (
                'id' => 73,
                'systolic' => '86',
                'diastolic' => '92',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:25',
                'updated_at' => '2018-09-03 01:30:42',
                'try' => '2018-09-03 11:09:25',
            ),
            73 => 
            array (
                'id' => 74,
                'systolic' => '101',
                'diastolic' => '92',
                'patient_issue_id' => 49945782,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:37',
                'updated_at' => '2018-09-03 01:30:56',
                'try' => '2018-09-03 11:09:37',
            ),
            74 => 
            array (
                'id' => 75,
                'systolic' => '81',
                'diastolic' => '74',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:40',
                'updated_at' => '2018-09-03 01:31:10',
                'try' => '2018-09-03 11:09:40',
            ),
            75 => 
            array (
                'id' => 76,
                'systolic' => '108',
                'diastolic' => '94',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:09:46',
                'updated_at' => '2018-09-03 01:31:24',
                'try' => '2018-09-03 11:09:46',
            ),
            76 => 
            array (
                'id' => 77,
                'systolic' => '86',
                'diastolic' => '74',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:10:00',
                'updated_at' => '2018-02-09 11:10:00',
                'try' => '2018-02-09 11:10:00',
            ),
            77 => 
            array (
                'id' => 78,
                'systolic' => '114',
                'diastolic' => '60',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:50',
                'updated_at' => '2018-02-09 11:14:50',
                'try' => '2018-02-09 11:14:50',
            ),
            78 => 
            array (
                'id' => 79,
                'systolic' => '98',
                'diastolic' => '84',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:54',
                'updated_at' => '2018-02-09 11:14:54',
                'try' => '2018-02-09 11:14:54',
            ),
            79 => 
            array (
                'id' => 80,
                'systolic' => '112',
                'diastolic' => '74',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:14:58',
                'updated_at' => '2018-02-09 11:14:58',
                'try' => '2018-02-09 11:14:58',
            ),
            80 => 
            array (
                'id' => 81,
                'systolic' => '108',
                'diastolic' => '76',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:02',
                'updated_at' => '2018-02-09 11:15:02',
                'try' => '2018-02-09 11:15:02',
            ),
            81 => 
            array (
                'id' => 82,
                'systolic' => '92',
                'diastolic' => '66',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:06',
                'updated_at' => '2018-02-09 11:15:06',
                'try' => '2018-02-09 11:15:06',
            ),
            82 => 
            array (
                'id' => 83,
                'systolic' => '80',
                'diastolic' => '70',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:10',
                'updated_at' => '2018-02-09 11:15:10',
                'try' => '2018-02-09 11:15:10',
            ),
            83 => 
            array (
                'id' => 84,
                'systolic' => '92',
                'diastolic' => '60',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:14',
                'updated_at' => '2018-02-09 11:15:14',
                'try' => '2018-02-09 11:15:14',
            ),
            84 => 
            array (
                'id' => 85,
                'systolic' => '96',
                'diastolic' => '64',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:18',
                'updated_at' => '2018-02-09 11:15:18',
                'try' => '2018-02-09 11:15:18',
            ),
            85 => 
            array (
                'id' => 86,
                'systolic' => '113',
                'diastolic' => '76',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:22',
                'updated_at' => '2018-02-09 11:15:22',
                'try' => '2018-02-09 11:15:22',
            ),
            86 => 
            array (
                'id' => 87,
                'systolic' => '113',
                'diastolic' => '68',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:25',
                'updated_at' => '2018-02-09 11:15:25',
                'try' => '2018-02-09 11:15:25',
            ),
            87 => 
            array (
                'id' => 88,
                'systolic' => '108',
                'diastolic' => '64',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:29',
                'updated_at' => '2018-02-09 11:15:29',
                'try' => '2018-02-09 11:15:29',
            ),
            88 => 
            array (
                'id' => 89,
                'systolic' => '92',
                'diastolic' => '93',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:32',
                'updated_at' => '2018-02-09 11:15:32',
                'try' => '2018-02-09 11:15:32',
            ),
            89 => 
            array (
                'id' => 90,
                'systolic' => '116',
                'diastolic' => '76',
                'patient_issue_id' => 99463583,
                'patienthistory_assin' => '52383949',
                'created_at' => '2018-02-09 11:15:36',
                'updated_at' => '2018-02-09 11:15:36',
                'try' => '2018-02-09 11:15:36',
            ),
            90 => 
            array (
                'id' => 91,
                'systolic' => '83',
                'diastolic' => '93',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 14:41:43',
                'updated_at' => '2018-02-09 14:41:43',
                'try' => '2018-02-09 14:41:43',
            ),
            91 => 
            array (
                'id' => 92,
                'systolic' => '81',
                'diastolic' => '61',
                'patient_issue_id' => 15,
                'patienthistory_assin' => '224',
                'created_at' => '2018-02-09 14:42:23',
                'updated_at' => '2018-02-09 14:42:23',
                'try' => '2018-02-09 14:42:23',
            ),
        ));
        
        
    }
}