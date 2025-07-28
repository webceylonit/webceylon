<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     */
    protected $description = 'Generate the sitemap.xml file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/about-us'))
            ->add(Url::create('/services'))
            ->add(Url::create('/portfolio'))
            ->add(Url::create('/contact'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ sitemap.xml generated successfully!');
    }
}
