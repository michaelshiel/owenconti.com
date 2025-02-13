<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ListCategoriesController extends Controller
{
    public function __invoke()
    {
        seo()->title('Articles');

        $categories = Category::get();

        return view('pages.categories.list', ['categories' => $categories]);
    }
}
