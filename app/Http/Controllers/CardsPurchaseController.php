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

    public function transaction(Request $req, Card $card) {
        $data = [];
        $data['card'] = $card;
        $data['transaction'] = 'transaction-done';
        // Verificar que el Order ID que te envía Paypal sea válido.
        // Ver la documentación de Paypal
        // Modificar tu orden a un estatus de pagada.
        return response()->json($data);
    }
}
