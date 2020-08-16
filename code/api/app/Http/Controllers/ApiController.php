<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function getFireWaters() {
        $firewaters = \App\FireWater::all();
        return response()->json($firewaters)->header('Access-Control-Allow-Origin', '*');
    }
    public function getFireHydrants() {
        ini_set("memory_limit", "2048M");
        $firehydrants = \App\FireHydrant::limit(1000)->get();
        $arr = [];
        foreach ($firehydrants as $fh) {
            $ar = new \stdClass();
            $ar->id = $fh->id;
            $ar->lat = $fh->lat;
            $ar->lng = $fh->lng;
            $arr[] = $ar;
        }
        return response()->json($arr)->header('Access-Control-Allow-Origin', '*');
    }
    public function postFireHydrants(Request $request) {
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $firehydrants = \App\FireHydrant::whereRaw("ST_DWithin(geom, 'SRID=4326;POINT(".$lng." ".$lat.")', 3000)")->get();
        return response()->json($firehydrants)->header('Access-Control-Allow-Origin', '*');
    }
    public function postFirePillars(Request $request) {
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $firepillars = \App\FirePillar::all();
        return response()->json($firepillars)->header('Access-Control-Allow-Origin', '*');
    }
    public function getFirePillars() {
        $firepillars = \App\FirePillar::all();
        return response()->json($firepillars)->header('Access-Control-Allow-Origin', '*');
    }
    //
}
