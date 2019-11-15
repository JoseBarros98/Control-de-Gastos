<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use  Socialite;

class SocialController extends Controller
{
    //
    public function redirect ($provider){

        return Socialite::driver($provider)->redirect();
    }

    public function callback ($provider){

        $user = Socialite::driver($provider)->user();

        //return( $user->name );
        return Redirect::to('/ingreso');
    }
}
