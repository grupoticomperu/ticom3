<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['name' => 'admin']);

        User::create([
            'name' => 'MIchael Cabello',
            'email' => 'michael@ticomperu.com',
            'password' => bcrypt('12345678'),
            'razonsocial' => 'TICOM',
            'slug' => Str::slug('TICOM'),
        ])->assignRole('admin');;


        User::factory(10)->create();
    }
}
