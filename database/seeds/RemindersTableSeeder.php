<?php

use Illuminate\Database\Seeder;

class RemindersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reminders')->delete();
        
        \DB::table('reminders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 20,
                'code' => '5WZGnM3VDEy7zEpH4vPUP45qmqclp2yq',
                'completed' => 1,
                'completed_at' => '2018-01-11 23:46:01',
                'created_at' => '2018-01-11 22:39:32',
                'updated_at' => '2018-01-11 23:46:01',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 61,
                'code' => 'ovIdU10eWxuaQzcQSx7TjPoWmmpb4zwv',
                'completed' => 1,
                'completed_at' => '2018-04-12 13:29:31',
                'created_at' => '2018-04-12 13:20:37',
                'updated_at' => '2018-04-12 13:29:31',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 23,
                'code' => '90foOGDFO00VbnH6tK6AKRVly3OxYUtx',
                'completed' => 1,
                'completed_at' => '2018-05-29 16:30:07',
                'created_at' => '2018-05-29 16:18:30',
                'updated_at' => '2018-05-29 16:30:07',
            ),
        ));
        
        
    }
}