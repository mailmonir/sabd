<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Location;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $locations = Location::all();

        return view('auth.register')->with('locations', $locations);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'company' => 'required',
            'address' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required',
            'location' => 'required',
            'workers' => 'required|integer|min:1',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required',
            'designation' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'agree' => 'required',
            // 'cp_email' => 'email|unique:users',
            // 'g-recaptcha-response' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if ($data['gender'])
        {
            $avatar = 'public/img/default/avatars/male.jpg';
        }
        else
        {
            $avatar = 'public/img/default/avatars/female.jpg';
        }

        $user = User::create([
            'company' => $data['company'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'location_id' => $data['location'],
            'workers' => $data['workers'],
            'fname' => $data['firstname'],
            'lname' => $data['lastname'],
            'designation' => $data['designation'],
            'gender' => $data['gender'],
            'agree' => $data['agree'],
            'password' => Hash::make($data['password']),
            'slug' => str_slug($data['company']),
            'avatar' => $avatar,
        ]);

        return $user;
    }

        /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        return response()->json([
            'response' => 'success',
            'message' => 'Company registered',
        ]);
    }
}
