<?php

use Illuminate\Support\Facades\Route;

function set_active($uri)
{
    if(Route::is($uri)){
        return 'active';
    }
}
