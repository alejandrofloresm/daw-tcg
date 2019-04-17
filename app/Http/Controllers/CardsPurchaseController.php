<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Card;

class CardsPurchaseController extends BaseController
{
    public function index(Request $req, Card $card) {
        $data  = [];
        $data['card'] = $card;
        return view('cards-purchase.index', ['data' => $data]);
    }
}
