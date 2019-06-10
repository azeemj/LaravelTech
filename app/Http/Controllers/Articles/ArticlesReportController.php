<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use App\Helpers\Responser;


class ArticlesReportController extends Controller
{


    private $responseBuilderObj;

    /**
     * ArticlesReportController constructor.
     *
     * @param Responser $responseBuilder
     * @return void
     */
    public function __construct(Responser $responseBuilder)
    {
        $this->responseBuilderObj = $responseBuilder;

    }

    /**
     * Request comes to this function
     *
     * @param Request $request
     * @return JSON response
     * @todo later ,we will move this validation into separate rules
     */
    public function showArticlesReport(Request $request)
    {
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
     * Processing the artisan command
     *
     * @param String $fromDate
     * @param String $toDate
     * @return void
     */
    public function processArticleReportCommand(String $fromDate, String $toDate)
    {
        $process = new Process("php artisan article-report $fromDate $toDate", base_path());
        $process->start();
    }
}
