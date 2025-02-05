<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        if(!Schema::hasTable('services')){
//            return redirect()->back()->withErrors(['msg'=>'Таблица services отсутствует в базе данных.']);
//        }
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->with('children')->get();
        return view('admin.category.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName(); // Добавляем метку времени для уникальности
            $file->storeAs('categories', $filename, 'public');
            $data['image'] = $filename; // Сохраняем в БД новый путь
        } else {
            $data['image'] = 'no-image.png'; // Если нет изображения, записываем заглушку
        }

        Category::create($data);
        return redirect()->route('admin.category.index')->with('success', 'Категория успешно добавлена!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::whereNull('parent_id')->with('children')->get();
        return view('admin.category.edit', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryStoreRequest $request, Category $category)
    {
        $data = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = $file->getClientOriginalName();
            $file->storeAs('categories', $data['image'], 'public');
        }

        $category->update($data);
        return redirect()->route('admin.category.index')->with('success', 'Категория успешно исправлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
