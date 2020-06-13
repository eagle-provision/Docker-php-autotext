<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Country extends Controller
{
    public function list() {
        $pgsz = 10;
        $countries = DB::table('countries')->orderBy('name', 'asc')->paginate($pgsz);
        return view('countries.list')->with(['countries' => $countries]);
    }
}
