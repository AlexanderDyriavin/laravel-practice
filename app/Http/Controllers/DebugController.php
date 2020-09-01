<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function generate()
    {
        factory(Company::class,20);
    }
}
