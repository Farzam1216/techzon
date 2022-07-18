<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee = new User();
        $employee->company_id = 1;
        $employee->firstname = 'Farzam';
        $employee->lastname = 'Ali';
        $employee->email = 'admin@gmail.com';
        $employee->phone = '03415913031';
        $employee->password = bcrypt('password');
        $employee->save();
    }
}
