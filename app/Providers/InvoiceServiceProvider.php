<?php

namespace App\Providers;

use App\Interfaces\Invoice;
use App\Util\InvoicePDF;
use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider
{
    /**
    * Register any application services.
    *
    * @return void
    */
    public function register()
    {
        $this->app->bind(Invoice::class, function (){
            return new InvoicePDF();
        });
    }
}
