<?php

namespace App\Rules;

use Carbon\Carbon;

use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{

    private $date;
    public function __construct()
    {
    }


    public function passes($attribute, $value)
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);

        // when the bistro is open
        $earliestTime = Carbon::createFromTimeString('9:00:00');
        $lastTime = Carbon::createFromTimeString('21:00:00');

        return $pickupTime->between($earliestTime, $lastTime) ? true : false;
    }

    public function message()
    {
        return "Bitte buchen Sie Ihre Uhrzeit zwischen 9.00 und 21.00 Uhr!";
    }
}


/*
namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
  
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
}
*/