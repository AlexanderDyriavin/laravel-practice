<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class City
 * @package App\Models
 */
class City extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'country',
        'city'
    ];

    /**
     * @return BelongsTo
     */
    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
