<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ContactPerson extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($contactPerson) {
            $contactPerson->uuid = Str::uuid();
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
