<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'Viveksah2sah@gmail.com',
                'message' => 'kdkjdkljdslkjçdsk',
                'name' => 'dsijfidsjio',
                'created_at' => '2018-08-27 22:04:23',
                'updated_at' => '2018-08-27 22:04:23',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'somthing@somthing.somthing',
                'message' => 'somthing',
                'name' => 'someone',
                'created_at' => '2018-08-27 22:37:13',
                'updated_at' => '2018-08-27 22:37:13',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'somthing@somthing.somthing',
                'message' => 'somthingsadasdas',
                'name' => 'someone',
                'created_at' => '2018-08-27 22:39:56',
                'updated_at' => '2018-08-27 22:39:56',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'somthing@somthing.somthing',
                'message' => 'somthingsadasdas',
                'name' => 'someone',
                'created_at' => '2018-08-27 22:40:04',
                'updated_at' => '2018-08-27 22:40:04',
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'somthing@somthing.somthing',
                'message' => 'somthingsadasdas',
                'name' => 'asdsasa',
                'created_at' => '2018-08-27 22:40:43',
                'updated_at' => '2018-08-27 22:40:43',
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'somthing@somthing.somthing',
                'message' => 'somthingsadasdas',
                'name' => 'asdsasa',
                'created_at' => '2018-08-27 22:42:21',
                'updated_at' => '2018-08-27 22:42:21',
            ),
            6 => 
            array (
                'id' => 7,
                'email' => 'Viveksah2sah@gmail.com',
                'message' => 'adfsddsf',
                'name' => 'jakash',
                'created_at' => '2018-08-27 22:42:43',
                'updated_at' => '2018-08-27 22:42:43',
            ),
            7 => 
            array (
                'id' => 8,
                'email' => 'Viveksah2sah@gmail.com',
                'message' => 'adfsddsf',
                'name' => 'jakash',
                'created_at' => '2018-08-27 22:43:02',
                'updated_at' => '2018-08-27 22:43:02',
            ),
            8 => 
            array (
                'id' => 9,
                'email' => 'Email...',
                'message' => 'Message..',
                'name' => 'Name...',
                'created_at' => '2019-01-21 17:41:19',
                'updated_at' => '2019-01-21 17:41:19',
            ),
            9 => 
            array (
                'id' => 10,
                'email' => 'viveksah2sah@gmail.com',
                'message' => 'this is test',
                'name' => 'hello',
                'created_at' => '2019-01-29 02:19:41',
                'updated_at' => '2019-01-29 02:19:41',
            ),
        ));
        
        
    }
}