<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryServiceController extends Controller
{
    public function showServices(Category $category)
    {
        $services = $category->services;
        dd($services);
    }
}
