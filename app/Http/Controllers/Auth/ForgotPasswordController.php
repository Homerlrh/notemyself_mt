<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Validator;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;


    protected function changeUserPassword($email, $password)
    {
        return User::where('email', $email)->update(['password' => bcrypt($password)]);
    }


    public function resetWithEmail()
    {
        $attributes = request()->validate([
            'email' => ['email', 'required']
        ]);

        $isExist = User::where('email', $attributes['email'])->exists();

        if (!$isExist) {
            return redirect(route("password.request"))
                ->withInput(['email' => $attributes['email']])
                ->withErrors(['email' => "email not exist"]);
        }
        $six_digit_random_number = mt_rand(100000, 999999);

        $this->changeUserPassword($attributes['email'], $six_digit_random_number);

        return view("auth.passwords.afterReset",
            ['password' => $six_digit_random_number]);
    }
}
