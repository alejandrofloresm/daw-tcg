<?php
namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Category;
// php artisan make:resource Category
use App\Http\Resources\Category as CategoryResource;
// php artisan make:resource Categories --collection
use App\Http\Resources\Categories as CategoriesCollection;

class CategoriesController extends BaseController
{
    public function index(Request $req) {
        $cards = Category::all();
        return new CategoriesCollection($cards);
    }

    public function show(Request $req, Category $card) {
        return new CategoryResource($card);
    }
}
