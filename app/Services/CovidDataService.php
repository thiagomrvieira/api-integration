<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CovidDataService {

    public function getDataByCountry($country = 123)
    {
        return
            Http::get("https://covid-api.com/api/reports?iso={$country}")
                ->json();
    }

}
