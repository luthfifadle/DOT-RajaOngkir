<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Province;
use App\Models\City;

class RajaOngkir
{
    public function province ($id = null)
    {
        if ($id) {
            $response = Http::withHeaders([
                'key' => env('RAJAONGKIR_KEY')
            ])->get(env('RAJAONGKIR_URL').'/province'.$id)->object();

        } else {
            $response = Http::withHeaders([
                'key' => env('RAJAONGKIR_KEY')
            ])->get(env('RAJAONGKIR_URL').'/province')->object();
        }

        return $response;
    }

    public function fetchingProvince ()
    {
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_KEY')
        ])->get(env('RAJAONGKIR_URL').'/province')->object();

        if ($response->rajaongkir->status->code == 200)
        {
            $datas = $response->rajaongkir->results;

            foreach($datas as $data) {
                $checkData = Province::find($data->province_id);

                if (!$checkData) {
                    $data = (array) $data;
                    Province::create($data);
                }
            }
        }
    }

    public function city ($id = null)
    {
        if ($id) {
            $response = Http::withHeaders([
                'key' => env('RAJAONGKIR_KEY')
            ])->get(env('RAJAONGKIR_URL').'/city'.$id)->object();

        } else {
            $response = Http::withHeaders([
                'key' => env('RAJAONGKIR_KEY')
            ])->get(env('RAJAONGKIR_URL').'/city')->object();
        }

        return $response;
    }

    public function fetchingCity ()
    {
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_KEY')
        ])->get(env('RAJAONGKIR_URL').'/city')->object();

        if ($response->rajaongkir->status->code == 200)
        {
            $datas = $response->rajaongkir->results;

            foreach($datas as $data) {
                $checkData = City::find($data->city_id);

                if (!$checkData) {
                    $data = (array) $data;
                    City::create($data);
                }
            }
        }
    }
}
