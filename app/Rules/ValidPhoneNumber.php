<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidPhoneNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Adjust regex as needed to validate phone number
        return preg_match('/^\+880[0-9]{10}$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be a valid phone number.';
    }
}
