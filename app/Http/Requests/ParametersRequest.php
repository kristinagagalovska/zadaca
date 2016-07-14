<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ParametersRequest extends FormRequest
{
    public function rules()
    {
        return [
            'pricePerDay' => 'required|integer',
            'pricePerPacket' => 'integer',
            'startDate' => 'required|date',
            'endDate' => 'required|date'
        ];
    }

    public function authorize()
    {
        return true;
    }

}