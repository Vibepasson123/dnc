<?php

use Illuminate\Database\Seeder;

class BandTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('band')->delete();
        
        \DB::table('band')->insert(array (
            0 => 
            array (
                'band_id' => '11',
                'mac_id' => '45',
                'ipaddress' => '3434',
                'created_at' => '2017-11-24 23:37:21',
                'updated_at' => '2018-08-28 23:13:47',
                'status' => 2,
                'problem' => NULL,
            ),
            1 => 
            array (
                'band_id' => '121',
                'mac_id' => 'asas',
                'ipaddress' => 'dssds',
                'created_at' => '2017-11-29 17:21:13',
                'updated_at' => '2018-09-02 00:44:58',
                'status' => 1,
                'problem' => NULL,
            ),
            2 => 
            array (
                'band_id' => '14',
                'mac_id' => '455',
                'ipaddress' => '45545',
                'created_at' => '2017-11-24 20:06:14',
                'updated_at' => '2018-08-26 20:53:00',
                'status' => 2,
                'problem' => NULL,
            ),
            3 => 
            array (
                'band_id' => '17',
                'mac_id' => 'dfgh',
                'ipaddress' => 'asfdfg',
                'created_at' => '2017-12-26 21:04:36',
                'updated_at' => '2018-08-29 00:14:57',
                'status' => 2,
                'problem' => 'fkdfkfjndvjksndjk',
            ),
            4 => 
            array (
                'band_id' => '2',
                'mac_id' => '66',
                'ipaddress' => 'rerr33',
                'created_at' => '2017-11-24 23:35:55',
                'updated_at' => '2018-05-29 13:21:51',
                'status' => 3,
                'problem' => 'nskdsjks',
            ),
            5 => 
            array (
                'band_id' => '21',
                'mac_id' => '12',
                'ipaddress' => 'mbjbj',
                'created_at' => '2017-12-26 23:34:04',
                'updated_at' => '2017-12-27 02:04:20',
                'status' => 3,
                'problem' => '21 was having light problem',
            ),
            6 => 
            array (
                'band_id' => '22',
                'mac_id' => 'sd',
                'ipaddress' => 'ojkh',
                'created_at' => '2017-12-26 23:34:27',
                'updated_at' => '2018-08-26 20:51:36',
                'status' => 2,
                'problem' => NULL,
            ),
            7 => 
            array (
                'band_id' => '23',
                'mac_id' => 'ssxsx',
                'ipaddress' => 'lljjhv',
                'created_at' => '2017-12-26 23:34:54',
                'updated_at' => '2018-09-27 20:02:23',
                'status' => 1,
                'problem' => NULL,
            ),
            8 => 
            array (
                'band_id' => '24',
                'mac_id' => 'sxsx',
                'ipaddress' => 'sdsdxs',
                'created_at' => '2017-12-26 23:35:28',
                'updated_at' => '2018-09-03 00:03:46',
                'status' => 2,
                'problem' => NULL,
            ),
            9 => 
            array (
                'band_id' => '26',
                'mac_id' => 'gp',
                'ipaddress' => 'jd',
                'created_at' => '2017-12-26 23:49:10',
                'updated_at' => '2018-12-02 16:48:46',
                'status' => 1,
                'problem' => NULL,
            ),
            10 => 
            array (
                'band_id' => '3',
                'mac_id' => '87yyy',
                'ipaddress' => 'eeert',
                'created_at' => '2017-11-24 23:36:27',
                'updated_at' => '2018-08-28 23:15:15',
                'status' => 1,
                'problem' => NULL,
            ),
            11 => 
            array (
                'band_id' => '5',
                'mac_id' => 'hjjkhj',
                'ipaddress' => 'fghhjbnm',
                'created_at' => '2017-12-26 21:03:13',
                'updated_at' => '2018-06-06 14:04:39',
                'status' => 3,
                'problem' => 'dkjvhdflskujerçoifj',
            ),
            12 => 
            array (
                'band_id' => '6',
                'mac_id' => 'dfgb',
                'ipaddress' => 'wedfg',
                'created_at' => '2017-12-26 21:04:13',
                'updated_at' => '2018-08-28 23:14:43',
                'status' => 2,
                'problem' => NULL,
            ),
            13 => 
            array (
                'band_id' => '8',
                'mac_id' => 'kjlgj',
                'ipaddress' => 'dfsdg',
                'created_at' => '2017-12-26 21:03:44',
                'updated_at' => '2018-08-26 20:53:22',
                'status' => 2,
                'problem' => NULL,
            ),
        ));
        
        
    }
}