<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Название категории, которую нужно исключить
        $excludedCategoryName = 'Мототехника';

        // Получаем категорию "Мототехника"
        $carWashCategory = Category::where('name', $excludedCategoryName)->first();

        // Получаем все категории, кроме "Мототехника"
        $otherCategories = Category::where('name', '!=', $excludedCategoryName)->get();

        // Сервисы для всех категорий, кроме "Автомойка"
        $commonServices = [
            ['name' => 'Помыть снаружи', 'description' => 'Мойка кузова автомобиля с использованием шампуня.', 'price' => 300],
            ['name' => 'Помыть внутри', 'description' => 'Чистка салона автомобиля.', 'price' => 500],
            ['name' => 'Полная автомойка', 'description' => 'Комплексная мойка кузова и салона.', 'price' => 800],
            ['name' => 'Помыть мотор', 'description' => 'Мойка двигателя и подкапотного пространства.', 'price' => 700],
            ['name' => 'Химчистка салона', 'description' => 'Глубокая химчистка всех элементов салона.', 'price' => 1500],
            ['name' => 'Очернить баллоны', 'description' => 'Обработка шин составом для блеска и защиты.', 'price' => 200],
            ['name' => 'Натереть пластмассы блеском', 'description' => 'Полировка пластиковых элементов.', 'price' => 250],
            ['name' => 'Сухой туман', 'description' => 'Удаление запахов и дезинфекция салона.', 'price' => 1000],
        ];

        // Сервисы для категории "Автомойка"
        $carWashServices = [
            ['name' => 'Помыть снаружи', 'description' => 'Мойка кузова автомобиля с использованием шампуня.', 'price' => 300],
            ['name' => 'Помыть мотор', 'description' => 'Мойка двигателя и подкапотного пространства.', 'price' => 700],
            ['name' => 'Очернить баллоны', 'description' => 'Обработка шин составом для блеска и защиты.', 'price' => 200],
            ['name' => 'Натереть пластмассы блеском', 'description' => 'Полировка пластиковых элементов.', 'price' => 250],
        ];

        // Добавляем общие сервисы ко всем категориям, кроме "Автомойка"
        foreach ($otherCategories as $category) {
            foreach ($commonServices as $service) {
                Service::create([
                    'name' => $service['name'],
                    'description' => $service['description'],
                    'price' => $service['price'],
                    'category_id' => $category->id,
                ]);
            }
        }

        // Добавляем специфические сервисы для категории "Автомойка"
        if ($carWashCategory) {
            foreach ($carWashServices as $service) {
                Service::create([
                    'name' => $service['name'],
                    'description' => $service['description'],
                    'price' => $service['price'],
                    'category_id' => $carWashCategory->id,
                ]);
            }
        }
    }
}
