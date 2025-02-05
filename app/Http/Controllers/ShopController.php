<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('shop.index', compact('categories'));
    }
    public function sendServiceCategory($category, $service)
    {
        $email = auth()->user()->email;
        $phone = auth()->user()->phone;
        $category = Category::findOrFail($category);
        $service = Service::findOrFail($service);
        echo $email." ".$phone;

    }
    public function sendEditOrder($category, $service)
    {

        $category = Category::findOrFail($category);
        $service = Service::findOrFail($service);

        return view('shop.edit-order', compact('category', 'service'));

    }
    public function store(Request $request)
    {
        dd($request);
    }
}
