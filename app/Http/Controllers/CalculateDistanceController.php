<?php

namespace App\Http\Controllers;

use App\Traits\Calculate;
use Illuminate\Http\Request;
use App\Http\Requests\CalculateDistanceRequest;

class CalculateDistanceController extends Controller
{
   use Calculate ;


    /**
     * addDistance
     *
     * @return void
     */
    public function addDistance(CalculateDistanceRequest $request)
    {
        $result = $this->process($request->all());
      
        return response([
            'success' => true,
            'data' => $result,
            'message'=> 'Distance conversion was successful'
        ]);    
    }
    

}


    

