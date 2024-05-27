<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class EmailNotFound implements Rule
{
    public function __construct()
    {
        // Initialization if needed
    }

    public function passes($attribute, $value)
    {
        // Check if the email exists in the users table
        return DB::table('users')->where('email', $value)->exists();
    }

    public function message()
    {
        return 'Email belum terdaftar';
    }
}
