<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class SitemapGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate website sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemapPath = public_path('sitemap.xml');
        SitemapGenerator::create(config('app.url'))->writeToFile($sitemapPath);
        $this->info("Sitemap generated successfully at path: " . $sitemapPath);
    }
}
