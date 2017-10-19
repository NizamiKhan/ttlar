<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Политика']);
        Category::create(['name' => 'Спорт']);
        Category::create(['name' => 'Наука']);
        Category::create(['name' => 'Культура']);
        Category::create(['name' => 'Происшествия']);
        Category::create(['name' => 'Экономика']);
    }
}
