<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReportsResourceCollection;
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
