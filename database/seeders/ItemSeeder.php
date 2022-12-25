<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => 'Informática',
            'slug' => Str::slug('Informática'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Educación',
            'slug' => Str::slug('Educación'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Regalos',
            'slug' => Str::slug('Regalos'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Automóviles',
            'slug' => Str::slug('Automóviles'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Servicios Profesionales',
            'slug' => Str::slug('Servicios Profesionales'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Servicios No Profesionales',
            'slug' => Str::slug('Servicios No Profesionales'),
            'state'=>1,
        ]);



        Item::create([
            'name' => 'Hogar',
            'slug' => Str::slug('Hogar'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Oficina',
            'slug' => Str::slug('Oficina'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Ropas y Accesorios',
            'slug' => Str::slug('Ropas y Accesorios'),
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Belleza',
            'slug' => Str::slug('Belleza'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Medicina',
            'slug' => Str::slug('Medicina'),
            'state'=>1,
        ]);


    }
}
