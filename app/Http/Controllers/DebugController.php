<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Event;
use App\Models\Person;
use App\User;
use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function generate()
    {
        factory(Company::class,20);
        factory(User::class,20);
        factory(City::class,20);
        factory(Event::class,20);
        factory(Person::class,20);

        return response(['status'=> 'ok']);

    }
}
