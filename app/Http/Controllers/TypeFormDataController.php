<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeFormDataController extends Controller
{
    //

    public function store()
    {
        $url = "https://api.typeform.com/v1/form/yG74ZF?key=a2db36e4119ac771e9d72d655bc4bfa742fc5c30";
        $JSON = file_get_contents($url);
        $data = json_decode($JSON);
        return $data;
    }

    public function test()
    {
        $data = "doğukan";
        Session::put('user', $data);

    }
}
