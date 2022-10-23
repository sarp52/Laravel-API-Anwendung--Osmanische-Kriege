<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herrschaftbereich;

class Herrschaftbereiche extends Controller
{
    public function Herrschaftbereichsuche(Request $request)
    {
        $query = Herrschaftbereich::query();

        if (($start = $request->input('start')) && ($ende = $request->input('stop'))) {
            $query->whereDate("herrschaftbereich.endedatum", '>=', $start)
                ->whereDate("herrschaftbereich.startdatum", '<=', $ende);
        } else {
            if ($datum = $request->input('start')) {
                $query->where("herrschaftbereich.startdatum", $datum);
            }
            if ($datum = $request->input('stop')) {
                $query->where("herrschaftbereich.endedatum", $datum);
            }
        }

        if ($herrschaftbereichID = $request->input('id')) {
            $query->where("herrschaftbereich.id", $herrschaftbereichID);
        }

        if ($regionID = $request->input('regionID')) {
            $query->where("herrschaftbereich.regionID", $regionID);
        }

        if ($herrscherID = $request->input('herrscherID')) {
            $query->where("herrschaftbereich.herrscherID", $herrscherID);
        }

        /* Left joins */
        $query->with('Herrscher');
        $query->with('Region');
        return response()->json($query->get());
    }
}
