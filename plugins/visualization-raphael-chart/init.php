<?php

$asset_domain = $GLOBALS['dw_config']['asset_domain'];
$asset_url = '//' . $asset_domain . '/';

DatawrapperVisualization::register($plugin, array(
    "id" => "raphael-chart",
    "libraries" => array(
        array(
            'local' => 'vendor/d3.full.min.js',
            'cdn' => '//'.$GLOBALS['dw_config']['asset_domain'].'/d3/d3-with-jetpack.min.js'
        ),
        array(
            "local" => "vendor/chroma.min.js",
            "cdn" => !empty($asset_domain)
                ? $asset_url . "vendor/chroma-js/0.5.4/chroma.min.js"
                : null
        ),
        array(
            "local" => "vendor/raphael-2.1.2.min.js",
            "cdn" => !empty($asset_domain)
                ? $asset_url . "vendor/raphael-js/2.1.2/raphael-min.js"
                : null
        )
    )
));
