<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Card;
use DB;

class ReportCardController extends BaseController
{
    public function index(Request $req) {
        $query = "SELECT SUM(attack) as attack_total, SUM(defense) as defense_total
        FROM cards
        WHERE 1";
        $raw = DB::select($query);
        $attack_total = $raw[0]->attack_total;
        $defense_total = $raw[0]->defense_total;
        $data = [];
        $data['attack_total'] = $attack_total;
        $data['defense_total'] = $defense_total;
        return view('report-card.index', ['data' => $data]);
    }
}
