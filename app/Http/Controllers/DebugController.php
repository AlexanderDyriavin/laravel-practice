<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\Event;
use App\Models\Person;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Response;

/**
 * Class DebugController
 * @package App\Http\Controllers
 */
class DebugController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|Response
     */
    public function index()
    {
        $data = [
            'companies' => Company::all(),
            'users' => User::all(),
            'cities' => City::all(),
            'events' => Event::all(),
            'person' => Person::all(),
        ];

        return response(['data' => compact('data')],200);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|Response
     */
    public function create()
    {
        factory(Company::class, 20)->create();
        factory(User::class, 20)->create();
        factory(City::class, 20)->create();
        factory(Event::class, 20)->create();
        factory(Person::class, 20)->create();

        return response(['status' => 'ok']);

    }
}
