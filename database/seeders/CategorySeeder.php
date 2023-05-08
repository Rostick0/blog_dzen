<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $categories = [
        'Технологии', // 1
        'Финансы', // 2
        'Бизнес', // 3
        'Новости', // 4
        'Кулинария', // 5
        'Мода', // 6
        'Музыка', // 7
        'Спорт', // 8
        'Политика', // 9
        'Туризм', // 10
        'Искусство', // 11
        'Автомобили', // 12
        'Видеоигры', // 13
        'Домашние животные', // 14
    ];
    public function run()
    {
        DB::table('categories')->insert(
            $this->categories
        );
    }
}
