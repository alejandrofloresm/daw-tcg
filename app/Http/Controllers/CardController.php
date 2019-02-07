<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Card;

class CardController extends BaseController
{
    public function index(Request $req) {
        $cards = Card::all();
        $data = [];
        $data['cards'] = $cards;
        return view('cards.index', ['data' => $data]);
    }
}
