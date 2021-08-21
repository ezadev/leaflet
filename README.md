leaflet
======

Get Started
---
```
composer require ezadev/leaflet
```

How to use?
---

Enable `leaflet` in config. config/admin.php
```
    'extensions' => [
        'leaflet' => [
            'enable' => true,
        ],
    ],
```

Write in the YourController.php
```
$form->leaflet('latitude', 'longitude');
```

Configuration
----

```
    'extensions' => [
        'leaflet' => [
            'enable' => true,
            'config' => [
                // tileLayer
                'tile' => \Ezadev\Leaflet\Tiles\OpenStreetMapDE::class, // default \Ezadev\Leaflet\Tiles\Sputnik::class
                // marker zoom
                'zoom' => 13, // default maxZoom - 1
                // style GeoSearchControl
                'style' => 'bar', // default 'bar'
                // 'bing' or 'google' or 'esri'
                'geoProvider' => 'OpenStreetMap', // default 'OpenStreetMap'
            ],
            'keys' => [
                'bing' => '__YOUR_BING_KEY__',
                'google' => '__YOUR_GOOGLE_KEY__'
            ],
        ],
    ],
```
