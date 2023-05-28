<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\CovidDataService;
use Illuminate\Http\Request;

class CovidDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CovidDataService $covidDataService, Request $request)
    {
        return
            $covidDataService->getDataByCountry(
                $request->iso ?? "USA"
            );
    }

}
