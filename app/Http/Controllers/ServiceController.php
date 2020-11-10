<?php


namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ServiceController
{
    public function consume()
    {
        $data = [];
        $client = new Client();
        $response = $client->request('GET', env('API_ENDPOINT'));
        $cars = json_decode($response->getBody(), true);
        $data["cars"] = $cars["data"];
        return view('service.cars')->with("data", $data);
    }
}
