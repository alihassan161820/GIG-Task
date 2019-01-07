<?php

use Illuminate\Database\Seeder;
use App\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
            "emp_id"=> 1,
            "ename"=> "XX",
            "sal"=> 2000,
            "mgr_id"=> null
            ],
            [
            "emp_id"=> 2,
            "ename"=> "YY",
            "sal"=> 1000,
            "mgr_id"=> 1
            ],
            [
            "emp_id"=> 3,
            "ename"=> "ZZ",
            "sal"=> 1000,
            "mgr_id"=> 1
            ],
            [
            "emp_id"=> 4,
            "ename"=> "NN",
            "sal"=> 500,
            "mgr_id"=> 1
            ]
        ];
        Employee::insert($employees);
    }
}
