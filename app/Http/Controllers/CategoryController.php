<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::query()
            ->whereNull('parent_id')
            ->where('active', true)
            ->get();


        return view('categories.index', [
            'categories' => $categories
        ]);
    }
}
