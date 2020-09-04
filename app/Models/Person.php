<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Person
 * @package App\Models
 */
class Person extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name'
    ];

    /**
     * @return HasOne
     */
    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
