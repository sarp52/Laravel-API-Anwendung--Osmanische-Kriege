<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herrscher;
use Illuminate\Support\Facades\DB;

class Herrschern extends Controller
{
    public function Herrschersuche(Request $request)
    {
        $query = Herrscher::query();

        if (($start = $request->input('start')) && ($ende = $request->input('stop'))) {
            $query->whereDate("herrscher.sterbedatum", '>=', $start)
                ->whereDate("herrscher.geburtsdatum", '<=', $ende);
        } else {
            if ($start = $request->input('start')) {
                $query->where("herrscher.geburtsdatum", '>=', $start);
            }
            if ($ende = $request->input('stop')) {
                $query->where("herrscher.sterbedatum", '<=', $ende);
            }
        }

        if ($herrscherID = $request->input('id')) {
            $query->where("herrscher.id", $herrscherID);
        }
        if ($herrschername = $request->input('name')) {
            $query->where("herrscher.name", $herrschername);
        }
        /*
        DB::enableQueryLog(); // Enable query log
        $query->get();
        dd(DB::getQueryLog()); // Show results of log
        */
        return response()->json($query->get());
    }
}
