<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Response;
use App\Services\RajaOngkir;
use App\Models\Province;

class ProvinceController extends Controller
{
    use Response;
    protected $rajaOngkirService;

    public function __construct(RajaOngkir $rajaOngkirService)
    {
        $this->rajaOngkirService = $rajaOngkirService;
    }

    public function index (Request $request)
    {
        if ($request->province_id) {
            $data = Province::where('province_id', $request->province_id)->first();
        } else {
            $data = Province::get();
        }

        return $this->sendResponse($data, 'Get data Province success');
    }
}
