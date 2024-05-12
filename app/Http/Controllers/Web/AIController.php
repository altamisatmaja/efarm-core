<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;

class AIController extends Controller
{
    public function getLocation(Request $request)
    {
        // Mendapatkan alamat IP pengguna
        $ip = $request->ip();
        dd($request->lat);

        $location = GeoIP::getLocation($ip);
        // dd($location);

        if (!$location) {
            return response()->json(['error' => 'Failed to determine user location.'], 500);
        }

        $userLatitude = $location->lat;
        $userLongitude = $location->lon;

        return response()->json(['lat' => $userLatitude, 'long' => $userLongitude]);
    }

    public function findNearestProduct(Request $request)
    {
        // Validasi input latitude dan longitude pengguna
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $userLatitude = $request->input('latitude');
        $userLongitude = $request->input('longitude');
        $radius = 50; // Radius in kilometers

        // Panggil algoritma A* untuk mencari produk terdekat
        $nearestProduct = $this->aStarAlgorithm($userLatitude, $userLongitude, $radius);

        if (!$nearestProduct) {
            return response()->json(['error' => 'No products found within the specified radius.'], 404);
        }

        return response()->json($nearestProduct);
    }

    private function aStarAlgorithm($userLatitude, $userLongitude, $radius)
    {
        // Mendapatkan semua produk dalam radius
        $products = Product::all();

        // Inisialisasi variabel untuk menyimpan produk terdekat
        $nearestProduct = null;
        $shortestDistance = INF; // Set ke nilai tak hingga pada awalnya

        // Loop melalui setiap produk untuk menemukan yang terdekat
        foreach ($products as $product) {
            // Hitung jarak antara lokasi pengguna dan lokasi produk
            $distance = $this->calculateDistance($userLatitude, $userLongitude, $product->latitude, $product->longitude);

            // Jika jarak produk kurang dari radius dan lebih pendek dari yang sebelumnya ditemukan
            if ($distance < $radius && $distance < $shortestDistance) {
                // Perbarui produk terdekat dan jarak terpendek
                $nearestProduct = $product;
                $shortestDistance = $distance;
            }
        }

        // Mengembalikan produk terdekat
        return $nearestProduct;
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $radius = 6371; // Radius bumi dalam kilometer

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $radius * $c;

        return $distance;
    }

    public function getLocationView(Request $request)
{
    // Mendapatkan lokasi pengguna dari controller
    $location = $this->getLocationFromController($request);

    // Menampilkan view location dengan data lokasi
    return view('customer.pages.ai.location', compact('location'));
}

public function findNearestProductView(Request $request)
{
    // Mendapatkan lokasi pengguna dari controller
    $location = $this->getLocationFromController($request);

    // Mendapatkan produk terdekat berdasarkan lokasi pengguna
    $product = $this->aStarAlgorithm($location['lat'], $location['long'], 50);

    // Menampilkan view nearest_product dengan data produk
    return view('customer.pages.ai.nearest', compact('product'));
}

private function getLocationFromController(Request $request)
{
    // Mendapatkan alamat IP pengguna
    $ip = $request->ip();

    // Menentukan lokasi pengguna berdasarkan alamat IP
    $location = GeoIP::getLocation($ip);

    // Mengembalikan lokasi pengguna
    return [
        'lat' => $location->lat,
        'long' => $location->lon,
    ];
}

}