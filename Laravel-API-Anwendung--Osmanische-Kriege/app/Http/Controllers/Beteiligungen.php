<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beteiligung;
use Illuminate\Support\Facades\DB;

class Beteiligungen extends Controller
{
    public function Beteiligungssuche(Request $request)
    {
        $query = Beteiligung::query();

        if (($start = $request->input('start')) && ($ende = $request->input('stop'))) {
            $query->whereDate("beteiligung.stopdatum", '>=', $start)
                ->whereDate("beteiligung.startdatum", '<=', $ende);
        } else {
            if ($datum = $request->input('start')) {
                $query->where("beteiligung.startdatum", $datum);
            }

            if ($datum = $request->input('stop')) {
                $query->where("beteiligung.stopdatum", $datum);
            }
        }

        if ($herrscherID = $request->input('herrscherID')) {
            $query->where("beteiligung.herrscherID", $herrscherID);
        }

        if ($kriegID = $request->input('kriegID')) {
            $query->where("beteiligung.kriegID", $kriegID);
        }

        if ($ist_beginner = $request->input('beginner')) {
            $query->where("beteiligung.ist_beginner", $ist_beginner);
        }

        if ($beteiligungID = $request->input('id')) {
            $query->where("beteiligung.id", $beteiligungID);
        }

        if ($ist_nebenbeteiliger = $request->input('nebenbeteiliger')) {
            $query->where("beteiligung.ist_nebenbeteiliger", $ist_nebenbeteiliger);
        }
        /* Left joins */
        $query->with('Herrscher');
        $query->with('Krieg');

        return response()->json($query->get());
    }
}
