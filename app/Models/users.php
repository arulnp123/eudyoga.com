<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    /**
     * Check if the given email already exists in the database.
     *
     * @param string $email
     * @return bool
     */
    public static function emailExists($email)
    {
        return static::where('email', $email)->exists();
    }
}