<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Response;
use App\Services\RajaOngkir;
use App\Models\City;

class CityController extends Controller
{
    use Response;
    protected $rajaOngkirService;

    public function __construct(RajaOngkir $rajaOngkirService)
    {
        $this->rajaOngkirService = $rajaOngkirService;
    }

    public function index (Request $request)
    {
        if ($request->swap_raja_ongkir == 'true')
        {
            $response = $this->rajaOngkirService->city($request->city_id);
            $data = $response->rajaongkir->results;
        } else {
            if ($request->city_id) {
                $data = City::where('city_id', $request->city_id)->first();
            } else {
                $data = City::get();
            }
        }

        return $this->sendResponse($data, 'Get data Province success');
    }
}
