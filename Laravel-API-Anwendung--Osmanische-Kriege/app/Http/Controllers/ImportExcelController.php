<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportExcelController extends Controller
{
    function index()
    {
        $data = DB::table('hbtabelle')->orderBy('herrschaftbereichID', 'ASC')->get();
        return view('import_excel', compact('data'));
    }
}
