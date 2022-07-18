<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $company = new Company();
        $company->name = 'Techzon';
        $company->email = 'Techzon@gmail.com';
        $company->logo = 'Techzon.png';
        $company->website = 'https://www.techzon.com/';
        $company->save();

    }
}
