<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSlug;

class ResumeProfile extends Model
{
    use HasFactory;

    //protected $slugSourceColumn = 'title';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // Accessor for skills
    protected function skills(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true), // Decode JSON on access
            set: fn($value) => json_encode($value) // Encode to JSON on set
        );
    }

    // Accessor for hobbies_interests
    protected function hobbiesInterests(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true), // Decode JSON on access
            set: fn($value) => json_encode($value) // Encode to JSON on set
        );
    }
}
