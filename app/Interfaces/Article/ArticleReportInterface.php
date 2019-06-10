<?php
namespace App\Interfaces\Article;


Interface ArticleReportInterface {


    /**
     * Displaying articles report
     *
     * @param String $startDate
     * @param String $endDate
     * @return JSON
     */
    public function showArticleReport(String $startDate,String $endDate);

}
