<?php
namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Card;
// php artisan make:resource Card
use App\Http\Resources\Card as CardResource;
// php artisan make:resource Cards --collection
use App\Http\Resources\Cards as CardsCollection;

class CardsController extends BaseController
{
    public function index(Request $req) {
        $cards = Card::all();
        return new CardsCollection($cards);
    }

    public function show(Request $req, Card $card) {
        return new CardResource($card);
    }
}
