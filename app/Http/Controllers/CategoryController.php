<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    public function index()
    {
        $locale = App::getLocale();

        $categories = CategoryTranslate::where('lang_code', $locale)->with('category')->get();


        //todo do with create format data

        $parents = [];
        foreach ($categories as $category) {
            $parents[$category->category_id] = $category->name;
        }

        return view('categories', ['categories' => $categories, 'parents' => $parents ]);
    }

    public function store(Request $request)
    {
        foreach ($request->input('categories') as $key =>  $name) {
            $category = CategoryTranslate::find($key);
            $category->name = $name;
            $category->save();
        }
        return back()->withInput();
    }
}
