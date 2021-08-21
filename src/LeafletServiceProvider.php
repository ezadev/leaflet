<?php

namespace Ezadev\Leaflet;

use Ezadev\Admin\Form;
use Illuminate\Support\ServiceProvider;

class LeafletServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Leaflet $extension)
    {
        if (!Leaflet::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'leaflet');
        }

        $this->app->booted(function() {
            Form::extend('leaflet', LeafletMap::class);
        });
    }
}
