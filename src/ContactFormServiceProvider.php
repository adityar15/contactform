<?php

namespace adityar15\contactform;


use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;
use adityar15\contactform\Contactform;
use Illuminate\Support\Serviceprovider;

class ContactFormServiceProvider extends Serviceprovider
{
    public function boot(){
        $this->registerViews();
        $this->registerComponent();
        $this->registerAndPublishConfigurations();
    }

    public function registerViews(){
        
        $this->loadViewsFrom(__DIR__.'\\..\\resources\\views', 'contactform');
        $this->loadViewsFrom(__DIR__.'\\..\\resources\\views', 'emailtemplate');

        $this->publishes([
            __DIR__.'\\..\\resources\\views' => resource_path('views/vendor/contactform'),
        ]);

    }

    public function register(){
     
    }

    public function registerComponent(){
        Livewire::component('adityar15contactform', Contactform::class);
    }

    public function registerAndPublishConfigurations(){
        $this->publishes([
            __DIR__.'\\..\\config\\contactform.php' => config_path('contactform.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'\\..\\config\\contactform.php', 'contactform'
        );
    
    }


}