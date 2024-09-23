<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'phone',
        'email',
        'language',
    ];

    /**
     * Validate the email format before saving to the database.
     *
     * @param  string  $value
     * @return void
     */
    public function setEmailAttribute($value)
    {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->attributes['email'] = $value;
        } else {
            throw new \InvalidArgumentException('Invalid email format');
        }
    }

    /**
     * Format the phone number when retrieved.
     *
     * @param  string  $value
     * @return string
     */
    public function getPhoneAttribute($value)
    {
        // Custom formatting, e.g., +62 123-456-7890
        return '+62 ' . substr($value, 0, 3) . '-' . substr($value, 3, 3) . '-' . substr($value, 6);
    }
}
