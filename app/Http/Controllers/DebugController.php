<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\User;
use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function generate()
    {
        factory(Company::class,20);
        factory(User::class);
        factory(User::class);

        return response(['status'=> 'ok']);

    }
}
