<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinRule implements Rule
{


    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z]{6,10}$/', $value) ?: false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '(Numbers from 0 - 9,
                No capital letters, 
                no special symbols at all, 
                min of 6 characters, 
                max of 10 characters)';
    }
}
