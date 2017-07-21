<?php

namespace Tsameem\Contact;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         $this->publishes([
            // publishing all views
            __DIR__.'/views' => base_path('resources/views/tsameem'),
            // publishing all controllers
            __DIR__.'/controllers' => base_path('app/Http/Controllers'),
        ]);
        $this->publishes([
            // adding required migration table
            __DIR__.'/req/2017_07_21_150946_create_contacts_table.php' => base_path('database/migrations/2017_07_21_150946_create_contacts_table.php'),
            // adding required model
            __DIR__.'/req/Contact.php' => base_path('app/Contact.php'),
            __DIR__.'/req/ContactRequest.php' => base_path('app/Http/Requests/ContactRequest.php'),            
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes/routes.php';
    }
}
