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
            'name' => 'Celulares y tablets',
            'slug' => Str::slug('Celulares y tablets'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Camisas',
            'slug' => Str::slug('Camisas'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Constructoras',
            'slug' => Str::slug('Constructoras'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Autos',
            'slug' => Str::slug('Autos'),
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Motos',
            'slug' => Str::slug('Motos'),
            'state'=>1,
        ]);
    }
}
