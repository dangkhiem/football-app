<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function successRes()
    {
        return response()->json(
            [], 
            Response::HTTP_OK
        );
    }

    protected function failureRes()
    {
        return response()->json(
            [], 
            Response::HTTP_BAD_REQUEST
        );
    }
}
