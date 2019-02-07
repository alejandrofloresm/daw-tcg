<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Card;
use App\Models\Category;

class CardController extends BaseController
{
    public function index(Request $req) {
        $cards = Card::all();
        $data = [];
        $data['cards'] = $cards;
        return view('admin.cards.index', ['data' => $data]);
    }

    public function create(Request $req) {
        $data = [];
        $data['categories'] = Category::all();
        return view('admin.cards.create', ['data' => $data]);
    }

    public function store(Request $req) {
        $cardData = $req->input('card');
        Card::create($cardData);
        return redirect()->route('admin.cards.index');
    }
}
