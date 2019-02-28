<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Deck;

class DeckController extends BaseController
{
    public function index(Request $req) {
        $decks = Deck::all();
        $data = [];
        $data['decks'] = $decks;
        return view('admin.decks.index', ['data' => $data]);
    }

    public function create(Request $req) {
        $data = [];
        return view('admin.decks.create', ['data' => $data]);
    }

    public function store(Request $req) {
        // For more info on how to do validation check:
        // https://laravel.com/docs/master/validation
        $validatedData = $req->validate([
            'deck.name' => 'required',
        ],[
            'deck.name.required' => 'El nombre del deck es requerido',
        ]);
        Deck::create($validatedData['deck']);
        return redirect()->route('admin.decks.index');
    }

    public function show(Request $req, Deck $deck) {
        $data = [];
        $data['deck'] = $deck;
        return view('admin.decks.show', ['data' => $data]);
    }
}
