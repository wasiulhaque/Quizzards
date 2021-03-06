<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\questionTable;
use App\userTable;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        //
        /*        print_r($request->input());*/
        /*  $newSession=userTable::where('phone',$request->input('phone'))
              ->where('password',Hash::make($request->input('password')))->limit(1)->firstOr(function (){
                  print_r('NO');
              });*/
        $newSession = userTable::where('phone', $request->input('phone'))->firstOr(function () {
            print_r('NOT Registered');
        });
        if (Hash::check($request->input('password'), $newSession->password)) {
            if (strcmp($newSession->role, 'Teacher')) {

                $student_name=$newSession->name;
                return view('students.searchExam',compact('student_name'));
            } else {
                $temp = $newSession->user_id;
                return view('Teacher.teacherTask', compact('temp'));
            }
        } else {
            print_r("Password is Incorrect");
        }

        if ($newSession != null) {
            //return view('intermediateViews. examId');
            //  print_r('Nice');
            /*            print_r($newSession);*/
        }

    }

}
