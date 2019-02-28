<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Deck;
use App\Models\Card;

class DeckCardController extends BaseController
{
    public function create(Request $req, Deck $deck) {
        $data = [];
        $data['deck'] = $deck;
        $data['cards'] = Card::all();
        return view('admin.decks.card.create', ['data' => $data]);
    }

    public function store(Request $req, Deck $deck) {
        $card = Card::find($req->input('card_deck.card_id'));
        $deck->cards()->attach($card->id);
        return redirect()->route('admin.decks.show', ['deck' => $deck]);
    }
}
