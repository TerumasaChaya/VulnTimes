<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'name' => 'おつかい'
            ],
            [
                'name' => 'プログラム'
            ],
            [
                'name' => 'あま'
            ],
            [
                'name' => 'おみき'
            ],
            [
                'name' => 'あらばいむ'
            ]
        ]);
    }
}
