<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'from' => 3,
                'to' => 22,
                'read' => 0,
                'text' => 'sdsdssd',
                'created_at' => '2018-07-02 06:53:05',
                'updated_at' => '2018-07-02 06:53:05',
            ),
            1 => 
            array (
                'id' => 2,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'sdsd',
                'created_at' => '2018-07-02 06:53:23',
                'updated_at' => '2018-07-02 06:53:23',
            ),
            2 => 
            array (
                'id' => 3,
                'from' => 3,
                'to' => 22,
                'read' => 0,
                'text' => 'cvdssd',
                'created_at' => '2018-07-02 06:55:56',
                'updated_at' => '2018-07-02 06:55:56',
            ),
            3 => 
            array (
                'id' => 4,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'vivek',
                'created_at' => '2018-07-02 06:56:41',
                'updated_at' => '2018-07-02 06:56:41',
            ),
            4 => 
            array (
                'id' => 5,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'vivek',
                'created_at' => '2018-07-02 06:56:42',
                'updated_at' => '2018-07-02 06:56:42',
            ),
            5 => 
            array (
                'id' => 6,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'hello',
                'created_at' => '2018-07-02 06:58:46',
                'updated_at' => '2018-07-02 06:58:46',
            ),
            6 => 
            array (
                'id' => 7,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'nice',
                'created_at' => '2018-07-02 06:59:17',
                'updated_at' => '2018-07-02 06:59:17',
            ),
            7 => 
            array (
                'id' => 8,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'd.kldçls',
                'created_at' => '2018-07-02 07:00:44',
                'updated_at' => '2018-07-02 07:00:44',
            ),
            8 => 
            array (
                'id' => 9,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'dsdsds',
                'created_at' => '2018-07-02 07:08:23',
                'updated_at' => '2018-07-02 07:08:23',
            ),
            9 => 
            array (
                'id' => 10,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'dscdscds',
                'created_at' => '2018-07-02 07:09:30',
                'updated_at' => '2018-07-02 07:09:30',
            ),
            10 => 
            array (
                'id' => 11,
                'from' => 21,
                'to' => 3,
                'read' => 1,
                'text' => 'hi',
                'created_at' => '2018-07-02 07:10:55',
                'updated_at' => '2018-07-19 16:16:11',
            ),
            11 => 
            array (
                'id' => 12,
                'from' => 21,
                'to' => 3,
                'read' => 1,
                'text' => 'xccxcx',
                'created_at' => '2018-07-02 07:11:59',
                'updated_at' => '2018-07-19 16:16:11',
            ),
            12 => 
            array (
                'id' => 13,
                'from' => 3,
                'to' => 10,
                'read' => 0,
                'text' => 'hello',
                'created_at' => '2018-07-02 07:13:59',
                'updated_at' => '2018-07-02 07:13:59',
            ),
            13 => 
            array (
                'id' => 14,
                'from' => 3,
                'to' => 10,
                'read' => 0,
                'text' => 'dsdmsd',
                'created_at' => '2018-07-02 07:18:51',
                'updated_at' => '2018-07-02 07:18:51',
            ),
            14 => 
            array (
                'id' => 15,
                'from' => 10,
                'to' => 3,
                'read' => 1,
                'text' => 'hi',
                'created_at' => '2018-07-02 07:19:03',
                'updated_at' => '2019-01-28 20:42:43',
            ),
            15 => 
            array (
                'id' => 16,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'hello',
                'created_at' => '2018-07-02 08:08:29',
                'updated_at' => '2018-07-02 08:08:29',
            ),
            16 => 
            array (
                'id' => 17,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'new',
                'created_at' => '2018-07-02 08:08:42',
                'updated_at' => '2018-07-02 08:08:42',
            ),
            17 => 
            array (
                'id' => 18,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'new message',
                'created_at' => '2018-07-02 08:09:48',
                'updated_at' => '2018-07-02 08:09:48',
            ),
            18 => 
            array (
                'id' => 19,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'dvdfvfd',
                'created_at' => '2018-07-02 08:11:50',
                'updated_at' => '2018-07-02 08:11:50',
            ),
            19 => 
            array (
                'id' => 20,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'sdasdas',
                'created_at' => '2018-07-02 08:21:31',
                'updated_at' => '2018-07-02 08:21:31',
            ),
            20 => 
            array (
                'id' => 21,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'hi admin',
                'created_at' => '2018-07-02 08:23:39',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            21 => 
            array (
                'id' => 22,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'dsdsk,dfs',
                'created_at' => '2018-07-02 08:25:33',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            22 => 
            array (
                'id' => 23,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'dssd',
                'created_at' => '2018-07-02 08:25:52',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            23 => 
            array (
                'id' => 24,
                'from' => 3,
                'to' => 23,
                'read' => 0,
                'text' => 'dsfsds',
                'created_at' => '2018-07-02 08:35:43',
                'updated_at' => '2018-07-02 08:35:43',
            ),
            24 => 
            array (
                'id' => 25,
                'from' => 3,
                'to' => 8,
                'read' => 0,
                'text' => 'cdss',
                'created_at' => '2018-07-02 08:51:39',
                'updated_at' => '2018-07-02 08:51:39',
            ),
            25 => 
            array (
                'id' => 26,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'saaa',
                'created_at' => '2018-07-02 08:56:36',
                'updated_at' => '2018-07-02 08:56:36',
            ),
            26 => 
            array (
                'id' => 27,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'asasas',
                'created_at' => '2018-07-02 08:57:34',
                'updated_at' => '2018-07-02 08:57:34',
            ),
            27 => 
            array (
                'id' => 28,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'sasas',
                'created_at' => '2018-07-02 08:58:17',
                'updated_at' => '2018-07-02 08:58:17',
            ),
            28 => 
            array (
                'id' => 29,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'asdassa',
                'created_at' => '2018-07-02 08:59:41',
                'updated_at' => '2018-07-02 08:59:41',
            ),
            29 => 
            array (
                'id' => 30,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'vdssdvsd',
                'created_at' => '2018-07-02 09:06:05',
                'updated_at' => '2018-07-02 09:06:05',
            ),
            30 => 
            array (
                'id' => 31,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'cvcxvx',
                'created_at' => '2018-07-02 09:07:34',
                'updated_at' => '2018-07-02 09:07:34',
            ),
            31 => 
            array (
                'id' => 32,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'xcvxc',
                'created_at' => '2018-07-02 09:07:36',
                'updated_at' => '2018-07-02 09:07:36',
            ),
            32 => 
            array (
                'id' => 33,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'hello',
                'created_at' => '2018-07-02 09:07:51',
                'updated_at' => '2018-07-02 09:07:51',
            ),
            33 => 
            array (
                'id' => 34,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'vd,mvdfvlkfd',
                'created_at' => '2018-07-02 09:07:56',
                'updated_at' => '2018-07-02 09:07:56',
            ),
            34 => 
            array (
                'id' => 35,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'fddfdfx',
                'created_at' => '2018-07-02 09:08:56',
                'updated_at' => '2018-07-02 09:08:56',
            ),
            35 => 
            array (
                'id' => 36,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'dsfsd',
                'created_at' => '2018-07-02 09:09:23',
                'updated_at' => '2018-07-02 09:09:23',
            ),
            36 => 
            array (
                'id' => 37,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'dfsds',
                'created_at' => '2018-07-02 09:10:37',
                'updated_at' => '2018-07-02 09:10:37',
            ),
            37 => 
            array (
                'id' => 38,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'fdsfdsfds',
                'created_at' => '2018-07-02 09:11:31',
                'updated_at' => '2018-07-02 09:11:31',
            ),
            38 => 
            array (
                'id' => 39,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'fvdfdfc',
                'created_at' => '2018-07-02 09:11:59',
                'updated_at' => '2018-07-02 09:11:59',
            ),
            39 => 
            array (
                'id' => 40,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'dsfsdfsd',
                'created_at' => '2018-07-02 09:12:25',
                'updated_at' => '2018-07-02 09:12:25',
            ),
            40 => 
            array (
                'id' => 41,
                'from' => 3,
                'to' => 23,
                'read' => 0,
                'text' => 'addvssvd',
                'created_at' => '2018-07-02 11:09:27',
                'updated_at' => '2018-07-02 11:09:27',
            ),
            41 => 
            array (
                'id' => 42,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'sdfsdf',
                'created_at' => '2018-07-02 11:10:09',
                'updated_at' => '2018-07-02 11:10:09',
            ),
            42 => 
            array (
                'id' => 43,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'm,hjkljl',
                'created_at' => '2018-07-02 11:11:52',
                'updated_at' => '2018-07-02 11:11:52',
            ),
            43 => 
            array (
                'id' => 44,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'dsfasedfas',
                'created_at' => '2018-07-02 11:12:49',
                'updated_at' => '2018-07-02 11:12:49',
            ),
            44 => 
            array (
                'id' => 45,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'dfgderger',
                'created_at' => '2018-07-02 11:13:32',
                'updated_at' => '2018-07-02 11:13:32',
            ),
            45 => 
            array (
                'id' => 46,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'dtgfhgrftg',
                'created_at' => '2018-07-02 11:14:21',
                'updated_at' => '2018-07-02 11:14:21',
            ),
            46 => 
            array (
                'id' => 47,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'sdfsdfsd',
                'created_at' => '2018-07-02 11:16:11',
                'updated_at' => '2018-07-02 11:16:11',
            ),
            47 => 
            array (
                'id' => 48,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'sdfvdszfx',
                'created_at' => '2018-07-02 11:17:00',
                'updated_at' => '2018-07-02 11:17:00',
            ),
            48 => 
            array (
                'id' => 49,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'scfdsfds',
                'created_at' => '2018-07-02 11:20:16',
                'updated_at' => '2018-07-02 11:20:16',
            ),
            49 => 
            array (
                'id' => 50,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'sdsfsd',
                'created_at' => '2018-07-02 11:20:41',
                'updated_at' => '2018-07-02 11:20:41',
            ),
            50 => 
            array (
                'id' => 51,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'heelo',
                'created_at' => '2018-07-02 11:21:34',
                'updated_at' => '2018-07-02 11:21:34',
            ),
            51 => 
            array (
                'id' => 52,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'dssd',
                'created_at' => '2018-07-02 11:21:40',
                'updated_at' => '2018-07-02 11:21:40',
            ),
            52 => 
            array (
                'id' => 53,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'hellow',
                'created_at' => '2018-07-02 12:58:16',
                'updated_at' => '2018-07-02 12:58:16',
            ),
            53 => 
            array (
                'id' => 54,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'hi',
                'created_at' => '2018-07-02 12:58:19',
                'updated_at' => '2018-07-02 12:58:19',
            ),
            54 => 
            array (
                'id' => 55,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'vivek',
                'created_at' => '2018-07-02 12:58:24',
                'updated_at' => '2018-07-02 12:58:24',
            ),
            55 => 
            array (
                'id' => 56,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'how are you my friwend',
                'created_at' => '2018-07-02 12:58:40',
                'updated_at' => '2018-07-02 12:58:40',
            ),
            56 => 
            array (
                'id' => 57,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'loving the new site',
                'created_at' => '2018-07-02 12:58:50',
                'updated_at' => '2018-07-02 12:58:50',
            ),
            57 => 
            array (
                'id' => 58,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'nothing comes free of cost',
                'created_at' => '2018-07-02 12:59:31',
                'updated_at' => '2018-07-02 12:59:31',
            ),
            58 => 
            array (
                'id' => 59,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'what you can do for the best price',
                'created_at' => '2018-07-02 13:00:01',
                'updated_at' => '2018-07-02 13:00:01',
            ),
            59 => 
            array (
                'id' => 60,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'hello admin',
                'created_at' => '2018-07-02 13:01:40',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            60 => 
            array (
                'id' => 61,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'hi nurse',
                'created_at' => '2018-07-02 13:01:51',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            61 => 
            array (
                'id' => 62,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'how are you',
                'created_at' => '2018-07-02 13:02:06',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            62 => 
            array (
                'id' => 63,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'i am fine thankyou',
                'created_at' => '2018-07-02 13:02:19',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            63 => 
            array (
                'id' => 64,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'what are you doing',
                'created_at' => '2018-07-02 13:02:34',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            64 => 
            array (
                'id' => 65,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'nothing just chilling',
                'created_at' => '2018-07-02 13:02:56',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            65 => 
            array (
                'id' => 66,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'hello are you their',
                'created_at' => '2018-07-02 13:03:20',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            66 => 
            array (
                'id' => 67,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'nothing  jakkkkkkkkkkskldjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj',
                'created_at' => '2018-07-02 13:04:55',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            67 => 
            array (
                'id' => 68,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'nmdshjdshdds',
                'created_at' => '2018-07-02 13:05:05',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            68 => 
            array (
                'id' => 69,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'hddslksl',
                'created_at' => '2018-07-02 13:05:10',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            69 => 
            array (
                'id' => 70,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'dsdskjds',
                'created_at' => '2018-07-02 13:05:11',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            70 => 
            array (
                'id' => 71,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'dskjhds',
                'created_at' => '2018-07-02 13:05:14',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            71 => 
            array (
                'id' => 72,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 's',
                'created_at' => '2018-07-02 13:05:19',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            72 => 
            array (
                'id' => 73,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 's',
                'created_at' => '2018-07-02 13:05:21',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            73 => 
            array (
                'id' => 74,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'mjnxncdd dskjdsn dsjndsknkj  nskjnkjsn',
                'created_at' => '2018-07-02 13:05:37',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            74 => 
            array (
                'id' => 75,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'sdlkjsdçsdmkdsmskldjm kljmslkd dskjd  dkjsnjndlkcdsomcknkcdj  jisdkjcds cdskhjds dsikºdp,sdlijds,p dsjdsijdsj dsjksdjndmkjus sdiosjdd s',
                'created_at' => '2018-07-02 13:05:51',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            75 => 
            array (
                'id' => 76,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'sdçljksld dsihjsdj sd shjsdk sljds sdljsld sd dsi isdjidj as sd spkcposd p sd psdokcpods kcpods ds  sdpkposd kds p sd spd jdsiojsd ijdc  isjsdi ids c dcijsiojsd po  dskkiodsk dcp oijiods k ºppºp dsojsd s+ps+0oçlijçi c   iosouhjsdio  oisdm v  osdoijc  iosjoiosdo p jjpsdijvd  psjc  psdjoiodsjo s osidjoid  oij soi dp+s+s+   iosdoijsdoik+p pos+kosdk  osoi+awpoi+áw,spo çx pomp  apsopoijactcrewn   nowiycun mpwp cuasycancsp iouys dsioidsuyiucsasd   8isaudsom uwoeiasudm oisauamc pou asioupsodm oius mmoasiupm  osiudm oiaus',
                'created_at' => '2018-07-02 13:06:39',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            76 => 
            array (
                'id' => 77,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => '.zxkmnkl  lkç  slkdjclkds jsdlkk  sdpokcooq+ács poas+p´s+cslkj çlkdsposdl kaspkpal+ +psopoasç  +pasolcp  psok  psoposd  poksipoi sd+´s´, pspodk bhgtjasy oijaisuytqw70pqw+csa oascuipoc ´86 561958',
                'created_at' => '2018-07-02 13:06:59',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            77 => 
            array (
                'id' => 78,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => '+9871+ oaskoijcd  ´+dsçjm ospos ioudsik+ás+dm yuhsdui +s´dpoico juiusjcpaso+c+oc+  p9ipoo+ds+s m +iosdpcokmp o isdiojkk spodiujc s',
                'created_at' => '2018-07-02 13:07:13',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            78 => 
            array (
                'id' => 79,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'no',
                'created_at' => '2018-07-02 13:07:42',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            79 => 
            array (
                'id' => 80,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'dsmdsn  ckdsklc dsjdk csçk sujs dsids  isdcsd is siodck iosdc sidcj si  sdijcds isd I   dsiojds idsjcdsk',
                'created_at' => '2018-07-02 13:08:37',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            80 => 
            array (
                'id' => 81,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'mcdsjkds',
                'created_at' => '2018-07-02 13:10:18',
                'updated_at' => '2018-07-02 13:10:18',
            ),
            81 => 
            array (
                'id' => 82,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'cdnmdsds',
                'created_at' => '2018-07-02 13:10:44',
                'updated_at' => '2018-07-02 13:10:44',
            ),
            82 => 
            array (
                'id' => 83,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'dsnddsj',
                'created_at' => '2018-07-02 13:11:16',
                'updated_at' => '2018-07-02 13:11:16',
            ),
            83 => 
            array (
                'id' => 84,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'djhsdjhds',
                'created_at' => '2018-07-02 13:11:38',
                'updated_at' => '2018-07-02 13:11:38',
            ),
            84 => 
            array (
                'id' => 85,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'dss',
                'created_at' => '2018-07-02 13:12:27',
                'updated_at' => '2018-07-02 13:12:27',
            ),
            85 => 
            array (
                'id' => 86,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'sdss',
                'created_at' => '2018-07-02 13:12:36',
                'updated_at' => '2018-07-02 13:12:36',
            ),
            86 => 
            array (
                'id' => 87,
                'from' => 5,
                'to' => 6,
                'read' => 0,
                'text' => 'fddfdf',
                'created_at' => '2018-07-02 23:07:15',
                'updated_at' => '2018-07-02 23:07:15',
            ),
            87 => 
            array (
                'id' => 88,
                'from' => 3,
                'to' => 22,
                'read' => 0,
                'text' => 'hello',
                'created_at' => '2018-07-09 22:21:32',
                'updated_at' => '2018-07-09 22:21:32',
            ),
            88 => 
            array (
                'id' => 89,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'hi',
                'created_at' => '2018-07-09 22:22:58',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            89 => 
            array (
                'id' => 90,
                'from' => 3,
                'to' => 5,
                'read' => 1,
                'text' => 'nice',
                'created_at' => '2018-07-09 23:43:59',
                'updated_at' => '2018-09-02 02:16:14',
            ),
            90 => 
            array (
                'id' => 91,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'kjnkjn',
                'created_at' => '2018-07-09 23:55:32',
                'updated_at' => '2018-07-09 23:55:32',
            ),
            91 => 
            array (
                'id' => 92,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'lopçlkml,',
                'created_at' => '2018-07-09 23:56:05',
                'updated_at' => '2018-07-09 23:56:05',
            ),
            92 => 
            array (
                'id' => 93,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'kjlm,jkm,',
                'created_at' => '2018-07-09 23:56:23',
                'updated_at' => '2018-07-09 23:56:23',
            ),
            93 => 
            array (
                'id' => 94,
                'from' => 3,
                'to' => 13,
                'read' => 0,
                'text' => 'jlhnhnjn hbuijkjnj jnlhjgbtyg yhgtyfty yuhgyugyt hjb jhg ytft gyghytfryf uyh tf trft ygtyft edrrt tfg uy ytgtyfy yy gtygtyg  hyuhgyug yug hyuhiuhtug tgyuh yhuyg tg yuhyuhu',
                'created_at' => '2018-07-09 23:56:52',
                'updated_at' => '2018-07-09 23:56:52',
            ),
            94 => 
            array (
                'id' => 95,
                'from' => 3,
                'to' => 18,
                'read' => 0,
                'text' => 'ddd',
                'created_at' => '2018-07-10 01:49:37',
                'updated_at' => '2018-07-10 01:49:37',
            ),
            95 => 
            array (
                'id' => 96,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'vibe',
                'created_at' => '2018-07-10 02:24:11',
                'updated_at' => '2018-07-10 02:24:11',
            ),
            96 => 
            array (
                'id' => 97,
                'from' => 3,
                'to' => 22,
                'read' => 0,
                'text' => 'hi',
                'created_at' => '2018-07-10 02:27:10',
                'updated_at' => '2018-07-10 02:27:10',
            ),
            97 => 
            array (
                'id' => 98,
                'from' => 3,
                'to' => 22,
                'read' => 0,
                'text' => 'new hi',
                'created_at' => '2018-07-10 02:27:25',
                'updated_at' => '2018-07-10 02:27:25',
            ),
            98 => 
            array (
                'id' => 99,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => ',m.kjhjklçº',
                'created_at' => '2018-07-12 01:01:13',
                'updated_at' => '2018-07-12 01:01:13',
            ),
            99 => 
            array (
                'id' => 100,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'ssds',
                'created_at' => '2018-07-12 01:04:08',
                'updated_at' => '2018-07-12 01:04:08',
            ),
            100 => 
            array (
                'id' => 101,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'geggg',
                'created_at' => '2018-07-13 14:59:30',
                'updated_at' => '2018-07-13 14:59:30',
            ),
            101 => 
            array (
                'id' => 102,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'k.jhjlçk-lj.knjn-lmç;.<',
                'created_at' => '2018-07-13 14:59:36',
                'updated_at' => '2018-07-13 14:59:36',
            ),
            102 => 
            array (
                'id' => 103,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => ',mjnkljllº',
                'created_at' => '2018-07-13 14:59:43',
                'updated_at' => '2018-07-13 14:59:43',
            ),
            103 => 
            array (
                'id' => 104,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'mnbjmhknm,khbjnkm,l.',
                'created_at' => '2018-07-13 14:59:49',
                'updated_at' => '2018-07-13 14:59:49',
            ),
            104 => 
            array (
                'id' => 105,
                'from' => 3,
                'to' => 22,
                'read' => 0,
                'text' => ',mjhyut6ftgyhijlklç',
                'created_at' => '2018-07-13 15:00:03',
                'updated_at' => '2018-07-13 15:00:03',
            ),
            105 => 
            array (
                'id' => 106,
                'from' => 3,
                'to' => 21,
                'read' => 0,
                'text' => 'dfdd',
                'created_at' => '2018-07-19 16:16:37',
                'updated_at' => '2018-07-19 16:16:37',
            ),
            106 => 
            array (
                'id' => 107,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'heello',
                'created_at' => '2018-07-24 15:37:39',
                'updated_at' => '2018-07-24 15:37:39',
            ),
            107 => 
            array (
                'id' => 108,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'vvcvc',
                'created_at' => '2018-08-26 12:26:31',
                'updated_at' => '2018-08-26 12:26:31',
            ),
            108 => 
            array (
                'id' => 109,
                'from' => 3,
                'to' => 20,
                'read' => 0,
                'text' => 'hello',
                'created_at' => '2018-08-26 12:26:45',
                'updated_at' => '2018-08-26 12:26:45',
            ),
            109 => 
            array (
                'id' => 110,
                'from' => 3,
                'to' => 32,
                'read' => 0,
                'text' => 'Cjfhjffu',
                'created_at' => '2018-08-31 22:26:02',
                'updated_at' => '2018-08-31 22:26:02',
            ),
            110 => 
            array (
                'id' => 111,
                'from' => 3,
                'to' => 32,
                'read' => 0,
                'text' => 'Hello babay',
                'created_at' => '2018-08-31 22:26:14',
                'updated_at' => '2018-08-31 22:26:14',
            ),
            111 => 
            array (
                'id' => 112,
                'from' => 3,
                'to' => 32,
                'read' => 0,
                'text' => 'Hi what\'s going on',
                'created_at' => '2018-08-31 22:26:36',
                'updated_at' => '2018-08-31 22:26:36',
            ),
            112 => 
            array (
                'id' => 113,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'hellow',
                'created_at' => '2018-09-02 02:16:27',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            113 => 
            array (
                'id' => 114,
                'from' => 5,
                'to' => 3,
                'read' => 1,
                'text' => 'hello admin|||||||||||||',
                'created_at' => '2018-09-02 02:16:42',
                'updated_at' => '2019-01-28 20:38:30',
            ),
            114 => 
            array (
                'id' => 115,
                'from' => 3,
                'to' => 27,
                'read' => 0,
                'text' => 'hellow my friend',
                'created_at' => '2019-01-21 17:32:36',
                'updated_at' => '2019-01-21 17:32:36',
            ),
            115 => 
            array (
                'id' => 116,
                'from' => 3,
                'to' => 7,
                'read' => 0,
                'text' => 'get the  new message everyday',
                'created_at' => '2019-01-28 20:33:58',
                'updated_at' => '2019-01-28 20:33:58',
            ),
            116 => 
            array (
                'id' => 117,
                'from' => 3,
                'to' => 31,
                'read' => 0,
                'text' => 'how are you',
                'created_at' => '2019-01-28 20:34:15',
                'updated_at' => '2019-01-28 20:34:15',
            ),
            117 => 
            array (
                'id' => 118,
                'from' => 3,
                'to' => 23,
                'read' => 0,
                'text' => 'sdss',
                'created_at' => '2019-01-28 20:43:24',
                'updated_at' => '2019-01-28 20:43:24',
            ),
            118 => 
            array (
                'id' => 119,
                'from' => 3,
                'to' => 31,
                'read' => 0,
                'text' => 'dfgfhft',
                'created_at' => '2019-01-28 20:48:21',
                'updated_at' => '2019-01-28 20:48:21',
            ),
            119 => 
            array (
                'id' => 120,
                'from' => 3,
                'to' => 6,
                'read' => 0,
                'text' => 'fgdfdfgdfdfgdfhfgdhf',
                'created_at' => '2019-01-28 20:49:05',
                'updated_at' => '2019-01-28 20:49:05',
            ),
        ));
        
        
    }
}