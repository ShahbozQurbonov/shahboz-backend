<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//          Category::create([
//              'name'=>'category1',
//          ]);

        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол'
            ],
        ]);

        Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван'
            ],
        ]);


        Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло'
            ],
        ]);


        Category::create([
        'name' => [
            'uz' => 'Yotoq',
            'ru' => 'Кровать'
        ],
        ]);

        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул'
            ],
        ]);
    }
}
