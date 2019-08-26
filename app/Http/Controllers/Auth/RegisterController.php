<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Model\Clinic;
use App\Model\Portal_User;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }

    protected function registerClinic(Request $request)
    {
         $rules = [
            'f_name' => 'required',
            'l_name' => 'required',
            'mobile' => 'required|min:8|max:8',
            'email' => 'required|unique:portal_users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => '',
            'name' => 'required',
            'cr_no' => 'required',
            'license_no' => 'required',
            'postal_code' => 'required',
            'address_1' => 'required',
            'address_2' => '',
            'country_id' => 'required',
            // 'types' => 'required',
            'avg_doctors' => 'required',
            'avg_prescriptions' => 'required',
            'clinic_logo'=>'',
            'cr_image'=>'',
            'nhra_image'=>'',
            'specilities'=>'required'
        ];

 $validator = Validator::make($request->all() , $rules);
        if($validator->fails()){
            return back()->with('errors',$validator->errors())->withInput();
        }
        $new_clinic = new Clinic();
        $new_clinic->name = $request->name;
        $new_clinic->email = $request->email;
        $new_clinic->address = $request->address_1;
        $new_clinic->address2 = $request->address_2;
        $new_clinic->mobile = '00973'.$request->mobile;
        $new_clinic->cr_no = $request->cr_no;
        $new_clinic->license_no = $request->license_no;
        $new_clinic->logo = '';
        $new_clinic->cr_image = '';
        $new_clinic->nhra_image = '';
        $new_clinic->country_id = $request->country_id;
        $new_clinic->postal_code = $request->postal_code;
        $new_clinic->avg_doctors = $request->avg_doctors;
        $new_clinic->avg_prescriptions = $request->avg_prescriptions;
        $new_clinic->save();
        $new_clinic = Clinic::find($new_clinic->id);
        $new_clinic->specilities()->sync($request->specilities);

        $new_clinic_person = new Portal_User();
        $new_clinic_person->name = $request->f_name . ' ' . $request->l_name;
        $new_clinic_person->email = $request->email;
        $new_clinic_person->password = bcrypt($request->password);
        $new_clinic_person->user_types_id = 1;
        $new_clinic_person->status_id = 0;
        $new_clinic_person->clinic_id = $new_clinic->id;
        $new_clinic_person->save();

    }

}
