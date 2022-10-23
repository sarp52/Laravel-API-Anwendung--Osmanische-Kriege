<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;


class Regionen extends Controller
{
    public function Regionssuche(Request $request)
    {
        $query = Region::query();

        if ($kontinentID = $request->input('kontinentID')) {
            $query->where("region.kontinentID", $kontinentID);
        }
        if ($regionID = $request->input('id')) {
            $query->where("region.id", $regionID);
        }
        if ($regionname = $request->input('name')) {
            $query->where("region.name", $regionname);
        }

        /* Left joins */
        $query->with('Kontinent');
        return response()->json($query->get());
    }
}
