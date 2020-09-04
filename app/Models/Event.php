<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Event
 * @package App\Models
 */
class Event extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'event_name',
        'location'
    ];

    /**
     * @return HasOne
     */
    public function location():HasOne
    {
        return $this->hasOne(City::class);
    }
}
