<?php
namespace App\Helpers;

class Responser {

    protected $statusCode202;



    public function __construct()
    {
        $this->statusCode202=202;
    }

    /**
     *
     * @param mixed $response
     */
    public function response202($response){
        return response()->json(['response' => $response], $this->statusCode202);
    }



}
