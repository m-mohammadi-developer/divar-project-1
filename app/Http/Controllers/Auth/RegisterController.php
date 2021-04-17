<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $message = array(
            'name.required' => 'وارد کردن نام ضروری است',
            'name.string' => 'لطفا نام خود را با فرمت صحیح وارد کنید',
            'name.max' => 'طول نام حداکثر :max کاراکتر است',

            'email.required' => 'وارد کردن ایمیل ضروری است',
            'email.string|email' => 'لطفا ایمیل خود را با فرمت صحیح وارد کنید',
            'email.unique' => 'ایمیل تکراری هست ایمیل دیگری وارد کنید',

            'password.required' => 'پسورد نباید خالی باشد',
            'password.string|confirmed' => 'پسورد را به درستي وارد نماييد',
            'password.min' => 'طول پسورد حداقل بايد :min كاراكتر باشد',

            'password_confirmation.same' => 'پسورد و تكرار آن بايد يكي باشد'
        );

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['same:password'],
        ], $message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('dashboard.auth.register');
    }
    
}
