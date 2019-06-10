<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Article\ArticleReportInterface;
use App\Repositories\Articles\ArticlesRepositories;

class RepositoryServiceProvider extends serviceProvider{

    public function boot()
    {

    }

    public function register(){
     $this->app->bind('App\Interfaces\Article\ArticleReportInterface', 'App\Repositories\Articles\ArticlesRepositories');
    }


}

