<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;

class AIController extends Controller
{
    public function index(Request $request){
        $locationData = $this->getLocations($request);
        
        $latitude = $locationData['lat'];
        $longitude = $locationData['lon'];
        $url = 'http://127.0.0.1:5000/product/'.$latitude.'/'.$longitude.'/';
        $response = Http::get($url);
        dd($response);
        // dd($url);
        dd($this->fetchDataAI($latitude, $longitude));
        
        // return $this->fetchDataAI($latitude, $longitude);
    }

    public function getLocations(Request $request)
    {
        $userIp = $request->ip();
        $location = GeoIP::getLocation($userIp);

        $data = [
            'lat' => $location->lat,
            'lot' => $location->lon
        ];
        return $data;
    }
    
    public function fetchDataAI($latitude, $longitude){
        $url = 'http://127.0.0.1:5000/product/'.$latitude.'/'.$longitude.'/';

        try {
            $response = Http::get($url);

            if ($response->successful()) {
                $data = $response->json();
                return response()->json($data);
            } else {
                return response()->json([
                    'error' => 'Unable to fetch data',
                    'message' => $response->body()
                ], $response->status());
            }

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Unable to fetch data',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
