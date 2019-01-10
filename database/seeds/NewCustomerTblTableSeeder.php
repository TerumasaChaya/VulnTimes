<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NewCustomerTblTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        #今日日付
        $date = new DateTime();

        #今日日付+１時間
        $ticketTime = $date->modify('+1 hour');

        for ($i = 0; $i < 3; $i++) {

            DB::table('NewCustomerTbl')->insert([

                'newCid' => $i
                ,

                'address' => $i . 'aaa@gmail.com'
                ,

                'ticketUrl' => 'http://xxx.com/' . $i
                ,

                'invalidDate' => $ticketTime
                ,

                'created_at' => new DateTime()
                ,

                'updated_at' => new DateTime()
                ,

            ]);
        }
    }
}
