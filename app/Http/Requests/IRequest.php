<?php

namespace App\Http\Requests;

interface IRequest
{
    public function rules();
    public function messages();
}
