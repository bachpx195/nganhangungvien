<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserSeeder');
        $this->call('CompanySizeSeeder');
        $this->call('ExperienceYearsSeeder');
        $this->call('ForeignLanguageSeeder');
        $this->call('JobSeeder');
        $this->call('LevelSeeder');
        $this->call('ProvinceSeeder');
        $this->call('SalarySeeder');
        $this->call('EmploymentStatusSeeder');
        $this->call('RankSeeder');
    }

}
