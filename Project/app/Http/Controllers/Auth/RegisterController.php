<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\userTable;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function store(Request $request)
    {
        //
        print_r($request->input());
        $new_user=new userTable;
        $temp=rand(0,100);
        $new_user->user_id=$temp;
        $password=Hash::make($request->input('password'));
        /*$new_user->first_name=$request->input('fname');*/
        $new_user->name=$request->input('lname');
        $new_user->phone=$request->input('phone');
        $new_user->password=$password;
        $new_user->institution='IUT';

        $new_user->subscription='Primary';
        $new_user->role=$request->input('role');
 /*       $new_user->updated_at=time();
        $new_user->created_at=time();*/
        $new_user->save();
        $student_name=$request->input('lname');
        if(strcmp($new_user->role,'Teacher')==0){

            return view('Teacher.teacherTask',compact('temp'));
        }
        else{
            return view('students.searchexam',compact('student_name'));
        }


    }
}
