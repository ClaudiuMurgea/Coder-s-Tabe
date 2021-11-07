<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $attributes = [
        'active' => 0,
        'name' => 'Example'
    ];

    public function scopeActive ($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive ($query)
    {
        return $query->where('active', 0);
    }

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    // protected $fillable = ['name', 'email', 'active'];
    protected $guarded = [];

    public function Company ()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-progress'
        ];
    }
}

