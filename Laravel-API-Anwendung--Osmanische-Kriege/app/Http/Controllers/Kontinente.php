<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontinent;

class Kontinente extends Controller
{
    public function Kontinentsuche(Request $request)
    {
        $query = Kontinent::query();
        if ($kontinent = $request->input('id')) {
            $query->where("kontinent.id", $kontinent);
        }

        if ($kontinentname = $request->input('name')) {
            $query->where("kontinent.name", $kontinentname);
        }

        return response()->json($query->get());
    }
}
