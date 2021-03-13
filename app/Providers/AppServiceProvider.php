<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;
use App\Models\PesanModel;
use Illuminate\Support\Facades\View;
use Mockery\Undefined;

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
        // view()->composer('*', function($view) {
            // if (Auth::check('email')){
            //     View::share('anjay',0);
            //     echo "<script>alert('Email Gk kosong');</script>";
            // }else{
            //     // dd(Auth::check());
            //     View::share('anjay',0);
            //     echo "<script>alert('Email kosong');</script>";
            // }
            // if(!empty(Auth::user())) {            
            //     View::share('anjay',0);
            //     echo "<script>alert('Email Gk kosong');</script>";
            // }
            // else if(empty(Auth::user())) {
            //     echo "<script>alert('Email Kosong');</script>";
            //     View::share('anjay',0);
            // }
        // });

        // else if(isset(Auth::user()->email)){
        //     view()->composer('*', function($view) {
        //         $view->with('user', auth()->user()->email);
        //         $view = Auth::user()->email;
        //         $this->PesanModel = new PesanModel;
        //         $data = [
        //             'data' => $this->PesanModel->getCart($view), 
        //         ];
        //         $view = count($data['data']);
        //         View::share('anjay',$view);
        //     });
        // }
            // $cart = Cart::where('user_id', Auth::user()->email);
            // if ($cart) {
            //     view()->share('cart', $cart);
            // }
        // }
        // $email = Auth::user()->email;
        // $this->PesanModel = new PesanModel;
        // $data = [
        //     'data' => $this->PesanModel->getCart($email), 
        // ];
        // $currCart = count($data['data']);
        // View::share('currCart',$currCart);
    }
}
