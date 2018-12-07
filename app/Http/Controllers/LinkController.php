<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class LinkController extends Controller
{
    public function storagelink()
    {
        $migracion = Artisan::call('storage:link');
        return dd('Migración lista');
    }
}
