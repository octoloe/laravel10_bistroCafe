<?php

namespace App\Rules;

use Carbon\Carbon;

use Illuminate\Contracts\Validation\Rule;

class DateBetween implements Rule
{

    private $date;
    public function __construct()
    {
    }


    public function passes($attribute, $value)
    {
        $pickupDate = Carbon::parse($value);
        $lastDate = Carbon::now()->addWeek();

        return $value >= now() && $value <= $lastDate;
    }

    public function message()
    {
        return "Bitte buchen Sie Ihre Reservierung innerhalb einer Woche von heute an!";
    }
}


















// namespace App\Rules;

// use Carbon\Carbon;
// use Closure;
// use Illuminate\Contracts\Validation\ValidationRule;
// use Illuminate\Contracts\Validation\Rule;



/* 


class DateBetween implements ValidationRule
// class DateBetween implements Rule
{
    // public function __construct()
    // {
    // }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    // public function validate(string $attribute, mixed $value, Closure $fail): void
    // {
    //     $pickupDate = Carbon::parse($value);
    //     $lastDate = Carbon::now()->addWeek();

    //     return $value >= now() && $value <= $lastDate;
    // }

    // public function passes($attribute, $value)
//     public function validate(string $attribute, mixed $value, Closure $fail): void
//     {
//         $pickupDate = Carbon::parse($value);
//         $lastDate = Carbon::now()->addWeek();

//         return $value >= now() && $value <= $lastDate;
//     }


//     public function message()
//     {
//         return "Bitte buchen Sie Ihre Reservierung innerhalb einer Woche von heute an!";
//     }
// }