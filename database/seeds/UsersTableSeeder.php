<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // role => 0: sys admin, 1: business admin, 2: channel owner, 3: customer 
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'System Admin',
                'email' => 'sys.report.nabil@gmail.com',
                'role' => 0,
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sub System Admin',
                'email' => 'subsys1.report.nabil@gmail.com',
                'role' => 0,
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sub System 2 Admin',
                'email' => 'subsys2.report.nabil@gmail.com',
                'role' => 0,
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Business Admin',
                'email' => 'business.report.nabil@gmail.com',
                'role' => 1,
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Channel Owner',
                'email' => 'cowner.report.nabil@gmail.com',
                'role' => 2,
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Customer',
                'email' => 'customer.report.nabil@gmail.com',
                'role' => 3,
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users')->insert($users);
    }
}
