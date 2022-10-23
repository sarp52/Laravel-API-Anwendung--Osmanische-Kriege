<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Krieg;

class Kriege extends Controller
{
    public function Kriegssuche(Request $request)
    {
        $query = Krieg::query();

        if ($start = $request->input('start') && $ende = $request->input('stop')) {
            $query->whereDate("krieg.stopdatum", '>=', $start)
                ->whereDate("krieg.startdatum", '<=', $ende);
        } else {
            if ($datum = $request->input('start')) {
                $query->where("krieg.startdatum", $datum);
            }
        }
        if ($regionID = $request->input('regionID')) {
            $query->where("krieg.regionID", $regionID);
        }
        if ($kriegID = $request->input('id')) {
            $query->where("krieg.id", $kriegID);
        }
        if ($kriegname = $request->input('name')) {
            $query->where("krieg.name", $kriegname);
        }
        if ($gegnerischeslandsname = $request->input('gegnerischesland')) {
            $query->where("krieg.gegnerischesland", $gegnerischeslandsname);
        }
        if ($gegnerischerherrschername = $request->input('gegnerischerherrscher')) {
            $query->where("krieg.gegnerischerherrscher", $gegnerischerherrschername);
        }
        if ($nebenbeteiligteslandsname = $request->input('nebenbeteiligtesland')) {
            $query->where("krieg.nebenbeteiligtesland", $nebenbeteiligteslandsname);
        }
        if ($grund = $request->input('grund')) {
            $query->where("krieg.grund", $grund);
        }
        if ($ergebnis = $request->input('ergebnis')) {
            $query->where("krieg.ergebnis", $ergebnis);
        }


        /* Left joins */
        $query->with('Region');
        return response()->json($query->get());
    }
}
