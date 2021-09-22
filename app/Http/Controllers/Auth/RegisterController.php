<?php

namespace App\Http\Controllers\Auth;

use App\Country;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo;

    public function redirectTo()
    {
        if (Auth::user()->user_type == 'super-admin') {

            return 'super-admin/dashboard';
        } elseif (Auth::user()->user_type == 'employer-company') {
            return 'employer-company/dashboard';
        } elseif (Auth::user()->user_type == 'welfare-service-center-company') {
            return 'welfare-centre/dashboard';
        } elseif (Auth::user()->user_type == 'bangladeshi-embassy') {
            return 'bangladesh-embassy/dashboard';
        } elseif (Auth::user()->user_type == 'uae-admin') {
            return 'uae-admin/dashboard';
        } elseif (Auth::user()->user_type == 'master-one-stop-service') {
            return 'one-stop-service/dashboard';
        } elseif (Auth::user()->user_type == 'child-one-stop-service') {
            return 'child-one-stop-service/dashboard';
        } elseif (Auth::user()->user_type == 'medical-company') {
            return 'medical-agency/dashboard';
        } elseif (Auth::user()->user_type == 'training-company') {
            return 'training-agency/dashboard';
        } elseif (Auth::user()->user_type == 'travel-company') {
            return '/dashboard';
        } elseif (Auth::user()->user_type == 'biometric-company') {
            return '/dashboard';
        } elseif (Auth::user()->user_type == 'recruiting-agency') {
            return 'recruiting-agency/dashboard';
        } elseif (Auth::user()->user_type == 'bangladeshi-admin') {
            return 'bangladesh-admin/dashboard';
        } elseif (Auth::user()->user_type == 'employer') {
        } else {
            return route('register');
        }
    }

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5'],
            'country' => 'required',
            'role' => 'required',
            'terms' => 'required',
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

        $userType = "";
        if ($data['role'] == 1) {
            $userType = "super-admin";
        } elseif ($data['role'] == 2) {
            $userType = "employer-company";
        } elseif ($data['role'] == 3) {

            $userType = "welfare-service-center-company";
        } elseif ($data['role'] == 4) {
            $userType = "bangladeshi-embassy";
        } elseif ($data['role'] == 5) {
            $userType = "master-one-stop-service";
        } elseif ($data['role'] == 6) {
            $userType = "child-one-stop-service";
        } elseif ($data['role'] == 7) {
            $userType = "medical-company";
        } elseif ($data['role'] == 8) {
            $userType = "training-company";
        } elseif ($data['role'] == 9) {
            $userType = "travel-company";
        } elseif ($data['role'] == 10) {
            $userType = "biometric-company";
        } elseif ($data['role'] == 11) {
            $userType = "recruiting-agency";
        } elseif ($data['role'] == 12) {
            $userType = "bangladeshi-admin";
        } elseif ($data['role'] == 13) {
            $userType = "employer";
        } elseif ($data['role'] == 14) {
            $userType = "uae-admin";
        } elseif ($data['role'] == 15) {
            $userType = "";
        } else {
            echo "some this wrong";
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role'],
            'user_type' => $userType,
            'active_status' => "New",
            'country_id' => $data['country'],
        ]);
    }
    public function showRegistrationForm()
    {
        $countries = Country::where('status', 'active')->orderBy('id', 'DESC')->get();
        $roles = Role::where('status', 'active')->orderBy('id', 'DESC')->get();
        return view('auth.register', compact('countries', 'roles'));
    }
}
