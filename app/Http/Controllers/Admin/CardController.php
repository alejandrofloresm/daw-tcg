<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Card;
use App\Models\Category;

class CardController extends BaseController
{
    public function index(Request $req, $order = null) {
        // 1. Cartas donde el ataque sea mayor que 10
        // $cards = Card::where('attack', '>', 45)->get();
        // 2. Cartas donde el ataque sea mayor que 45 y defensa mayor que 35
        /*
        $cards = Card::where('attack', '>', 45)
            ->where('defense', '>', 35)
            ->get();
        */
        // 3. Cartas donde el ataque sea mayor que 45 y defensa mayor que 35
        // ordenadas de forma ascendente según el ataque y después ascendente
        // según su defensa
        /*
        $cards = Card::where('attack', '>', 45)
            ->where('defense', '>', 35)
            ->orderBy('attack', 'asc')
            ->orderBy('defense', 'asc')
            ->get();
        */
        // 4. Cartas que sean de tipo tierra donde el ataque sea mayor a 45
        // y defensa mayor que 35, ordenadas por ataque ascendente y después
        // defensa ascendente
        /*
        $cards = Card::with('category')
            ->whereHas('category', function($query) {
                $query->where('name', '=', 'Earth');
            })
            ->where('attack', '>', 45)
            ->where('defense', '>', 35)
            ->orderBy('attack', 'asc')
            ->orderBy('defense', 'asc')
            ->get();
        */
        // 4. ALT - Cartas que sean de tipo tierra donde el ataque sea mayor a 45
        // y defensa mayor que 35, ordenadas por ataque ascendente y después
        // defensa ascendente
        /*
        $earthCategory = Category::where('name', '=', 'Earth')
            ->first();
        $cards = Card::with('category')
            ->where('attack', '>', 45)
            ->where('defense', '>', 35)
            ->where('category_id', '=', $earthCategory->id)
            ->orderBy('attack', 'asc')
            ->orderBy('defense', 'asc')
            ->get();
        */
        // 5. Obten el promedio de ataque de todas las cartas
        /*
        $avg = Card::avg('attack');
        dd($avg);
        */
        // 6. Realizar un query RAW que me regrese el modelo
        /*
        $query = "SELECT ca.*
            FROM cards ca
            WHERE ca.attack > :attack
            ORDER BY ca.defense ASC";
        $params = [];
        $params['attack'] = 45;
        $cards = Card::fromQuery($query, $params);
        */
        if ($order) {
            $cards = Card::where('id', '!=', 'null')->orderBy('attack', $order)->get();
        } else {
            $cards = Card::where('id', '!=', 'null')->get();
        }


        // Operaciones de sumas, promedio, etcétera
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
