<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use Illuminate\Support\Facades\DB;

class State extends Controller
{
    public function list($countryId) {
        $pgsz = 10;
        $country = DB::table('countries')->where('id', $countryId)->first();
        $states = DB::table('states')->where('country_id', $countryId)->paginate($pgsz);
        return view('states.list')->with(['country' => $country, 'states' => $states]);
    }
}
