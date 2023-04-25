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

        $categories = CategoryTranslate::where('lang_code', $locale)
                        ->with('category')
                        ->get()
                        ->keyBy('category_id');

        return view('categories', ['categories' => $categories]);
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
