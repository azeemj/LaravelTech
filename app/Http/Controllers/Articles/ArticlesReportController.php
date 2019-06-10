<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Contracts\Validation\Validator;
//use Illuminate\Validation\ValidationException;
use Symfony\Component\Process\Process;
use App\Helpers\Responser;

class ArticlesReportController extends Controller
{
    //

    private $responseBuilderObj;


    public function __construct(Responser $responseBuilder)
    {
        $this->responseBuilderObj=$responseBuilder;

    }

    /**
     * @param Request $request
     * @return JSON response
     * @todo later ,we will move this validation into separate rules
     */
    public function showArticlesReport(Request $request)
    {
        //echo "test11".$request->input('startDate');exit;

       // return response("test");
       $request->validate(
        [
            'startDate' => 'required|before_or_equal:endDate',
            'endDate' => 'required'

        ]
    );

    $this->processArticleReportCommand(
            $request->input('startDate'),
           $request->input('endDate')
    );


    return $this->responseBuilderObj->response202('successfully done');

    }

    /**
     * Undocumented function
     *
     * @param [type] $fromDate
     * @param [type] $toDate
     * @return void
     */
    public function processArticleReportCommand(String $fromDate ,String $toDate)
    {

        //$fromDate = "2019-01-10";

       // $toDate = "2019-05-02";

        $process = new Process("php artisan article-report $fromDate $toDate", base_path());

        $process->start();
    }
}
