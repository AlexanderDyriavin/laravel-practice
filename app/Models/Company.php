<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Company
 * @package App\Models
 */
class Company extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'address',
        'phone'
    ];

    /**
     * @return HasMany
     */
    public function employe(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}
