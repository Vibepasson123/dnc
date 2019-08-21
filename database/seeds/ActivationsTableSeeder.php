<?php

use Illuminate\Database\Seeder;

class ActivationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activations')->delete();
        
        \DB::table('activations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'code' => '6NA9jzVvbJ27hFdDrmEiIBGOOAjeexSI',
                'completed' => 1,
                'completed_at' => '2017-10-17 17:15:49',
                'created_at' => '2017-10-17 17:15:49',
                'updated_at' => '2017-10-17 17:15:49',
                'reason' => '',
                'action_by' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'code' => 'c91thqI5jUJd12iSqSoJ5bMe3LVoMQMi',
                'completed' => 2,
                'completed_at' => '2017-10-17 17:20:48',
                'created_at' => '2017-10-17 17:20:48',
                'updated_at' => '2018-08-26 16:40:24',
                'reason' => '.lgkdfnglkdfgkfd',
                'action_by' => 'admin@admin',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'code' => 'AMdtg9ivexirc4I9JOldBtvZljDp0rVl',
                'completed' => 1,
                'completed_at' => '2017-10-17 18:21:16',
                'created_at' => '2017-10-17 18:21:16',
                'updated_at' => '2018-05-16 22:36:55',
                'reason' => 'jkkjk',
                'action_by' => '3',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'code' => 'fhxtUik7Sa6Pev55KigchXNHXARMW5eO',
                'completed' => 2,
                'completed_at' => '2017-10-17 18:23:43',
                'created_at' => '2017-10-17 18:23:43',
                'updated_at' => '2018-08-27 20:34:52',
                'reason' => 'gfhjkl',
                'action_by' => 'admin@admin',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 5,
                'code' => '0eXHs8Rl4uG2dO0NiLI1eBbHFoVKbuOf',
                'completed' => 1,
                'completed_at' => '2017-10-17 18:51:12',
                'created_at' => '2017-10-17 18:51:12',
                'updated_at' => '2018-09-02 00:42:51',
                'reason' => 'Fjjcdhvdc',
                'action_by' => 'admin@admin',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 6,
                'code' => 'InjAKTVK7cOWRNnFNVd1DwRM9UfFmXFr',
                'completed' => 1,
                'completed_at' => '2017-10-17 19:01:38',
                'created_at' => '2017-10-17 19:01:38',
                'updated_at' => '2017-10-17 19:01:38',
                'reason' => '',
                'action_by' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 7,
                'code' => 'IHRVGOuzDsmDBG0j7ZFncSx9XZkvLv03',
                'completed' => 1,
                'completed_at' => '2017-10-17 19:39:12',
                'created_at' => '2017-10-17 19:39:12',
                'updated_at' => '2017-10-17 19:39:12',
                'reason' => '',
                'action_by' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 8,
                'code' => 'kJyRdTW8DbXf0lt8EUauR5BwjYz68Fz9',
                'completed' => 1,
                'completed_at' => '2017-10-17 19:56:14',
                'created_at' => '2017-10-17 19:56:13',
                'updated_at' => '2017-10-17 19:56:14',
                'reason' => '',
                'action_by' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 9,
                'code' => 'bWFuP5MJhsBz2m8o3XAqUrt6KSmuBUGS',
                'completed' => 2,
                'completed_at' => '2017-10-19 15:59:10',
                'created_at' => '2017-10-19 15:59:10',
                'updated_at' => '2018-08-26 16:40:09',
                'reason' => 'dslkfndlçgk',
                'action_by' => 'admin@admin',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 10,
                'code' => 'Uh9QJFprs9NOYOxJZdo40LzYrM3AJ6Ri',
                'completed' => 1,
                'completed_at' => '2017-10-20 11:19:11',
                'created_at' => '2017-10-20 11:19:11',
                'updated_at' => '2018-06-13 23:32:51',
                'reason' => '',
                'action_by' => '3',
            ),
            10 => 
            array (
                'id' => 18,
                'user_id' => 11,
                'code' => 'DslnjJ5nPJ6Z8bRfp5EEHcjZYUMgMCdq',
                'completed' => 2,
                'completed_at' => '2017-10-23 11:44:16',
                'created_at' => '2017-10-23 11:43:46',
                'updated_at' => '2017-10-23 11:44:16',
                'reason' => '',
                'action_by' => '',
            ),
            11 => 
            array (
                'id' => 29,
                'user_id' => 12,
                'code' => '6dTZhXGnHVg2JAPG6kqU4gSS7YxUw9Ic',
                'completed' => 2,
                'completed_at' => '2017-10-24 08:41:06',
                'created_at' => '2017-10-24 08:40:41',
                'updated_at' => '2018-08-26 16:41:19',
                'reason' => 'fkdjgmdlkd',
                'action_by' => 'admin@admin',
            ),
            12 => 
            array (
                'id' => 30,
                'user_id' => 13,
                'code' => '3Uo4JEJ3cglMtUN6y3MYsZUk9lgZJUZy',
                'completed' => 2,
                'completed_at' => '2017-10-24 11:01:38',
                'created_at' => '2017-10-24 10:59:54',
                'updated_at' => '2018-08-26 14:37:20',
                'reason' => 'admin',
                'action_by' => '3',
            ),
            13 => 
            array (
                'id' => 36,
                'user_id' => 17,
                'code' => 'PbZSYfjlKUUiDcS0I1qVJtGf6IsktKMO',
                'completed' => 1,
                'completed_at' => '2017-11-18 03:21:33',
                'created_at' => '2017-11-18 03:21:08',
                'updated_at' => '2018-08-28 00:06:34',
                'reason' => 'jdkjfdsfjsdfudsj',
                'action_by' => 'admin@admin',
            ),
            14 => 
            array (
                'id' => 37,
                'user_id' => 18,
                'code' => 'RuUJbEU9tD5YtLLmvGrlI2rxfkhpmdK3',
                'completed' => 1,
                'completed_at' => '2017-11-18 03:22:56',
                'created_at' => '2017-11-18 03:22:56',
                'updated_at' => '2017-11-18 03:22:56',
                'reason' => '',
                'action_by' => '',
            ),
            15 => 
            array (
                'id' => 39,
                'user_id' => 19,
                'code' => 'YmP6z3wpzdktOm6Yemej8DkeertYR5DC',
                'completed' => 2,
                'completed_at' => '2017-11-21 16:38:54',
                'created_at' => '2017-11-21 16:38:54',
                'updated_at' => '2018-12-02 16:39:15',
                'reason' => 'new',
                'action_by' => 'admin@admin',
            ),
            16 => 
            array (
                'id' => 41,
                'user_id' => 20,
                'code' => 'yM4i8xPwPx6kLSiaLfGVOgRVfjwIJCwq',
                'completed' => 2,
                'completed_at' => '2017-11-22 19:11:12',
                'created_at' => '2017-11-22 19:11:11',
                'updated_at' => '2018-09-02 00:44:02',
                'reason' => 'nothing great',
                'action_by' => 'admin@admin',
            ),
            17 => 
            array (
                'id' => 42,
                'user_id' => 21,
                'code' => 'vLDuSj2UszXvd2UHQzjUDHuYXltdRF5U',
                'completed' => 2,
                'completed_at' => '2018-01-21 00:00:00',
                'created_at' => '2018-01-21 19:11:03',
                'updated_at' => '2018-08-28 00:06:11',
                'reason' => 'admin',
                'action_by' => 'admin@admin',
            ),
            18 => 
            array (
                'id' => 43,
                'user_id' => 22,
                'code' => 'KfT8ftPQRIFaS5nzAmr3hKCl5BIiLYQn',
                'completed' => 2,
                'completed_at' => '2018-05-08 15:04:09',
                'created_at' => '2018-05-08 15:02:47',
                'updated_at' => '2018-08-26 14:35:53',
                'reason' => 'kdsjfçkldsjçlkdmlkdflk',
                'action_by' => '3',
            ),
            19 => 
            array (
                'id' => 44,
                'user_id' => 23,
                'code' => 'PtqkP1t6XX37joOrtgaBH6LsCY67VJKT',
                'completed' => 1,
                'completed_at' => '2018-05-29 16:14:26',
                'created_at' => '2018-05-29 16:13:53',
                'updated_at' => '2018-05-29 16:14:26',
                'reason' => NULL,
                'action_by' => NULL,
            ),
            20 => 
            array (
                'id' => 46,
                'user_id' => 27,
                'code' => 'i1TXqobe8KoQBJjV0jPWmrAp4jsY8GIx',
                'completed' => 1,
                'completed_at' => '2018-08-26 12:40:56',
                'created_at' => '2018-08-26 12:40:28',
                'updated_at' => '2018-08-26 12:40:56',
                'reason' => NULL,
                'action_by' => NULL,
            ),
            21 => 
            array (
                'id' => 50,
                'user_id' => 31,
                'code' => 'Bx4D6CdOiLWStl5Z6PNbcoqqlK6oYp8p',
                'completed' => 1,
                'completed_at' => '2018-08-30 12:53:06',
                'created_at' => '2018-08-29 15:50:30',
                'updated_at' => '2018-12-02 16:39:40',
                'reason' => 'Fugjcxjc',
                'action_by' => 'admin@admin',
            ),
            22 => 
            array (
                'id' => 51,
                'user_id' => 32,
                'code' => 'aQSD0Jdpx4wkSrN73X1lN7XTh4E3jHkW',
                'completed' => 1,
                'completed_at' => '2018-08-30 12:58:35',
                'created_at' => '2018-08-30 12:58:10',
                'updated_at' => '2018-08-30 12:58:35',
                'reason' => NULL,
                'action_by' => NULL,
            ),
        ));
        
        
    }
}