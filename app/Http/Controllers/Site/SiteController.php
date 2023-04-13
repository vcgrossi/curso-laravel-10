<?php

namespace App\Http\Controllers\Site;
#use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
#use Illuminate\Foundation\Validation\ValidatesRequests;

class SiteController
{
    public function contact()
    {
        #use AuthorizesRequests, ValidatesRequests;
        return view('site/contact');
    }
}

?>