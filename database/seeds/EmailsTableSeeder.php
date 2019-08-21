<?php

use Illuminate\Database\Seeder;

class EmailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('emails')->delete();
        
        \DB::table('emails')->insert(array (
            0 => 
            array (
                'id' => 1,
                'from' => 2,
                'to' => 4,
                'read' => 0,
                'text' => 'wdesvdfxcdfscds',
                'created_at' => '2018-07-09 00:00:00',
                'updated_at' => '2018-07-09 00:00:00',
                'subject' => '',
                'CC' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'from' => 4,
                'to' => 5,
                'read' => 0,
                'text' => 'dsdscdsxcsdcsdx',
                'created_at' => '2018-07-09 00:00:00',
                'updated_at' => '2018-07-09 00:00:00',
                'subject' => '',
                'CC' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'from' => 4,
                'to' => 1,
                'read' => 0,
                'text' => 'dzxcsdxzcdsx',
                'created_at' => '2018-07-02 00:00:00',
                'updated_at' => '2018-07-09 00:00:00',
                'subject' => '',
                'CC' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'from' => 6,
                'to' => 2,
                'read' => 0,
                'text' => 'dzxcdszxcdsxz',
                'created_at' => '2018-07-09 00:00:00',
                'updated_at' => '2018-07-09 00:00:00',
                'subject' => '',
                'CC' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'from' => 5,
                'to' => 3,
                'read' => 0,
                'text' => 'dzcxsdcdsx',
                'created_at' => '2018-07-03 00:00:00',
                'updated_at' => '2018-07-09 00:00:00',
                'subject' => '',
                'CC' => '',
            ),
        ));
        
        
    }
}