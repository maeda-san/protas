<?php

use App\Department;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class)
         $this->call(DepartmentTableSeeder::class);

        Model::reguard();
    }
}

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->delete();

        $faker = Faker::create('ja_JP');

        for ($i = 0; $i < 100; $i++) {
            Department::create([
                'name' => $faker->word
            ]);
        }
    }
}
