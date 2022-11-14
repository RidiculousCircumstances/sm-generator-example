<?php

use Rc\SmGenerator\Sitemap;

include './vendor/autoload.php';

$paths = Sitemap::create()->add([
    [
        'loc' => 'http://site.ru',
        'lastmod' => '2022-11-12',
        'changefreq' => 'daily',
        'priority' => '0.5'
    ],
    [
        'loc' => 'http://site.ru/about',
        'lastmod' => '2022-11-22',
        'changefreq' => 'hourly',
        'priority' => '0.2'
    ]
    ])
    ->writeToJson('sitemap', './sitemap/json')
    ->writeToXml('sitemap', './sitemap/xml')
    ->writeToCsv('sitemap', './sitemap/csv')
    ->getPaths();