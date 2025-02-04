<?php

namespace App\Laravel\Services;

use App\Laravel\Models\{User};

use Illuminate\Validation\Validator;

use Hash;

class CustomValidator extends Validator
{
    public function validatePasswordFormat($attribute, $value, $parameters)
    {
        return preg_match(("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-.]).{8,}$/"), $value);
    }
}
