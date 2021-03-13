<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;
use App\Models\PesanModel;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        // $email = Auth::user()->email;
        // $this->PesanModel = new PesanModel;
        // $data = [
        //     'data' => $this->PesanModel->getCart($email), 
        // ];
        // $currCart = count($data['data']);
        // View::share('currCart',$currCart);
    }
}
