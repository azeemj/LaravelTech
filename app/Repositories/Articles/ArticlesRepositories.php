<?php

namespace App\Repositories\Articles;

use App\Interfaces\Article\ArticleReportInterface;


class ArticlesRepositories implements ArticleReportInterface
{

    /**
     * This is the place where the complex logic will be added
     *
     * @param String $startDate
     * @param String $endDate
     * @return mixed
     * @todo later complex logic will be implemented
     */
    public function showArticleReport(String $startDate, String $endDate)
    {
        $sampleOutput = ['sample outout' => 'sample output'];

        return $sampleOutput;
    }
}
