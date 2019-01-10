<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerInfoTblTableSeeder extends Seeder
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

        for ($i = 0; $i < 5; $i++) {

            DB::table('CustomerInfoTbl')->insert([

                'login_id' => 'User' . $i
                ,

                'firstName' => 'First' . $i
                ,

                'lastName' => 'UserLast' . $i
                ,

                'address' => $i . 'aaa@gmail.com'
                ,

                'passwd' => Hash::make('password')
                ,

                'created_at' => $date
                ,

                'updated_at' => null,
            ]);
        }
    }
}
