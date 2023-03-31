<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHobbyController extends Controller
{
    public function idx()
    {
        return 'My hobby is: <br>
        1)PHP <br>
        2)JS <br>
        3)Powerlifting <br>';
    }
}