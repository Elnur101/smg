<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            ['name' => 'Мототехника', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Хэтчбек', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Седан', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Минивэн', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Кроссовер', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Джип', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Микроавтобусы', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Автобус', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Спецтехника', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Грузовики', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Строительная техника', 'image'=>'no-image.png','parent_id' => null],
            ['name' => 'Погрузчик фронтальный', 'image'=>'no-image.png','parent_id' => 9],
            ['name' => 'Кран', 'image'=>'no-image.png','parent_id' => 9],
            ['name' => 'Погрузчик карьерный', 'image'=>'no-image.png','parent_id' => 9],
            ['name' => 'Эксковатор', 'image'=>'no-image.png','parent_id' => 9],
            ['name' => 'Бульдозер', 'image'=>'no-image.png','parent_id' => 9],
            ['name' => 'Самосвал', 'image'=>'no-image.png','parent_id' => 10],
            ['name' => 'Прицеп', 'image'=>'no-image.png','parent_id' => 10],
            ['name' => 'Полуприцеп', 'image'=>'no-image.png','parent_id' => 10],
            ['name' => 'Тягач', 'image'=>'no-image.png','parent_id' => 10],
            ['name' => 'Шаланда', 'image'=>'no-image.png','parent_id' => 10],
            ['name' => 'Автобетономеситель', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Автогрейдер', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Асфальтобетоноукладчик', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Грохот', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Гудронатор', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Дорожная фреза', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Дорожный каток', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Дробильно-сортировочное оборудование', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Думпер', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Компрессор', 'image'=>'no-image.png','parent_id' => 11],
            ['name' => 'Рециклер/стабилизатор', 'image'=>'no-image.png','parent_id' => 11],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

    }
}
