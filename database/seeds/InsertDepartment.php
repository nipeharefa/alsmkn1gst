<?php

use Illuminate\Database\Seeder;
use App\Department;

class InsertDepartment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['id' => 4036, 'name' => 'Teknik Komputer dan Jaringan']);
    }
}
