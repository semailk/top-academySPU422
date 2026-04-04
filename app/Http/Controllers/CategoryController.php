<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = [
          'Ноутбуки' => [
              'Apple',
              'MSI',
              'Acer',
              'HP'
          ],
          'Телефоны' => [
              'Iphone',
              'Samsung',
              'Oppo',
              'Xiaomi',
          ],
          'Холодильники' => [
              'Индезит',
              'Борюся',
              'Beko',
              'LG'
          ],
          'Стиральные машинки' => [
              'LG',
              'Samsung',
              'Индезит',
              'Beko'
          ]
        ];

        return view('categories.index', [
            'categories' => $categories
        ]);
    }
}
