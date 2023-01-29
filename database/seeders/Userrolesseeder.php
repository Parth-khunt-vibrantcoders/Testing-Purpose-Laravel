<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Db;
class Userrolesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert([
            'user_role' => "Super Admin",
            'status' => '1',
            'deletable' => '1',
            'permission' => null,
            'add_by' => 1,
            'updated_by' =>1,
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
