<?php
namespace App\Repositories\Articles;

use App\Interfaces\Article\ArticleReportInterface;

class ArticlesRepositories implements ArticleReportInterface
{

    /**
     * @param String $startDate
     * @param String $endDate
     * @return mixed
     */
    public function showArticleReport(String $startDate, String $endDate)
    {
        // TODO: Implement showArticleReport() method.
        //implement the complex logic

       $sampleOutput=['sample outout'=>'sample output'];

       return $sampleOutput;
    }




}
