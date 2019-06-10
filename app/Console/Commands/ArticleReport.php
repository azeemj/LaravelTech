<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Interfaces\Article\ArticleReportInterface;


class ArticleReport extends Command
{


    protected $articleReportRepository;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article-report {fromDate} {toDate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Article report generator';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ArticleReportInterface $articleReportRepository)
    {
        parent::__construct();
        $this->articleReportRepository =$articleReportRepository;

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    Log::info('test cc',['xxx'=>$this->argument('fromDate')]);

    //do ur complex logic here and return a resposne
    $this->articleReportRepository->showArticleReport($this->argument('fromDate'),$this->argument('endDate'));




    }
}
