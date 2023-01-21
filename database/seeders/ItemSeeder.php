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
            'image' => 'items/'.Str::slug('Informática').'.jpg',
            'shortdescription' => 'Informática',
            'longdescription' => 'Informática',
            'title' => 'Informática',
            'description' => 'Informática',
            'keywords' => 'Informática',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Celulares',
            'slug' => Str::slug('Celulares'),
            'image' => 'items/'.Str::slug('Celulares').'.jpg',
            'shortdescription' => 'Celulares',
            'longdescription' => 'Celulares',
            'title' => 'Celulares',
            'description' => 'Celulares',
            'keywords' => 'Celulares',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Juegos',
            'slug' => Str::slug('Juegos'),
            'shortdescription' => 'Juegos',
            'longdescription' => 'Juegos',
            'title' => 'Juegos',
            'description' => 'Juegos',
            'keywords' => 'Juegos',
            'image' => 'items/'.Str::slug('Juegos').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Educación',
            'slug' => Str::slug('Educación'),
            'shortdescription' => 'Educación',
            'longdescription' => 'Educación',
            'title' => 'Educación',
            'description' => 'Educación',
            'keywords' => 'Educación',
            'image' => 'items/'.Str::slug('Educación').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Regalos',
            'slug' => Str::slug('Regalos'),
            'shortdescription' => 'Regalos',
            'longdescription' => 'Regalos',
            'title' => 'Regalos',
            'description' => 'Regalos',
            'keywords' => 'Regalos',
            'image' => 'items/'.Str::slug('Regalos').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Juguetes',
            'slug' => Str::slug('Juguetes'),
            'shortdescription' => 'Juguetes',
            'longdescription' => 'Juguetes',
            'title' => 'Juguetes',
            'description' => 'Juguetes',
            'keywords' => 'Juguetes',
            'image' => 'items/'.Str::slug('Juguetes').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Automóviles',
            'slug' => Str::slug('Automóviles'),
            'shortdescription' => 'Automóviles',
            'longdescription' => 'Automóviles',
            'title' => 'Automóviles',
            'description' => 'Automóviles',
            'keywords' => 'Automóviles',
            'image' => 'items/'.Str::slug('Automóviles').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Servicios Profesionales',
            'slug' => Str::slug('Servicios Profesionales'),
            'shortdescription' => 'Servicios Profesionales',
            'longdescription' => 'Servicios Profesionales',
            'title' => 'Servicios Profesionales',
            'description' => 'Servicios Profesionales',
            'keywords' => 'Servicios Profesionales',
            'image' => 'items/'.Str::slug('Servicios Profesionales').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Servicios No Profesionales',
            'slug' => Str::slug('Servicios No Profesionales'),
            'shortdescription' => 'Servicios No Profesionales',
            'longdescription' => 'Servicios No Profesionales',
            'title' => 'Servicios No Profesionales',
            'description' => 'Servicios No Profesionales',
            'keywords' => 'Servicios No Profesionales',
            'image' => 'items/'.Str::slug('Servicios No Profesionales').'.jpg',
            'state'=>1,
        ]);



        Item::create([
            'name' => 'Hogar',
            'slug' => Str::slug('Hogar'),
            'shortdescription' => 'Hogar',
            'longdescription' => 'Hogar',
            'title' => 'Hogar',
            'description' => 'Hogar',
            'keywords' => 'Hogar',
            'image' => 'items/'.Str::slug('Hogar').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Ferretería y Contrucción',
            'slug' => Str::slug('Ferretería y Contrucción'),
            'shortdescription' => 'Ferretería y Contrucción',
            'longdescription' => 'Ferretería y Contrucción',
            'title' => 'Ferretería y Contrucción',
            'description' => 'Ferretería y Contrucción',
            'keywords' => 'Ferretería y Contrucción',
            'image' => 'items/'.Str::slug('Ferretería y Contrucción').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Libreria y Oficina',
            'slug' => Str::slug('Libreria y Oficina'),
            'shortdescription' => 'Libreria y Oficina',
            'longdescription' => 'Libreria y Oficina',
            'title' => 'Libreria y Oficina',
            'description' => 'Libreria y Oficina',
            'keywords' => 'Libreria y Oficina',
            'image' => 'items/'.Str::slug('Libreria y Oficina').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Ropas y Accesorios',
            'slug' => Str::slug('Ropas y Accesorios'),
            'shortdescription' => 'Ropas y Accesorios',
            'longdescription' => 'Ropas y Accesorios',
            'title' => 'Ropas y Accesorios',
            'description' => 'Ropas y Accesorios',
            'keywords' => 'Ropas y Accesorios',
            'image' => 'items/'.Str::slug('Ropas y Accesorioss').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Belleza',
            'slug' => Str::slug('Belleza'),
            'shortdescription' => 'Belleza',
            'longdescription' => 'Belleza',
            'title' => 'Belleza',
            'description' => 'Belleza',
            'keywords' => 'Belleza',
            'image' => 'items/'.Str::slug('Belleza').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Medicina',
            'slug' => Str::slug('Medicina'),
            'shortdescription' => 'Medicina',
            'longdescription' => 'Medicina',
            'title' => 'Medicina',
            'description' => 'Medicina',
            'keywords' => 'Medicina',
            'image' => 'items/'.Str::slug('Medicina').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Animales y Mascotas',
            'slug' => Str::slug('Animales y Mascotas'),
            'shortdescription' => 'Animales y Mascotas',
            'longdescription' => 'Animales y Mascotas',
            'title' => 'Animales y Mascotas',
            'description' => 'Animales y Mascotas',
            'keywords' => 'Animales y Mascotas',
            'image' => 'items/'.Str::slug('Animales y Mascotas').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Suministros y Accesorios',
            'slug' => Str::slug('Suministros y Accesorios'),
            'shortdescription' => 'Suministros y Accesorios',
            'longdescription' => 'Suministros y Accesorios',
            'title' => 'Suministros y Accesorios',
            'description' => 'Suministros y Accesorios',
            'keywords' => 'Suministros y Accesorios',
            'image' => 'items/'.Str::slug('Suministros y Accesorios').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Turismo',
            'slug' => Str::slug('Turismo'),
            'shortdescription' => 'Turismo',
            'longdescription' => 'Turismo',
            'title' => 'Turismo',
            'description' => 'Turismo',
            'keywords' => 'Turismo',
            'image' => 'items/'.Str::slug('Turismo').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Deporte',
            'slug' => Str::slug('Deporte'),
            'shortdescription' => 'Deporte',
            'longdescription' => 'Deporte',
            'title' => 'Deporte',
            'description' => 'Deporte',
            'keywords' => 'Deporte',
            'image' => 'items/'.Str::slug('Deporte').'.jpg',
            'state'=>1,
        ]);


        Item::create([
            'name' => 'Máquinas y Fabricaciones',
            'shortdescription' => 'Máquinas y Fabricaciones',
            'longdescription' => 'Máquinas y Fabricaciones',
            'title' => 'Máquinas y Fabricaciones',
            'description' => 'Máquinas y Fabricaciones',
            'keywords' => 'Máquinas y Fabricaciones',
            'slug' => Str::slug('Máquinas y Fabricaciones'),
            'image' => 'items/'.Str::slug('Maquinas y Fabricaciones').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Repuestos',
            'slug' => Str::slug('Repuestos'),
            'shortdescription' => 'Repuestos',
            'longdescription' => 'Repuestos',
            'title' => 'Repuestos',
            'description' => 'Repuestos',
            'keywords' => 'Repuestos',
            'image' => 'items/'.Str::slug('Repuestos').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Frutas, Alimentos y Comidas',
            'slug' => Str::slug('Frutas, Alimentos y Comidas'),
            'shortdescription' => 'Frutas, Alimentos y Comidas',
            'longdescription' => 'Frutas, Alimentos y Comidas',
            'title' => 'Frutas, Alimentos y Comidas',
            'description' => 'Frutas, Alimentos y Comidas',
            'keywords' => 'Frutas, Alimentos y Comidas',
            'image' => 'items/'.Str::slug('Frutas, Alimentos y Comidas').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Bebidas',
            'slug' => Str::slug('Bebidas'),
            'shortdescription' => 'Bebidas',
            'longdescription' => 'Bebidas',
            'title' => 'Bebidas',
            'description' => 'Bebidas',
            'keywords' => 'Bebidas',
            'image' => 'items/'.Str::slug('Bebidas').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Licores',
            'slug' => Str::slug('Licores'),
            'shortdescription' => 'Licores',
            'longdescription' => 'Licores',
            'title' => 'Licores',
            'description' => 'Licores',
            'keywords' => 'Licores',
            'image' => 'items/'.Str::slug('Licores').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'General',
            'slug' => Str::slug('General'),
            'shortdescription' => 'General',
            'longdescription' => 'General',
            'title' => 'General',
            'description' => 'General',
            'keywords' => 'General',
            'image' => 'items/'.Str::slug('General').'.jpg',
            'state'=>1,
        ]);

        Item::create([
            'name' => 'Otros',
            'slug' => Str::slug('Otros'),
            'shortdescription' => 'Otros',
            'longdescription' => 'Otros',
            'title' => 'Otros',
            'description' => 'Otros',
            'keywords' => 'Otros',
            'image' => 'items/'.Str::slug('Otros').'.jpg',
            'state'=>1,
        ]);



    }
}
