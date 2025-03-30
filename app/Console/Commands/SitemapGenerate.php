<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Psr\Http\Message\UriInterface;
use Spatie\Sitemap\Sitemap;
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
        $siteUrl = config('app.url');
        $sitemapPath = public_path('sitemap.xml');
        $this->info("Generating sitemap for: " . $siteUrl . "\n");

        $completeSitemap = Sitemap::create();

        $this->withProgressBar([
            $siteUrl,
            $siteUrl . '/fr/home',
        ], function (string $url) use ($completeSitemap) {
            $sitemap = SitemapGenerator::create($url)
            ->shouldCrawl(function (UriInterface $url) {
                $shouldCrawl = strpos($url->getPath(), '/curator') === false;

                if ($shouldCrawl) {
                    $this->info("\tCrawling: " . $url->getPath());
                } else {
                    $this->warn("\Skipped: " . $url->getPath());
                }

                return $shouldCrawl;
            })
            ->getSitemap();

            $completeSitemap->add($sitemap->getTags());
        });

        $completeSitemap->writeToFile($sitemapPath);

        $this->info("\nSitemap generated successfully at path: " . $sitemapPath);
    }
}
