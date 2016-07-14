<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParametersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ParametersController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function store(ParametersRequest $request)
    {
        $pricePerDay = $request->get('pricePerDay');
        $pricePerPacket = $request->get('pricePerPacket');
        $startDate = date_create($request->get('startDate'));
        $endDate = date_create($request->get('endDate'));
        $UIN = $request->get('UIN');
        $days = $startDate->diff($endDate)->days;

        $sum = $pricePerDay * $days + $pricePerPacket;


        $response = array(
            'status' => 'Successful response',
        );
        return Response::json($response);
    }
}