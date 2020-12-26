<?php

use App\User;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\App\worker::class, 3)->create();
//
        //system manager
        User::create([
            'name' => '曹小玲',
            'email' => '001234@gmail.com',
            'password' => bcrypt('00000000'),
        ]);
        //worker
        \App\worker::create([
            'id_card_number' => 'A11111111',
            'name' => '王小琪',
            'email' => 'kiki1234@gmail.com',
            'password' => bcrypt('kikikiki'),
            'address' => '台中市西屯區福星路46號9樓',
            'occupation' => '工具人',
            'phone' => '091111111',
            'state' => [],
            'rate' => [],
        ]);
        User::create([
            'name' => '王小琪',
            'email' => 'kiki1234@gmail.com',
            'password' => bcrypt('kikikiki'),
        ]);

        \App\worker::create([
            'id_card_number' => 'H11111111',
            'name' => '陳小涵',
            'email' => 'HanHan1234@gmail.com',
            'password' => bcrypt('HanHanHan'),
            'address' => '台中市西屯區福星路72號2樓',
            'occupation' => '家庭主婦',
            'phone' => '0922222222',
            'state' => [],
            'rate' => [],
        ]);
        User::create([
            'name' => '陳小涵',
            'email' => 'HanHan1234@gmail.com',
            'password' => bcrypt('HanHanHan'),
        ]);


    }
}
