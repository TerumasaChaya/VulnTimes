<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountingTblTableSeeder extends Seeder
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
        $limitTime = $date->modify('+1 month');

        for ($i = 0; $i < 3; $i++) {

            DB::table('AccountingTbl')->insert([

                'customer_id' => $i
                ,

                'rank' => true
                ,

                'limitDate' => $limitTime
                ,

                'created_at' => new DateTime()
                ,

                'updated_at' => new DateTime()
                ,

            ]);
        }
    }
}
